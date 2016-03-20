$(document).ready(function(){
    $("#newsticker").jCarouselLite({
		vertical: true,
		hoverPause:true,
		btnPrev: "#news-prev",
		btnNext: "#news-next",
		visible: 3,
		auto:3000,
		speed:500
	});	
    
    $("#accordion > li > div").click(function(){
if(false == $(this).next().is(':visible')) {
    $('#accordion ul').slideUp(500);
}
    $(this).next().slideToggle(500);
});


    });  
$(function () {
	var el = $('#nav_list_first li a');
	$('#nav_list_first li:has("ul")').append('<span></span>');
	el.click(function() {
		var checkedElement = $(this).next(),
			visibleElement = $('#nav_list_first ul:visible');
			
		visibleElement.stop().animate({'height':'toggle'}, 500).parent().removeClass('active');		
		if((checkedElement.is('ul')) && (!checkedElement.is(':visible'))) {
			checkedElement.stop().animate({'height':'toggle'}, 500).parent().addClass('active');
			return false;
        }	
		if((checkedElement.is('ul')) && (checkedElement.is(':visible'))) {
			return false;
		}
	});
});