// hide the loading spinner on window load
// NOT document.ready()
$(window).on('load', function(){
    $('#loading').hide();
	$('#loading_img').hide();
});

$(document).ready(function(){
	$(window).scroll(function () {
		if ($(window).scrollTop() > 100) {
			$("#title_img").addClass("blur");
		} else {
			$("#title_img").removeClass("blur");
		}
	});
});