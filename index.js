// hide the loading spinner on window load
// NOT document.ready()
$(window).on('load', function(){
    $('#loading').hide();
	$('#loading_img').hide();
});

$(document).ready(function(){
	var navMe = document.getElementById("navMe");
	navMe.onclick = function(){
		console.log("me");
	}
	
	var navPort = document.getElementById("navPort");
	navPort.onclick = function(){
		console.log("port");
	}
	
	var navRes = document.getElementById("navRes");
	navRes.onclick = function(){
		console.log("res");
	}
	
	var navBlog = document.getElementById("navBlog");
	navBlog.onclick = function(){
		console.log("navBlog");
	}
	
	var navCont = document.getElementById("navCont");
	navCont.onclick = function(){
		console.log("navCont");
	}
	
	return false;
});