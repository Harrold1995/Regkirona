$(document).ready(function(){
	pageMove();
	pageSetting();
});


function pageMove(){
    var pageHeight = 0 ;

    $('.left-nav .nav li a').on('click',function(){
		$('.left-nav .nav li a').removeClass('on');
		$(this).addClass('on');
		
		var pageName = $(this).data('id');

        if(pageName){
        $('html, body').animate({
            scrollTop: $('#'+ pageName).offset().top
        }, 300);

        }else{
            return;
        }
    })
}

function pageSetting(){
	const sectionElem =  $('.sec-content  .el');
	const heightArr = [];
	let scrollValue = 0;
	let scrollHeight = 0;
	let prevScrollHeight = 0;
	let currentHeight = 0;
	let currentPage = 0;
	let totalScrollHeight = 0;

	sectionElem.each(function(){
		heightArr.push($(this).innerHeight());
	})

	$(window).on('scroll',function(){ 

		prevScrollHeight = 0; 
		scrollValue = 	$(window).scrollTop();		

		for(let i = 0 ; i < currentPage ; i++ ){ 
			prevScrollHeight += heightArr[i]; 		
		}
		if (prevScrollHeight + heightArr[currentPage] <= scrollValue ){
			currentPage ++;
		}else if (scrollValue < prevScrollHeight){
			currentPage --;
		}
		
		switch (currentPage){
			case 0:
					$('.nav li').find('a').removeClass('on');
			break;

			case 1:
					$('.nav li').find('a').removeClass('on');
					$('.nav li').eq(currentPage - 1).find('a').addClass('on');
			break;

			case 2:
					$('.nav li').find('a').removeClass('on');
					$('.nav li').eq(currentPage - 1).find('a').addClass('on');
			break;

			case 3:
					$('.nav li').find('a').removeClass('on');
					$('.nav li').eq(currentPage - 1).find('a').addClass('on');
			break;

			case 4:
					$('.nav li').find('a').removeClass('on');
					$('.nav li').eq(currentPage - 1).find('a').addClass('on');
			break;

			case 5:
					$('.nav li').find('a').removeClass('on');
					$('.nav li').eq(currentPage - 1).find('a').addClass('on');
			break;

			case 6:
					$('.nav li').find('a').removeClass('on');
					$('.nav li').eq(currentPage - 1).find('a').addClass('on');
			break;

			case 7:
					$('.nav li').find('a').removeClass('on');
					$('.nav li').eq(currentPage - 1).find('a').addClass('on');
			break;

			case 8:
					$('.nav li').find('a').removeClass('on');
					$('.nav li').eq(currentPage - 1).find('a').addClass('on');
			break;

			case 9:
					$('.nav li').find('a').removeClass('on');
					$('.nav li').eq(currentPage - 1).find('a').addClass('on');
			break;
		}
	});
}