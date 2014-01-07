<!DOCTYPE html>
<!--[if lt IE 7 ]> <html lang="en" class="ie ie6"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="ie ie7"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="ie ie8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="ie ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html dir="ltr" lang="en-US"><!--<![endif]-->
<head>

	<!-- Basic Page Needs
  ================================================== -->
	<meta charset="utf-8">
	<title>Customisable Landing Page</title>
	<meta name="description" content="Landing page for x. We do Y. Coming soon. Whatever." />

	<!-- Google Web Fonts
  ================================================== -->
	<link href='http://fonts.googleapis.com/css?family=Lobster+Two:700|Bree+Serif|Muli' rel='stylesheet' type='text/css'>

	<!-- Mobile Specific Metas
  ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- CSS Stylesheets
  ================================================== -->
	<link rel="stylesheet" href="assets/css/resets.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="assets/css/style.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="assets/css/media-queries.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="assets/css/prettyPhoto.css" type="text/css" media="screen"/> <!-- Image Gallery -->

	<!--[if lt IE 9]>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
		<script src="assets/js/selectivizr.min.js"></script>
	<![endif]-->

	<!-- Javascript
  ================================================== -->
	<script src='http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js'></script>
	<!-- <script src="//maps.googleapis.com/maps/api/js?sensor=false"></script> -->
	<!-- <script src="assets/js/supersized.js"></script> -->
	<script src="assets/js/countdown.min.js"></script>
	<script src="assets/js/prettyphoto.js"></script>

	<style>

		#head  {
			background-color:#a5dc4f;
			background-image:-webkit-linear-gradient(top,#a5dc4f 0,#7db535 100%);
			background-image:-moz-linear-gradient(top,#a5dc4f 0,#7db535 100%);
			background-image:-ms-linear-gradient(top,#a5dc4f 0,#7db535 100%);
			background-image:-o-linear-gradient(top,#a5dc4f 0,#7db535 100%);
			background-image:linear-gradient(top,#a5dc4f 0,#7db535 100%);
		}


		::-moz-selection{background:#a5dc4f;color:#fff;text-shadow:none}
		::selection{background:#a5dc4f;color:#fff;text-shadow:none}

		.logotext.square:hover h1,
		.logotext.oval:hover h1 {
			background:#a5dc4f;
		}

		#progress-bar {background:#a5dc4f}

		.contact button,
		#head .newsletter button,
		.calltoaction a {
			background-color:#a5dc4f;
			background-image:-webkit-linear-gradient(top,#a5dc4f 0,#7db535 100%);
			background-image:-moz-linear-gradient(top,#a5dc4f 0,#7db535 100%);
			background-image:-ms-linear-gradient(top,#a5dc4f 0,#7db535 100%);
			background-image:-o-linear-gradient(top,#a5dc4f 0,#7db535 100%);
			background-image:linear-gradient(top,#a5dc4f 0,#7db535 100%);
			border-bottom:2px solid #609123;
		}

		.contact button:hover,
		#head .newsletter button:hover,
		.calltoaction a:hover {
			background:#a5dc4f !important;
		}

		.contact button:active,
		#head .newsletter button:active,
		.calltoaction a:active {
			background:#a5dc4f !important;
			border-bottom-color:#7db535;
		}

		.hexagon {background:#a5dc4f;}
		.hexagon:before {border-bottom-color: #a5dc4f}
		.hexagon:after {border-top-color: #a5dc4f}

		#pricing-table .popular h3 {
			background-color:#a5dc4f;
			background-image:-webkit-linear-gradient(top,#a5dc4f 0,#7db535 100%);
			background-image:-moz-linear-gradient(top,#a5dc4f 0,#7db535 100%);
			background-image:-ms-linear-gradient(top,#a5dc4f 0,#7db535 100%);
			background-image:-o-linear-gradient(top,#a5dc4f 0,#7db535 100%);
			background-image:linear-gradient(top,#a5dc4f 0,#7db535 100%);
		}

		.social li a { background:#a5dc4f }

		.testimonals aside a:hover,
		.tweet_time a:hover,
		.tweet_text a,
		.copyright a:hover {
			color:#7db535;
		}


	</style>

</head>
<body>

	<header id="head">

		<div class="inner">
			<a href="#" class="logotext transparent"><h1>My Startup</h1></a>
			<div class="details left">

				<div class="message">
					<!-- Fading text. See core.js for list of words. -->
					<p class="large">We're the X of <span id="words"></span></p>

					<!-- Static text -->
					<p class="medium">We’re a small design studio passionate about brand, the web, and mobile experiences.</p>

				<!-- <div class="calltoaction">
			      <a href="#">Download</a>
			      <p class="top">click to begin</p>
			      <p class="bottom">1.2MB .zip</p>
			    </div> -->

				<!-- Newsletter -->
				<form class="newsletter" id="subscribe">
					<input type="email" id="email" name="email" class="email" placeholder="Enter your email..." /> <button>Notify Me</button>
					<p class="note">We won't spam you. Pinky swear.</p>
				</form>

			</div>
		</div>

		<!-- <div id="progress-back" class="load-item"><div id="progress-bar"></div></div> -->
		<!-- <div class="contact_map" id="contact_map"></div> -->

	</header>

	<section class="body">

		<div class="inner">

				<div id="extra">

					<div class="block">
						<h2 class="heading"><span class="left"><strong>X App Features</strong></span></h2>
						<p class="small">We're also Santa Claus! Oh God, what have I done? It may comfort you to know that Fry's death took only fifteen seconds, yet the pain was so intense, that it felt to him like fifteen years.</p>

						<ul class="features">
							<li>
								<div class="hexagon"><span class="time"></span></div>
								<p>
									<strong>Unlimited Color Option</strong>
									Well, I'm better than dirt. Well, most kinds of dirt. I mean not that fancy store bought dirt. That stuffs loaded with nutrients. I... I can't compete with that stuff.
								</p>
							</li>
							<li>
								<div class="hexagon"><span class="stats"></span></div>
								<p>
									<strong>Awesome App</strong>
									I used to be with it. But then they changed what it was. Now what I'm with isn't it, and what's it seems scary and wierd. It'll happen to you.
								</p>
							</li>
							<li>
								<div class="hexagon"><span class="idea"></span></div>
								<p>
									<strong>Coming Soon</strong>
									This opera's as lousy as it is brilliant! Your lyrics lack subtlety. You can't just have your characters announce how they feel. That makes me feel angry! How much did you make me?
								</p>
							</li>
							<li>
								<div class="hexagon"><span class="edit"></span></div>
								<p>
									<strong>Easily Customisable</strong>
									Goodbye, friends. I never thought I'd die like this. But I always really hoped. Why am I sticky and naked? Did I miss something fun?
								</p>
							</li>
							<li>
								<div class="hexagon"><span class="comments"></span></div>
								<p>
									<strong>Awesome App</strong>
									When I catch you, I'm gonna pull out your eyes and shove 'em down your pants so you can watch me kick the crap outta you, okay? Then I'm gonna use your tongue to paint my boat!
								</p>
							</li>
							<li>
								<div class="hexagon"><span class="draw"></span></div>
								<p>
									<strong>Landing Page</strong>
									Enough about your promiscuous mother, Hermes! We have bigger problems. Oh God, what have I done? You seem malnourished. Are you suffering from intestinal parasites.
								</p>
							</li>
						</ul>
					</div>



					<div class="block">
						<h2 class="heading"><span class="center"><strong>Meet the Team</strong></span></h2>
						<ul class="team">
							<li>
								<img src="assets/img/photo.png" alt="Franke Kunes">
								<span class="name">Frank Kunes</span>
								<span class="role">Marketing</span>
								<p>Look, I can take you as far as Anchorhead. You can get a transport there to Mos Eisley or wherever you're going. You're all clear, kid. Let's blow this thing and go home!</p>
								<ul class="social">
									<li class="twitter"><a href="#">Twitter</a></li>
								</ul>
							</li>
							<li>
								<img src="assets/img/photo.png" alt="John Cole">
								<span class="name">John Cole</span>
								<span class="role">Programmer</span>
								<p>Look, I can take you as far as Anchorhead. You can get a transport there to Mos Eisley or wherever you're going. You're all clear, kid. Let's blow this thing and go home!</p>
								<ul class="social">
									<li class="twitter"><a href="#">Twitter</a></li>
									<li class="facebook"><a href="#">Facebook</a></li>
									<li class="git"><a href="#">Git</a></li>
								</ul>
							</li>
							<li>
								<img src="assets/img/photo.png" alt="Thorgan Smith">
								<span class="name">Thorgan Smith</span>
								<span class="role">Web Designer</span>
								<p>Look, I can take you as far as Anchorhead. You can get a transport there to Mos Eisley or wherever you're going. You're all clear, kid. Let's blow this thing and go home!</p>
								<ul class="social">
									<li class="twitter"><a href="#">Twitter</a></li>
									<li class="git"><a href="#">Git</a></li>
								</ul>
							</li>
							<li>
								<img src="assets/img/photo.png" alt="Rob Hazard">
								<span class="name">Rob Hazard</span>
								<span class="role">Web Designer</span>
								<p>Look, I can take you as far as Anchorhead. You can get a transport there to Mos Eisley or wherever you're going. You're all clear, kid. Let's blow this thing and go home!</p>
								<ul class="social">
									<li class="facebook"><a href="#">Facebook</a></li>
									<li class="git"><a href="#">Git</a></li>
								</ul>
							</li>
						</ul>
					</div>

					<div class="block">
						<h2 class="heading"><span class="right"><strong>Recent Testimonals</strong></span></h2>
						<ul class="testimonals">
							<li>
								<p>
									I could crush him like an ant. But it would be too easy. No, revenge is a dish best served cold. I'll bide my time until ... Oh, what the hell. I'll just crush him like an ant.
								</p>
								<aside><span>Excellent</span> <a href="#">Mr Burns</a>, Power Plant</aside>
							</li>
							<li>
								<p>
									Well, he's kind of had it in for me ever since I accidentally ran over his dog. Actually, replace 'accidentally' with 'repeatedly' and replace 'dog' with 'son.'
								</p>
								<aside><span>Superb</span> <a href="#">Lionel Hutz</a>, Twitter</aside>
							</li>
							<li>
								<p>
									Owww look at me Marge, I'm making people Happy! I'm the magical man, from Happy Land, who lives in a gumdrop house on Lolly Pop Lane!!!!...... By the way I was being sarcastic...
								</p>
								<aside><span>Fantastic</span> <a href="#">Moe Szyslak</a>, Power Plant</aside>
							</li>
						</ul>
					</div>

					<div class="block">

						<h2 class="heading"><span class="left"><strong>Have your people contact ours</strong></span></h2>

						<form class="contact" id="contact">

								<div class="form">
									<input type="text" name="name" placeholder="Name" id="contactname" />
									<input type="text" name="email" placeholder="Email" id="contactemail" />
									<textarea name="message" placeholder="Message" id="contactmessage"></textarea>
									<button>Contact</button>
								</div>

								<ul>
									<li class="address">
										<span>Address:</span>
										<address>
											742 Evergreen Terrace,<br />
											Springfield, <br />
											United States, <br />
											CM2 7RJ
										</address>
									</li>
									<li class="phone"><span>Phone:</span> (000) 123 4567</li>
									<li class="fax"><span>Fax:</span> (111) 123 4567</li>
									<li class="email"><span>Email:</span> <a href="mailto:mail@companyname.com">mail@companyname.com</a></li>
									<li class="map">
										<iframe width="100px "src="http://www.maps.google.co.uk/maps?source=s_q&amp;f=q&amp;hl=en&amp;geocode=&amp;q=manchester&amp;sll=53.800651,-4.064941&amp;sspn=21.613333,29.619141&amp;ie=UTF8&amp;hq=&amp;hnear=Manchester,+United+Kingdom&amp;ll=53.430606,-2.284126&amp;spn=0.145927,0.41851&amp;t=m&amp;z=12&amp;output=embed"></iframe>
									</li>
								</ul>
						</form>
					</div>

					<div class="block">
						<h2 class="heading"><span class="right"><strong>Typography</strong></span></h2>
						<p class="large">There's no part of that sentence I didn't like!</p>
						<p class="medium">I guess if you want children beaten, you have to do it yourself. Your best is an idiot! We'll need to have a look inside you with this camera.</p>
						<p class="small">For the last time, I don't like lilacs! Your 'first' wife was the one who liked lilacs! That's right, baby. I ain't your loverboy Flexo, the guy you love so much. You even love anyone pretending to be him! Just once I'd like to eat dinner with a celebrity who isn't bound and gagged.</p>
						<p>Goodbye, cruel world. Goodbye, cruel lamp. Goodbye, cruel velvet drapes, lined with what would appear to be some sort of cruel muslin and the cute little pom-pom curtain pull cords. Cruel though they may be… I feel like I was mauled by Jesus. Ummm…to eBay?</p>
					</div>

					<div class="block">
						<h2 class="heading"><span class="right"><strong>Image Gallery</strong></span></h2>
						<ul class="gallery">
							<li><a href="assets/img/slider/1.jpg" rel="prettyPhoto[gallery]"><img src="assets/img/slider/3.jpg" /></a></li>
							<li><a href="assets/img/slider/2.jpg" rel="prettyPhoto[gallery]"><img src="assets/img/slider/2.jpg" /></a></li>
							<li><a href="assets/img/slider/3.jpg" rel="prettyPhoto[gallery]"><img src="assets/img/slider/3.jpg" /></a></li>
							<li><a href="assets/img/slider/4.jpg" rel="prettyPhoto[gallery]"><img src="assets/img/slider/2.jpg" /></a></li>
							<li><a href="assets/img/slider/5.jpg" rel="prettyPhoto[gallery]"><img src="assets/img/slider/3.jpg" /></a></li>
							<li><a href="assets/img/slider/2.jpg" rel="prettyPhoto[gallery]"><img src="assets/img/slider/2.jpg" /></a></li>
						</ul>
					</div>

					<div class="block">
						<h2 class="heading"><span class="left"><strong>Pricing Table</strong></span></h2>

						<div id="pricing-table" class="clear">
						    <div class="plan">
						        <h3>New<span>Free</span></h3>
						        <ul>
						            <li><b>10GB</b> Disk Space</li>
						            <li><b>100GB</b> Monthly Bandwidth</li>
						            <li><b>20</b> Email Accounts</li>
							  		<li><b>Unlimited</b> subdomains</li>
						        </ul>
						        <a href="#" class="signup" href="">Sign up</a>
						    </div>
						    <div class="plan">
						        <h3>Starter<span>$15</span></h3>
						        <ul>
						            <li><b>10GB</b> Disk Space</li>
						            <li><b>100GB</b> Monthly Bandwidth</li>
						            <li><b>20</b> Email Accounts</li>
							   		<li><b>Unlimited</b> subdomains</li>
						        </ul>
						        <a href="#" class="signup" href="">Sign up</a>
						    </div>
						    <div class="plan popular">
						        <h3>Popular<span>$30</span></h3>
						        <ul>
						            <li><b>10GB</b> Disk Space</li>
						            <li><b>100GB</b> Monthly Bandwidth</li>
						            <li><b>20</b> Email Accounts</li>
							   		<li><b>Unlimited</b> subdomains</li>
						        </ul>
						     	<a href="#" class="signup" href="">Sign up</a>
						    </div>
						    <div class="plan">
						        <h3>Pro<span>$50</span></h3>
						        <ul>
						            <li><b>10GB</b> Disk Space</li>
						            <li><b>100GB</b> Monthly Bandwidth</li>
						            <li><b>20</b> Email Accounts</li>
									<li><b>Unlimited</b> subdomains</li>
						        </ul>
						        <a href="#" class="signup" href="">Sign up</a>
						    </div>
						</div>
					</div>

				</div>

				<ul class="social">
					<!--
					<li class="icq"><a href="#">ICQ</a></li>
					<li class="vkontakte-rect"><a href="#">Vkontakte</a></li>
					<li class="odnoklassniki"><a href="#">Odnoklassniki</a></li>
					<li class="friendfeed"><a href="#">Friendfeed</a></li>
					<li class="blogger"><a href="#">Blogger</a></li>
					<li class="jabber"><a href="#">Jabber</a></li>
					<li class="picasa"><a href="#">Picasa</a></li>
					<li class="wordpress"><a href="#">Wordpress</a></li>
					<li class="deviantart"><a href="#">Deviantart</a></li>
					<li class="tumbler"><a href="#">Tumbler</a></li>
					<li class="youtube"><a href="#">Youtube</a></li>
					-->
					<li class="twitter"><a href="#">Twitter</a></li>
					<li class="facebook"><a href="#">Facebook</a></li>
					<li class="vimeo"><a href="#">Vimeo</a></li>
					<li class="skype"><a href="#">skype</a></li>
					<li class="git"><a href="#">Git</a></li>
					<li class="linkedin"><a href="#">Linkedin</a></li>
					<li class="lastfm"><a href="#">Lastfm</a></li>
					<li class="flickr"><a href="#">Flickr</a></li>
				</ul>

				<div class="tweet"><?php require_once('assets/php/tweets.php'); ?></div>

				<div class="copyright">
					<p>&copy; 2013 <a href="http://oddloft.com">Odd Loft</a>.</p>
					<p>All Rights Reserved.</p>
				</div>

		</div>
	</section>

	<script src="assets/js/core.js"></script>

<? require_once($_SERVER['DOCUMENT_ROOT'].'/lib/analytics.php') ?>
</body>
</html>
