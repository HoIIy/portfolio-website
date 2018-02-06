  <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hillary Borrino</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <!-- Optional Bootstrap theme -->
    <link rel="stylesheet" href="css/bootstrap-grid.min.css">
	<link rel="stylesheet" href="css/materialize.css">
	<style type="text/css">
		html, body {
			height: 100%;
		}
		
		body {
			max-width: 100%;
			overflow-x: hidden;
		}
		
		.bg-transparent {
			background: none;
			background-color: transparent;
		}
		
		nav {
			background: transparent;
			padding-left: 5em !important;
			padding-top: 1em  !important;
			font-size: 1.5em !important;
		}
		
		nav a {
			color: #fff;
		}
		
		.darkNav a {
			color: #000;
		}
		
		.lightNav a {
			color: #fff;
		}
		
		nav a.disabled {
			color: #4E7B94 !important;
		}
		
		#bgImg {
			background-image: url("img/bodybg2a.png");
			position: fixed;
		}
		
		#titleImg {
			padding-right: 0em !important;
		}
		
		#title_container {
			padding: 0em !important;
		}
		
		#pg_container {
			height: 100%;
		}
		
		.jarallax_background {
			width: 100%;
			height: 100%;
			left: 50%;
			background: url("img/bg4b.png");
			display: block;
			z-index: -1;
			margin-top: 0px;
			background-size: cover;
			background-attachment: fixed;
			-webkit-box-shadow: inset -7px 0 9px -5px rgba(0,0,0,0.35);
			-moz-box-shadow:    inset -7px 0 9px -5px rgba(0,0,0,0.35);
			box-shadow:         inset -7px 0 9px -5px rgba(0,0,0,0.35);
			padding: 0em !important;
		}
		
		#sidebar {
			background-image: url("img/sbtex2.png");
		}
		
		.portCircleBg {
			border-radius: 7em;
			background-color: #fff;
			height: 200px;
			width:  200px;
			position: relative;
		}
		
		.portCircleImg {
			border-radius: 7em;
			background-color: #fff;
			height: 160px;
			width:  160px;
			background-image: url("img/me1.png");
			background-size: cover;
			position: absolute;
			top: 20px;
			left: 20px;
		}
		
		.portMobile {
			width: 140px;
			height: 140px;
		}
		
		.portMobile > * {
			width: 100px;
			height: 100px;
		}
		
		#titleBtnContainer {
			position: absolute; 
			transform: translate(-50%, -50%); 
			left: 50%; 
			top: 50%;
		}
		
		.greeting {
			-webkit-animation: fadein 2s; /* Safari, Chrome and Opera > 12.1 */
			   -moz-animation: fadein 2s; /* Firefox < 16 */
				-ms-animation: fadein 2s; /* Internet Explorer */
				 -o-animation: fadein 2s; /* Opera < 12.1 */
					animation: fadein 2s;
		}
		
		.secondGreeting {
			opacity: 0;
			-webkit-animation: fadein 1s forwards; /* Safari, Chrome and Opera > 12.1 */
			   -moz-animation: fadein 1s forwards; /* Firefox < 16 */
				-ms-animation: fadein 1s forwards; /* Internet Explorer */
				 -o-animation: fadein 1s forwards; /* Opera < 12.1 */
					animation: fadein 1s forwards;

			-webkit-animation-delay: 1s;
			   -moz-animation-delay: 1s;
			        animation-delay: 1s;
		}
		
		.thirdGreeting {
			-webkit-animation-delay: 1.75s;
			   -moz-animation-delay: 1.75s;
			        animation-delay: 1.75s;
		}
		
		#pg_1 {
			/* Permalink - use to edit and share this gradient: http://colorzilla.com/gradient-editor/#ffffff+0,ffffff+100,ffffff+100&0+0,1+25,1+100 */
			background: -moz-linear-gradient(top,    rgba(255,255,255,0) 0%, rgba(255,255,255,1) 50%, rgba(255,255,255,1) 100%); /* FF3.6-15 */
			background: -webkit-linear-gradient(top, rgba(255,255,255,0) 0%, rgba(255,255,255,1) 50%, rgba(255,255,255,1) 100%); /* Chrome10-25,Safari5.1-6 */
			background: linear-gradient(to bottom,   rgba(255,255,255,0) 0%, rgba(255,255,255,1) 50%, rgba(255,255,255,1) 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
			filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#00ffffff', endColorstr='#ffffff',GradientType=0 ); /* IE6-9 */
		}
		
		#pg_2 {
			background-color: #fff;
		}
		
		#pg_last {
			background-color: #333;
		}
		
		#footerBottom {
			position: absolute;
			bottom: 1em;
		}
		
	    .btn {
			background: #e0e0e0;
			background-image: -webkit-linear-gradient(top, #e0e0e0, #4E7B94);
			background-image: -moz-linear-gradient(top, #e0e0e0, #4E7B94);
			background-image: -ms-linear-gradient(top, #e0e0e0, #4E7B94);
			background-image: -o-linear-gradient(top, #e0e0e0, #4E7B94);
			background-image: linear-gradient(to bottom, #e0e0e0, #4E7B94);
			-webkit-border-radius: 28;
			-moz-border-radius: 28;
			border-radius: 28px;
			text-shadow: 1px 1px 3px #666666;
			-webkit-box-shadow: 0px 1px 3px #333333;
			-moz-box-shadow: 0px 1px 3px #333333;
			box-shadow: 0px 1px 3px #333333;
			color: #ffffff;
			font-size: 31px;
			padding: 10px 20px 10px 20px;
			border: solid #fff 1px;
			text-decoration: none;
	    }

		.btn:hover {
			background: #7ab9cc;
		}
		
		/** defines the fadein keyframes for different browsers **/
		@keyframes fadein {
			from { opacity: 0; }
			to   { opacity: 1; }
		}
		@-moz-keyframes fadein {
			from { opacity: 0; }
			to   { opacity: 1; }
		}
		@-webkit-keyframes fadein {
			from { opacity: 0; }
			to   { opacity: 1; }
		}
		@-ms-keyframes fadein {
			from { opacity: 0; }
			to   { opacity: 1; }
		}
		@-o-keyframes fadein {
			from { opacity: 0; }
			to   { opacity: 1; }
		}
		
		/** hides the desktop nav on non-desktop devices at the "lg" breakpoint **/
		@media (max-width: 992px) {
			#desktopNav {
				display: none;
			}
		}
		
		/** Moves the portfolio and resume buttons up farther on small screens. **/
		@media(max-width: 597px){
			#titleBtnContainer {
				top: 40%;
			}
		}
		
		/** resizes the portrait on mobile **/
		@media(max-width: 420px){
			.portMobile {
				width:  70px;
				height: 70px;
			}
			
			.portMobile > * {
				width:  50px;
				height: 50px;
			}
			
			.portCircleImg {
				top:  10px;
				left: 10px;
			}
		}
		
		/** 
		    Removes excessive padding from jumbotrons at smaller screen sizes. 
		    Formats the greeting in particular.
		 **/
		@media(max-width: 1050px){
			.jumbotron {
				padding: 1rem 2rem !important;
			}
		}
	</style>
</head>
<body>
<div id="bgImg" class="h-100 w-100"></div>
<div id="title_container" class="container-fluid h-100">
	<div class="row h-100">
		<div id="titleImg" class="col-12 col-lg-8">
			<div class="jarallax_background container-fluid" data-0="background-position:0px 0px;" data-100000="background-position:0px -50000px;">
				<div class="row d-lg-none p-3">	
				    <div class="col-6">
						<nav class="nav flex-column">
							<div class="nav-item">
								<a class="nav-link active" href="#">Home</a>
							</div>
							
							<div class="nav-item">
								<a class="nav-link active" href="#">About</a>
							</div>
							
							<div class="nav-item">
								<a class="nav-link" href="#">Skills</a>
							</div>
							
							<div class="nav-item">
								<a class="nav-link disabled" href="#">Contact</a>
							</div>
						</nav>
					</div>
					
					<div class="row col-6 justify-content-end">
						<div class="portCircleBg portMobile z-depth-3">
							<div class="portCircleImg portMobile z-depth-1">
							</div>
						</div>
					</div>
				</div>
				
				<div id="titleBtnContainer" class="row justify-content-center">
				    <div class="m-auto">
						<div class="btn m-2">portfolio</div>
					</div>
					<div class="m-auto">
						<div class="btn m-2">résumé</div>
					</div>
				</div>
			</div>
		</div>
		
		<div id="sidebar" class="col-4 d-none d-lg-block">
		    <div class="container d-none d-lg-block">
				<div class="row col-12 p-3 justify-content-center">
					<div class="portCircleBg z-depth-3">
						<div class="portCircleImg z-depth-1">
						</div>
					</div>
				</div>
				<div class="row col-12">
					<div class="jumbotron bg-transparent">
						<p  class="text-center greeting lead">Hello.</p>
						<h1 class="text-center secondGreeting display-4">My name is Holly.</h1>
						<hr class="my-4">
						<div class="secondGreeting thirdGreeting">
						<p>I'm a web developer with a background in design and interest in software development.</p>
						<p>I strive to build responsive web applications that are functionally enjoyable to use and aesthetically artistic.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<nav id="desktopNav" class="nav fixed-top">
	<div class="nav-item">
		<a class="nav-link active" href="#">Home</a>
	</div>
	
	<div class="nav-item">
		<a class="nav-link active" href="#">About</a>
	</div>
	
	<div class="nav-item">
		<a class="nav-link" href="#">Skills</a>
	</div>
	
	<div class="nav-item">
		<a class="nav-link disabled" href="#">Contact</a>
	</div>
</nav>

<div id="pg_container" class="container-fluid h-100">
	<div class="row h-100">
		<div id="pg_1" class="page col-12">
			<p>about</p>
			<p>goals</p>
		</div>
	</div>
	
	<div class="row h-100">
		<div id="pg_2" class="page col-12">
			skills
		</div>
	</div>
	
	<div class="row h-100">
		<div id="pg_2" class="page col-12">
			contact me
		</div>
	</div>
	
	<div class="row h-50">
		<div id="pg_last" class="page col-12">
		    <footer class="row p-3 h-100 text-center">
				<div class="col-6">
				more social media?
				</div>
				<div class="col-6">
				credits
				</div>
				<div id="footerBottom" class="col-12">
				copyright date?
				</div>
			</footer>
		</div>
	</div>
</div>

	<script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/skrollr.js"></script>

	<script type="text/javascript">
	
	// parallax
	skrollr.init({
		forceHeight: false
	});
	
	// fade on scroll
	$(window).scroll(function() { 
		// Get scroll position
		var s = $(window).scrollTop(),
		// scroll value and opacity
		opacityVal = (s / 240)/2;
		// opacity value 0% to 100%
		$('.jarallax_background').css('-webkit-filter', 'blur('+opacityVal+'em)');
		$('.jarallax_background').css('filter', 'blur('+opacityVal+'em)');
	});
	
	$(document).ready(function(){
		$(window).scroll(function(){
		var light_pos = $('#title_container').offset().top;
		var light_height = $('#title_container').height();
		var menu_pos = $('#desktopNav').offset().top;
		var scroll = $(window).scrollTop();

		if(menu_pos < (light_pos + light_height)) {
			$('#desktopNav').addClass('lightNav');
		    $('#desktopNav').removeClass('darkNav');
		}
		else {
			$('#desktopNav').removeClass('lightNav');
		    $('#desktopNav').addClass('darkNav');
		}
	  })
	})
	
	</script>
</body>

</html>
