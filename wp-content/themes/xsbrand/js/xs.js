jQuery(document).ready(function($) {
$('.header-menu-con').slicknav({	
	label: '',
	prependTo:'.mini'
});
$('.wechat').hover(function() {
		$(this).find('.img-wechat').show();
        },
        function() {
			$(this).find('.img-wechat').hide();
        });
		
	//导航下标
	$(".sub-menu").prepend('<span class="arr_t"></span>'); 
	$('.header-menu-con li').hover(function() {
           
			  $(this).find('ul').show();
        },
        function() {
			$(this).find('ul').hide();
        });
		




  var swiper = new Swiper('#slider .swiper-container', {
        pagination: '#slider .swiper-pagination',
        paginationClickable: true,
        nextButton: '.icon-arrows-right',
        prevButton: '.icon-arrows-left',
		loop: true,
		autoplay: 5000,//可选选项，自动滑动
    });  
 
	  var swiper = new Swiper('#idx-images .swiper-container', {
        pagination: '#idx-images .swiper-pagination',
        paginationClickable: true,
		loop: true,
		autoplay: 5000,//
    });  
});

