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
		
		$('html, body').animate({
			scrollTop: ($('.fullImage').offset().top) - 30
		}, 300);
	});
	
	$('img').click(function(){
		
		if($('.fullImage').hasClass('grid')){
			$('.fullImage').removeClass('grid');
			$('#grid').removeClass('vert');
			
			$('html, body').animate({
				scrollTop: ($(this).offset().top) - 5
			}, 300);
		}
		
		
		
	});
	
});