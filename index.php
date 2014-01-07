<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">

<title>Landing / Coming Soon</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=10, user-scalable=1">

<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,700,600italic,600,400italic,300,300italic,700italic,800,800italic">
<script src="http://code.jquery.com/jquery-1.7.1.min.js" charset="utf-8" type="text/javascript"></script>

<style>
* {
	margin: 0;
	padding: 0;
	-moz-box-sizing: border-box; -webkit-box-sizing: border-box; box-sizing: border-box;
	outline: none;
}

body {
	height: 100%;
	font-family: sans-serif;
	font-family: 'Open Sans', sans-serif;
	background:#0b0d0f;
}

.content {
	max-width:1050px;
	width:100%;
	margin:4% auto 0 auto;
}

ul {
	font-size:0;
	background-image: -webkit-radial-gradient(center,ellipse cover,rgba(255,255,255,0.20) 0%,rgba(255,255,255,0.00) 70%);
	background-image: -moz-radial-gradient(center,ellipse cover,rgba(255,255,255,0.20) 0%,rgba(255,255,255,0.00) 70%);
	background-image: -ms-radial-gradient(center,ellipse cover,rgba(255,255,255,0.20) 0%,rgba(255,255,255,0.00) 70%);
	background-image: -o-radial-gradient(center,ellipse cover,rgba(255,255,255,0.20) 0%,rgba(255,255,255,0.00) 70%);
	background-image: radial-gradient(center,ellipse cover,rgba(255,255,255,0.20) 0%,rgba(255,255,255,0.00) 70%)
}
li {
	display:inline-block;
	width:25%;
	margin-bottom:20px;
	text-align:center;
	padding:20px;
	border-radius:10px;
	position:relative;
	vertical-align:top;
}
li:hover {
	background:rgba(0,0,0,0.2);
}
li img {
	max-width:200px;
	width:100%;
	height:auto;
}
li a {
	text-decoration:none;
}
li a p:before {
		content:"";
		display:block;
		border-style:solid;
		border-color: transparent transparent rgba(0,0,0,0.2) ;
		border-width:8px 8px 8px;
		position:absolute;
		left:0;
		right:0;
		margin:-18px auto 0 auto;
		width:0;
		border-style: solid outset solid solid;
}
li a p {
	font-size:11px;
	background:rgba(0,0,0,0.2);
	border-radius:5px;
	margin:10px;
	color:#fff;
	text-align:left;
	padding:2px 5px;
}
li:hover p {
	background:rgba(0,0,0,0.5);
}
li:hover p:before {
		border-color: transparent transparent rgba(0,0,0,0.5) ;

}
li a p span {display:block;font-weight:bold;}

</style>

</head>

<body>
	<div class="content">

		<ul>
			<li>
				<a href="soon-slider.php">
					<img src="samples/one.png">
					<p><span>Coming Soon Page</span> Image Slider. Newsletter</p>
				</a>
			</li>
			<li>
				<a href="soon-static.php">
					<img src="samples/two.png">
					<p><span>Coming Soon Page</span> Static Image. Flashing Text</p>
				</a>
			</li>
			<li>
				<a href="soon-map.php">
					<img src="samples/three.png">
					<p><span>Coming Soon Page</span> Google Map. Calltoaction Button</p>
				</a>
			</li>
			<li>
				<a href="soon-countdown.php">
					<img src="samples/four.png">
					<p><span>Coming Soon Page</span> Countdown. Unlimated Colors</p>
				</a>
			</li>
			<li>
				<a href="landing-slider.php">
					<img src="samples/five.png">
					<p><span>Landing Page</span> Image Gallery. Pricing Table. etc</p>
				</a>
			</li>
			<li>
				<a href="landing-static.php">
					<img src="samples/six.png">
					<p><span>Landing Page</span> Contact Form. Testimonials. etc</p>
				</a>
			</li>
			<li>
				<a href="landing-map.php">
					<img src="samples/seven.png">
					<p><span>Landing Page</span> Call-To-Action Button</p>
				</a>
			</li>
			<li>
				<a href="landing-countdown.php">
					<img src="samples/eight.png">
					<p><strong>Mix and match anything to make your perfect page!!</strong></p>
				</a>
			</li>
		</ul>

	</div>

<? require_once($_SERVER['DOCUMENT_ROOT'].'/lib/analytics.php') ?>
</body>
</html>