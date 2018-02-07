<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Hillary Borrino</title>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/materialize.css">
  <link rel="stylesheet" type="text/css" href="css/index.css">
</head>
<body>
<!-- 
    Fullscreen warns users who have javascript disabled: mobile bootstrap doesn't collapse. 
	TODO: make a responsive noscript nav fallback using CSS positioning
  -->
<noscript>
  <div id="enableJS">
    <div class="row p-3 mx-auto text-center"><h1>Please enable Javascript for full mobile navigation experience!</h1></div>
  </div>
</noscript>
<div id="bgImg" class="h-100 w-100"></div>
  <div id="title_container" class="container-fluid h-100">
    <div class="row h-100">
      <div id="titleImg" class="col-12 col-lg-8">
        <div class="parallax_background container-fluid" data-0="background-position:0px 0px;" data-100000="background-position:0px -50000px;">
          <div id="bgGradient">  
            <nav id="titleNav" class="navbar fixed-top navbar-expand-lg navbar-light pl-3" style="display: none;">
              <button class="navbar-toggler mr-auto custom-toggler" type="button"
                data-toggle="collapse" 
                data-target="#navbarNavDropdown" 
                aria-controls="navbarNavDropdown" 
                aria-expanded="false" 
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav pl-3">
                  <li class="nav-item px-3">
                    <a class="nav-link" href="">Home</a>
                  </li>
                  <li class="nav-item px-3">
                    <a class="nav-link" href="#pg_container">About</a>
                  </li>
                  <li class="nav-item px-3">
                    <a class="nav-link" href="#pg_mySkills">Skills</a>
                  </li>
                  <li class="nav-item px-3">
                    <a class="nav-link" href="#pg_contactMe">Contact</a>
                  </li>
                  <li class="nav-item px-3">
                    <a class="nav-link" href="#">Credits</a>
                  </li>
                </ul>
              </div>
            </nav>
          
            <noscript>
              <nav id="titleNav" class="navbar fixed-top navbar-expand-lg navbar-light pl-3">
                <button class="navbar-toggler mr-auto custom-toggler" type="button"
                  data-toggle="collapse" 
                  data-target="#navbarNavDropdown" 
                  aria-controls="navbarNavDropdown" 
                  aria-expanded="false" 
                  aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                  <ul class="navbar-nav pl-3">
                    <li class="nav-item px-3">
                      <a class="nav-link" href="">Home</a>
                    </li>
                    <li class="nav-item px-3">
                      <a class="nav-link" href="#pg_container">About</a>
                    </li>
                    <li class="nav-item px-3">
                      <a class="nav-link" href="#pg_mySkills">Skills</a>
                    </li>
                    <li class="nav-item px-3">
                      <a class="nav-link" href="#pg_contactMe">Contact</a>
                    </li>
                    <li class="nav-item px-3">
                      <a class="nav-link" href="#">Credits</a>
                    </li>
                  </ul>
                </div>
              </nav>
            </noscript>
            
			
            <div id="titleBtnContainer" class="row justify-content-center">
              <div class="m-auto">
                <a href="#pg_myPortfolio"><div class="btn titleBtn m-2" style="display:none;">portfolio</div></a>
              </div>
              <div class="m-auto">
                <a href="#pg_myPortfolio"><div class="btn titleBtn m-2" style="display:none;">résumé</div></a>
              </div>
  			    <!-- needs a noscript doppelganger in case the fadein transition fails -->
				<noscript>
				<div class="row">
				  <div class="col-6">
				  <div class="m-auto">
					<div class="btn titleBtn m-2">portfolio</div>
				  </div>
				  </div>
				  <div class="col-6">
				  <div class="m-auto">
					<div class="btn titleBtn m-2">résumé</div>
				  </div>
				  </div>
				  </div>
				</noscript>
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
              <p  class="text-center greeting lead">Hello!</p>
              <h1 class="text-center secondGreeting display-4">My name is <span class="name">Holly</span>.</h1>
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

  <nav id="titleCoverNav" class="navbar fixed-top navbar-expand-lg navbar-light pl-3" style="display: none;">
    <button class="navbar-toggler mr-auto custom-toggler" type="button"
      data-toggle="collapse" 
      data-target="#navbarCoverNavDropdown" 
      aria-controls="navbarCoverNavDropdown" 
      aria-expanded="false" 
      aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCoverNavDropdown">
      <ul class="navbar-nav pl-3">
        <li class="nav-item px-3">
          <a class="nav-link" href="">Home</a>
        </li>
        <li class="nav-item px-3">
          <a class="nav-link" href="#pg_container">About</a>
        </li>
        <li class="nav-item px-3">
          <a class="nav-link" href="#pg_mySkills">Skills</a>
        </li>
        <li class="nav-item px-3">
          <a class="nav-link" href="#pg_contactMe">Contact</a>
        </li>
        <li class="nav-item px-3">
          <a class="nav-link" href="#">Credits</a>
        </li>
      </ul>
    </div>
  </nav>

  <noscript>
    <nav id="titleCoverNav" class="navbar fixed-top navbar-expand-lg navbar-light pl-3">
      <button class="navbar-toggler mr-auto custom-toggler" type="button"
        data-toggle="collapse" 
        data-target="#navbarCoverNavDropdown" 
        aria-controls="navbarCoverNavDropdown" 
        aria-expanded="false" 
        aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCoverNavDropdown">
        <ul class="navbar-nav pl-3">
          <li class="nav-item px-3">
            <a class="nav-link" href="">Home</a>
          </li>
          <li class="nav-item px-3">
            <a class="nav-link" href="#pg_container">About</a>
          </li>
          <li class="nav-item px-3">
            <a class="nav-link" href="#pg_mySkills">Skills</a>
          </li>
          <li class="nav-item px-3">
            <a class="nav-link" href="#pg_contactMe">Contact</a>
          </li>
          <li class="nav-item px-3">
            <a class="nav-link" href="#">Credits</a>
          </li>
        </ul>
      </div>
    </nav>
  </noscript>

  <nav id="siteNav" class="navbar fixed-top navbar-expand-lg navbar-light bg-light z-depth-2" style="display: none;">
    <button class="navbar-toggler mr-auto ml-2 mt-2 custom-toggler" type="button"
      data-toggle="collapse" 
      data-target="#navbarSiteNavDropdown" 
      aria-controls="navbarSiteNavDropdown" 
      aria-expanded="false" 
      aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>
    <div class="d-md-block d-lg-none ml-auto">
      <div class="btn">portfolio</div>
      <div class="btn">résumé</div>
    </div>
    
    <div class="collapse navbar-collapse" id="navbarSiteNavDropdown">
      <ul class="navbar-nav pl-3">
        <li class="nav-item px-3">
          <a class="nav-link" href="">Home</a>
        </li>
        <li class="nav-item px-3">
          <a class="nav-link" href="#pg_container">About</a>
        </li>
        <li class="nav-item px-3">
          <a class="nav-link" href="#pg_mySkills">Skills</a>
        </li>
        <li class="nav-item px-3">
          <a class="nav-link" href="#pg_contactMe">Contact</a>
        </li>
        <li class="nav-item px-3">
          <a class="nav-link" href="#">Credits</a>
        </li>
      </ul>
    </div>
    <div class="d-none d-lg-block ml-auto">
      <div class="btn">portfolio</div>
      <div class="btn">résumé</div>
    </div>
  </nav>

  <div id="pg_container" class="container-fluid py-3">
    <div class="row page pt-3">
      <!-- show the intro at the top of the 'about' page on mobile. -->
      <div class="container d-lg-none py-3 mt-3">
        <div class="row p-3 mt-3">
          <div id="mobilePortContainer" class="col-12 col-sm-4 py-3 my-3">
            <div class="portCircleBg portMobile z-depth-3 m-auto">
              <div class="portCircleImg portMobile z-depth-1">
              </div>
            </div>
          </div>
          <div class="col-12 col-sm-8">
            <div class="jumbotron bg-transparent">
              <p  class="text-center greeting lead">Hello!</p>
              <h1 class="text-center secondGreeting display-4">My name is <span class="name">Holly</span>.</h1>
              <hr class="my-4">
              <div class="secondGreeting thirdGreeting">
              <p>I'm a web developer with a background in design and interest in software development.</p>
              <p>I strive to build responsive web applications that are functionally enjoyable to use and aesthetically artistic.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    
      <!-- 'about' page content -->
      <div id="pg_1" class="col-12">
        <div class="container">
          <div class="row">
            <div class="mx-auto">
              <div class="headingBackground pl-sm-0 pl-md-3 ml-sm-0 ml-md-3">
                <h2 data-text="About Me">About Me</h1>
              </div>
            </div>
          </div>
          <p>
            Text about me.
          </p>
          
          <div class="row page">
            <div class="mx-auto">
              <div class="headingBackground pl-sm-0 pl-md-3 ml-sm-0 ml-md-3">
                <h2 data-text="Goals">Goals</h1>
              </div>
            </div>
          </div>
          <p>
            Text about my goals.
          </p>
        </div>
      </div>
    </div>
	
    <div class="row page">
      <div id="pg_mySkills" class="col-12 py-3">
		  <div class="container py-3">
          <div class="row py-3">
            <div class="mx-auto">
              <div class="headingBackground pl-sm-0 pl-md-3 ml-sm-0 ml-md-3">
                <h1 data-text="Skills">Skills</h1>
              </div>
            </div>
          </div>
          chart here
        </div>
	  </div>
    </div>
    
    <div class="row page">
      <div id="pg_myPortfolio" class="col-12 py-3">
          <div class="row py-3">
            <div class="mx-auto py-3">
              <div class="headingBackground pl-sm-0 pl-md-3 ml-sm-0 ml-md-3">
                <h1 data-text="Portfolio">Portfolio</h1>
              </div>
            </div>
          </div>
		  <div class="container-fluid">
			squares going here
		  </div>
	  </div>
    </div>
    
    <div class="row page">
      <div id="pg_contactMe" class="col-12 py-3">
	    <div class="container py-3">
          <div class="row py-3">
            <div class="mx-auto">
              <div class="headingBackground pl-sm-0 pl-md-3 ml-sm-0 ml-md-3">
                <h1 data-text="Contact Me">Contact Me</h1>
              </div>
            </div>
          </div>
          <p>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer euismod id odio ut condimentum. Phasellus diam dolor, malesuada ut pretium sit amet, finibus ut ante. Cras in luctus tellus. Sed euismod, turpis sit amet eleifend aliquet, eros lectus tincidunt erat, non egestas quam velit auctor nulla. Donec quis vulputate dolor. Interdum et malesuada fames ac ante ipsum primis in faucibus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Interdum et malesuada fames ac ante ipsum primis in faucibus. Integer euismod sapien vel magna condimentum ultricies. Phasellus sit amet varius quam. Donec non faucibus mauris, et ultrices lorem.

  Vivamus bibendum, erat ut consectetur posuere, metus augue dignissim magna, non euismod lectus dolor a leo. Curabitur a metus at elit dignissim lobortis eu eget ante. Vivamus et quam tortor. Cras elementum semper velit eu facilisis. Nulla volutpat volutpat tortor, et aliquam velit pretium vel. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla fermentum nisi at lectus imperdiet, sed sagittis tortor laoreet. Etiam laoreet, lorem quis bibendum ultrices, orci ex congue ligula, ut dapibus lorem tellus non leo. Vivamus nec hendrerit orci. Ut placerat posuere tortor, sed aliquet elit malesuada non. Etiam fermentum neque diam, a ullamcorper turpis congue ac. Praesent eu eleifend leo, vitae dictum velit. Vestibulum lacus leo, tincidunt at tincidunt vitae, ultrices eu turpis. Aliquam a mauris sapien. Phasellus venenatis sem a elementum lacinia. Maecenas at iaculis est.
          </p>
        </div>
	  </div>
    </div>
	
    <div class="row h-50">
      <div id="pg_last" class="page col-12">
        <footer class="row p-3 h-100 text-center">
          <div class="col-6">
		    <div class="container-fluid">
              <div class="row">
                <div class="mx-auto">
                  <div class="footerHeading pl-sm-0 pl-md-3 ml-sm-0 ml-md-3">
                    <h2>Social Media</h1>
                  </div>
				  social media
                </div>
			  </div>
            </div>
          </div>
          <div class="col-6">
		    <div class="container-fluid">
              <div class="row">
                <div class="mx-auto">
                  <div class="footerHeading pl-sm-0 pl-md-3 ml-sm-0 ml-md-3">
                    <h2>Credits</h1>
                  </div>
				  credits
                </div>
			  </div>
            </div>
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
  <script type="text/javascript" src="js/jquery-ui.min.js"></script>

  <script type="text/javascript">
  
  // parallax
  skrollr.init({
    forceHeight: false
  });
  
  /**
   * detect IE
   * returns version of IE or false, if browser is not Internet Explorer
   */
  function isIE() {
    var userAgent = window.navigator.userAgent;
    var msie    = userAgent.indexOf('MSIE '); // IE<=10
    var trident = userAgent.indexOf('Trident/'); // IE11
    var edge    = userAgent.indexOf('Edge/'); // IE12+
    if (msie > 0 || trident > 0 || edge > 0) {
      return true;
    }
    return false;
  }
  
  $(document).ready(function(){
    $('#titleNav').slideDown(500);
    $('#titleCoverNav').slideDown(500);
    $('.titleBtn').show("fade", null, 1000);
    
    /** Make sure to show the site nav on refresh of non-title pages **/
    if ($('#titleNav').offset().top > $('#title_container').height()) {
      $("#siteNav").show();
    }
    
    /** Scroll effects: blur title image + toggle navs **/
    $(window).scroll(function() {
      var scrollPos = $(window).scrollTop();
      var opacityVal = (scrollPos / 240)/2; // opacity value 0% to 50%
      $('.parallax_background').css('-webkit-filter', 'blur('+opacityVal+'em)');
      $('.parallax_background').css('filter', 'blur('+opacityVal+'em)');
  
      var light_pos    = $('#title_container').offset().top;
      var light_height = $('#title_container').height();
      var menu_pos     = $('#titleNav').offset().top;
      
      // if we're anywhere besides the title page 
      // and not doing so already, show the low-opacity (light) title nav
      if (scrollPos > 0 && document.getElementById("titleCoverNav").style.display == "none") {
        document.getElementById("titleCoverNav").style.display = block;
      }

      // if we're on the title page, show the title nav
      if(menu_pos < (light_pos + light_height)) {
        $("#siteNav").hide("fold", null, 1000);
      }
      else {
        // otherwise, show the global site nav (dark version)
        $("#siteNav").show("drop", null, 500);
		
		// if the title nav is already open, close it
		if ($("#titleCoverNav .collapse").css("display") != "none") {
			$("#titleCoverNav .navbar-toggler").click();
		}
      }
        }); // end window scroll
    
    if (isIE()){
      $("<link/>", {
        rel: "stylesheet",
        type: "text/css",
        href: "css/ie.css"
      }).appendTo("head");
    }
  }); // end document get ready
  
  </script>
</body>

</html>
