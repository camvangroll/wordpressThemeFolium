$(function(){
	
	$('.menu-btn').click(function(e) {
		e.preventDefault();
		$('.main').toggleClass('slideOpen');
		$('header.slideNav').toggleClass('slideNavOpen');
	});


});