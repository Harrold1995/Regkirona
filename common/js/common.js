/*hd*/ 

$(document).ready(function(){     
 	  $('.nav-pc .gnb li a').mouseenter(function(){
		$('.nav-pc .gnb-bg').stop().slideDown(150);
		$('.nav-pc .depth2').stop().slideDown(150);
	  });
	  $('.nav-pc').mouseleave(function(){
		$('.nav-pc .gnb-bg').stop().slideUp(150);
		$('.nav-pc .depth2').stop().slideUp(150);
	  }); 

	  $('.nav-m .gnb li a').click(function(){  
		$('.nav-m .depth2').stop().slideUp(150);
		$(this).find('ul').stop().slideToggle(150);
	  });
	  $('.nav-open').click(function(){  
		$('.nav-m .gnb-bg').show(); 
		$('.nav-m .gnb').addClass('open'); 
		$('.top-bar').addClass('open'); 
	  });
	  $('.nav-close, .depth2 li a').click(function(){  
		$('.nav-m .gnb-bg').hide(); 
		$('.nav-m .gnb').removeClass('open'); 
		$('.top-bar').removeClass('open'); 
	  });

	  	$('.ft-link').click(function(){  
			$('.intro-footer').addClass('none-fix');
		  });
		  $('.ft-link').click(function(){  
			  $('.intro-footer').removeClass('none-fix');
		  });

});


  
onResize = function () { 
	if($(window).width() < 1300) {
		$('#header').removeClass('nav-pc');
		$('#header').addClass('nav-m'); 
	} else {
		$('#header').addClass('nav-pc'); 
		$('#header').removeClass('nav-m'); 
	}
}

	
$(document).ready(onResize);
$(window).resize(onResize);


