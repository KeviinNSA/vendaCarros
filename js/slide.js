$(document).ready(function(){
	
	var qtd_img = $('.mini-img').length;
	var arrow_left = $('.arrow-left-nav');
	var arrow_right = $('.arrow-right-nav');
	var count = 1;
	arrow_right.click(function(){
		if(count >= qtd_img)
			count = qtd_img-1;
		var img_width = $('.mini-img').eq(count).offset().left - $('.nav-galeria-wraper').offset().left;
		
		var bg = $('.mini-img').eq(count).css('background-image');
		$('.foto-destaque').css('background-image',bg);
		
		$('.nav-galeria').animate({'scrollLeft':img_width});
		$('.mini-img').css('border','3px solid white');
		$('.mini-img').eq(count).css('border','3px solid #ccc');
		
		
		count++;
	});
	
	arrow_left.click(function(){
		count--;
		if(count <= 1)
			count = 1;
		
		var img_width = $('.mini-img').eq(count).offset().left - $('.nav-galeria-wraper').offset().left;
		
		var bg = $('.mini-img').eq(count).css('background-image');
		$('.foto-destaque').css('background-image',bg);
		
		$('.nav-galeria').animate({'scrollLeft':img_width});
		$('.mini-img').css('border','3px solid white');
		$('.mini-img').eq(count).css('border','3px solid #ccc');
		
	});
	
	$('.mini-img').click(function(){
		var bg = $(this).css('background-image');
		$('.foto-destaque').css('background-image',bg);
		$('.mini-img').css('border','3px solid white');
		$(this).css('border','3px solid #ccc');
	});
	
	
});