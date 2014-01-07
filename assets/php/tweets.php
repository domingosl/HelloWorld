<?php

	##
	##	CONFIG
	##
	##	You must login to http://dev.twitter.com and go to https://dev.twitter.com/apps where you should create a new a new application. 
	##	Give it a name, description and website url.
    ##
    ##	Once your press Create Application it will give you a consumer key and consumer secret, click the create access token below to 
	##	then create aaccess token and a access token secret.
	##
	##
	###############################################
	
	$consumerkey 		= 'QeGDdNzm0kVFjnYHzEA8SA';
	$consumersecret 	= 'EOruM0DjTAqgpJgmQTPEDXnIZM33U8jmIKqOoRZUIM';
	$accesstoken 		= '286403-FpNoJ3g5p0vayYyjj5sxGyWQhXlqm0cc4RJhhhaY';
	$accesssecret 		= 'A6Wm0GG6xiZhmI45bCjYjyAYKGREV4rK7BCKYsomfI';
	
	###############################################
	###############################################
	###############################################
	
	function buildBaseString($baseURI, $method, $params) {
	    $r = array();
	    ksort($params);
	    foreach($params as $key=>$value){
	        $r[] = "$key=" . rawurlencode($value);
	    }
	    return $method."&" . rawurlencode($baseURI) . '&' . rawurlencode(implode('&', $r));
	}
	
	function buildAuthorizationHeader($oauth) {
	    $r = 'Authorization: OAuth ';
	    $values = array();
	    foreach($oauth as $key=>$value)
	        $values[] = "$key=\"" . rawurlencode($value) . "\"";
	    $r .= implode(', ', $values);
	    return $r;
	}
			
	function timeago($timestamp){
	    //type cast, current time, difference in timestamps
	    $timestamp      = (int) $timestamp;
	    $current_time   = time();
	    $diff           = $current_time - $timestamp;
	    
	    //intervals in seconds
	    $intervals      = array (
	        'year' => 31556926, 'month' => 2629744, 'week' => 604800, 'day' => 86400, 'hour' => 3600, 'minute'=> 60
	    );
	    
	    //now we just find the difference
	    if ($diff == 0)
	    {
	        return 'just now';
	    }    
	
	    if ($diff < 60)
	    {
	        return $diff == 1 ? $diff . ' second ago' : $diff . ' seconds ago';
	    }        
	
	    if ($diff >= 60 && $diff < $intervals['hour'])
	    {
	        $diff = floor($diff/$intervals['minute']);
	        return $diff == 1 ? $diff . ' minute ago' : $diff . ' minutes ago';
	    }        
	
	    if ($diff >= $intervals['hour'] && $diff < $intervals['day'])
	    {
	        $diff = floor($diff/$intervals['hour']);
	        return $diff == 1 ? $diff . ' hour ago' : $diff . ' hours ago';
	    }    
	
	    if ($diff >= $intervals['day'] && $diff < $intervals['week'])
	    {
	        $diff = floor($diff/$intervals['day']);
	        return $diff == 1 ? $diff . ' day ago' : $diff . ' days ago';
	    }    
	
	    if ($diff >= $intervals['week'] && $diff < $intervals['month'])
	    {
	        $diff = floor($diff/$intervals['week']);
	        return $diff == 1 ? $diff . ' week ago' : $diff . ' weeks ago';
	    }    
	
	    if ($diff >= $intervals['month'] && $diff < $intervals['year'])
	    {
	        $diff = floor($diff/$intervals['month']);
	        return $diff == 1 ? $diff . ' month ago' : $diff . ' months ago';
	    }    
	
	    if ($diff >= $intervals['year'])
	    {
	        $diff = floor($diff/$intervals['year']);
	        return $diff == 1 ? $diff . ' year ago' : $diff . ' years ago';
	    }
	}
	
	$url = "https://api.twitter.com/1.1/statuses/user_timeline.json";
	
	$oauth_access_token 		= $accesstoken;
	$oauth_access_token_secret 	= $accesssecret;
	$consumer_key 				= $consumerkey;
	$consumer_secret 			= $consumersecret;
	
	$oauth = array( 'oauth_consumer_key' => $consumer_key,
	                'oauth_nonce' => time(),
	                'oauth_signature_method' => 'HMAC-SHA1',
	                'oauth_token' => $oauth_access_token,
	                'oauth_timestamp' => time(),
	                'oauth_version' => '1.0');
	
	$base_info = buildBaseString($url, 'GET', $oauth);
	$composite_key = rawurlencode($consumer_secret) . '&' . rawurlencode($oauth_access_token_secret);
	$oauth_signature = base64_encode(hash_hmac('sha1', $base_info, $composite_key, true));
	$oauth['oauth_signature'] = $oauth_signature;
	
	$header = array(buildAuthorizationHeader($oauth), 'Expect:');
	$options = array( CURLOPT_HTTPHEADER => $header,
	                  CURLOPT_HEADER => false,
	                  CURLOPT_URL => $url,
	                  CURLOPT_RETURNTRANSFER => true,
	                  CURLOPT_SSL_VERIFYPEER => false);
	
	$feed = curl_init();
	curl_setopt_array($feed, $options);
	$json = curl_exec($feed);
	curl_close($feed);
	
	$twitter_data = json_decode($json);

	$limit = 1;
	foreach($twitter_data as $tweet):
		if($limit<=1):
			echo '<div class="tweet_text"><a href="http://www.twitter.com/'.$tweet->user->screen_name.'" class="screenanme">'.$tweet->user->screen_name.'</a>: '.$tweet->text.' <span class="tweet_time"><a href="https://twitter.com/'.$tweet->user->screen_name.'/status/'.$tweet->id.'">'.timeago(strtotime($tweet->created_at)).'</a></span></div>';
			$limit++;
		endif;
	endforeach;
?>