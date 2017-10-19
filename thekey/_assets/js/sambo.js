$(document).ready(function(){	
	$('#nav').click(function(e){
    	e.preventDefault();
		$('#modal').addClass('show');
	});
	
	$('#grid').click(function(e){
		e.preventDefault();
		$('.fullImage').toggleClass('grid');
		$(this).toggleClass('vert');
		$('.fullImage img').removeClass('first');
	});
	
});