<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="HandheldFriendly" content="True">
    <meta name="viewport" content="width=device-width">
	
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="assets/index.css">
	<link rel="stylesheet" href="assets/material_design.css">
	<link rel="stylesheet" href="lib/hover-min.css">
	<link rel="stylesheet" href="lib/jquery-ui-1.12.1/jquery-ui.min.css">
	<link rel="stylesheet" href="lib/jquery-ui-1.12.1/jquery-ui.structure.min.css">
	<link rel="stylesheet" href="lib/jquery-ui-1.12.1/jquery-ui.theme.min.css">
	<noscript><style>#js_footer{display:none;}</style></noscript>

    <title>HB Portfolio</title>
	</head>
  <body>
  
  <div id="loading">
	<img id="loading_img" src="assets/grey_loading.svg" alt="Loading page..." />
  </div>
  
  <div id="wrapper">
	  <header>
		<div class="z-depth-3">  
			<div id="logo_bar" class="light_theme">
				<div id="logo" class="hvr-float-shadow"><a href="/p6">HB</a></div>
				<div id="port_res">
					<div class="btn">Portfolio</div>
					<div class="btn">Resume</div>
				</div>
				<div id="bar_buttons">
					0 1
				</div>
			</div>
			<div id="soc_med">
				<img src="assets/sm_icons/mail.png"></img>
				<a href="https://twitter.com/hoIIyhax" target="_blank"><img src="assets/sm_icons/twitter.png"></img></a>
				<img src="assets/sm_icons/facebook.png"></img>
				<img src="assets/sm_icons/linkedin.png"></img>
			</div>
		</div>
		
		<div id="scene" class="color_gradient">
			<div class="diag_tex"></div>
		</div>
		
		<nav class="light_theme z-depth-3">
		  <ul><li class="first"><a href="#">Me</a></li
			><li><a href="#">Services</a></li
			><li><a href="#">Links</a></li
			><li class="last"><a href="#">Contact</a></li></ul>
		</nav>
	  </header>
	  
	  <main>
		<div id="mobile_port_res">
			<div class="btn">Portfolio</div>
			<div class="btn">Resume</div>
		</div>
		
		<div id="me"       class="page hidden"><h1>me</h1></div>
		<div id="services" class="page hidden"><h1>SRV</h1></div>
		<div id="links"    class="page hidden"><h1>LINKS</h1></div>
		<div id="contact"  class="page hidden"><h1>Contact</h1></div>
		<!-- see pages by default if js is disabled -->
	  </main>
		
		<!-- see credits by default if js is disabled -->
		<noscript>
		  <footer>
			<div class="footer">
				<div>(860) 670-2182</div>
				<div>hmb1407@g.rit.edu</div>
			</div>
			<div class="footer">
				<h1>Credits</h1>
				<ul style="display: inline-block; list-style-type: none;">
					<li>credit</li>
					<li>credit</li>
				</ul>
			</div>
			
			<div id="f_links">
				<p>&copy; Holly Bonaventura 2018 </p>
				<a href="#">Privacy Policy</a>
			</div>
		  </footer>
		</noscript>
		
		  <footer id="js_footer" class="hidden">
			<div class="footer">
				<div>(860) 670-2182</div>
				<div>hmb1407@g.rit.edu</div>
			</div>
			<div class="footer">
				<h1>Credits</h1>
				<ul style="display: inline-block; list-style-type: none;">
					<li>credit</li>
					<li>credit</li>
				</ul>
			</div>
			
			<div id="f_links">
				<p>&copy; Holly Bonaventura 2018 </p>
				<a href="#">Privacy Policy</a>
			</div>
		  </footer>
	  
	  <script type="text/javascript" src="lib/jquery-3.2.1.min.js"></script>
	  <script type="text/javascript" src="lib/jquery-ui-1.12.1/jquery-ui.min.js"></script>
	  <script type="text/javascript" src="index.js"></script>
  </div><!-- end wrapper -->
  </body>
</html>