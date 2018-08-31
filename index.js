// hide the loading spinner on window load
// NOT document.ready()
$(window).on('load', function(){
    $('#loading').hide();
	$('#loading_img').hide();
});