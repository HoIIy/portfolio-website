// hide the loading spinner on window load
// NOT document.ready()
$(window).on('load', function(){
    $('#loading').hide();
	$('#loading_img').hide();
});

$(document).ready(function(){
	var navMe = document.getElementById("nav_me");
	navMe.onclick = function(){
		console.log("me");
	}
	
	var navPort = document.getElementById("nav_port");
	navPort.onclick = function(){
		console.log("port");
	}
	
	var navRes = document.getElementById("nav_res");
	navRes.onclick = function(){
		console.log("res");
	}
	
	var navBlog = document.getElementById("nav_blog");
	navBlog.onclick = function(){
		console.log("navBlog");
	}
	
	var navCont = document.getElementById("nav_cont");
	navCont.onclick = function(){
		console.log("navCont");
	}
	
	return false;
});