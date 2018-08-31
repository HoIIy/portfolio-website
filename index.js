/**
 * Hides the loading spinner on window load.
 * 
 */
$(window).on('load', function(){
    $('#loading').hide();
	$('#loading_img').hide();
});

/**
 * Constructs and sends the ajax request to the intended destination
 * 
 * @param params - Data to pass in the request
 * @param doneFunct - Function to be called when a response is given
 */
function ajaxData(destination, params, reqMethod, doneFunct){
    $.ajax({
        url: destination,
        method: reqMethod,
        data: params
    }).done(function(data) {
        // Execute the callback function
        doneFunct(data);
		
    }).fail(function(xhr, status, error) {
        // Handle error
        console.log(error);
    });
}

function getPage(pgName){
	var ajaxController = "func.php";
	ajaxData(ajaxController, {"pgName":pgName}, "POST", function(data){
		$("main").html("Hello <b>world</b>!");
	});
}

$(document).ready(function(){
	var navLinks = $("nav > ul > li > a");
	$.each(navLinks, function(){
		this.onclick = function(){
			getPage($(this).text().toLowerCase());
			return false;
		}
	});
});