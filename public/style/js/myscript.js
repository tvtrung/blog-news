$(document).ready(function() {
	function scroll_fixed_menu(){
	    var d_menu_top = $(".header-menu-t1").offset().top - $(window).scrollTop();
	    var height_menu = $('.header-menu').height();
	    //console.log(d_menu_top);
	    if(d_menu_top < 0){
	        $('.header-menu').addClass('header-menu-fixed');
	        $('.header-menu-t2').css('height',height_menu + "px");
	        //$("#wsnavtoggle").css("top", "0px");
	    }
	    else{
	        $('.header-menu').removeClass('header-menu-fixed');
	        $('.header-menu-t2').css('height',"0px");
	        //$("#wsnavtoggle").css("top",d_menu_top-5 + "px");
	    }
	};
	scroll_fixed_menu();
	$(document).scroll(function() {
	    scroll_fixed_menu();
	});
});
$(document).ready(function() {
	var owl = $(".owl-carousel-1");
	owl.owlCarousel({
	itemsCustom : [
	[0, 2],
	[450, 2],
	[600, 2],
	[700, 4],
	[1000, 4],
	[1200, 7],
	[1400, 7],
	[1600, 7]
	],
	navigation : true,
	autoPlay:true,
	});
});
