//MENÚ DESPLEGABLE
    $('.header_menu_burguer').on('click', function() {
      $('#mySidebar2').toggleClass('mostrar_menu');
      $('.header__burguer_icon').toggleClass('burguer_animation');
      $('.header').toggleClass('menu_anim');
    });

  // cursor  
$(document).ready(function() {
    setTimeout(function() {
        $(".intro").fadeOut(700);
    },3000);
});

$(document).ready(function() {   
    setTimeout(function() {
        $(".content").fadeIn(1500);
    },2000);
});

var swiper1 = new Swiper('.swiper1', {
    direction: 'vertical',
    slidesPerView: 1,
    spaceBetween: 0,
    mousewheel: true,
    speed: 1000,
    allowTouchMove: false,
    hashNavigation: {
        watchState: true,
    },
    pagination: {
		el: '.swiper-pagination1',
		clickable: true,
    },
	navigation: {
		nextEl: '.swiper-button-next1',
	},
    breakpoints:{
        1024: {
            mousewheel: true,
            allowTouchMove: true,
        },
        768: {
            mousewheel: true,
            allowTouchMove: true,
            pagination: {
				el: '.swiper-pagination1',
				clickable: true,
		    },
        },
        640: {
            pagination: false,
            allowTouchMove: true,
            mousewheel: true,
            pagination: {
				el: '.swiper-pagination1',
				clickable: true,
		    },
        },
        320: {
            pagination: false,
            mousewheel: true,
            allowTouchMove: true,
            pagination: {
				el: '.swiper-pagination1',
				clickable: true,
		    },
        },
    },
});

var swiper2 = new Swiper('.swiper2', {
	direction: 'horizontal',
    slidesPerView: 1,
    spaceBetween: 0,
    // effect: 'coverflow',
    speed: 1000,
    navigation: false,
    breakpoints:{
        1024: {
            
        },
        767: {
            slidesPerView: 1,
            pagination: {
              el: '.swiper-pagination2',
              clickable: true,
            },
        },
        567: {
        	slidesPerView: 1,
        	pagination: {
              el: '.swiper-pagination2',
              clickable: true,
            },
        },
        320: {
        	slidesPerView: 1,
        	pagination: {
              el: '.swiper-pagination2',
              clickable: true,
            },
        },
    },
});
var swiper3 = new Swiper('.swiper3', {
    	direction: 'horizontal',
        slidesPerView: 3,
        spaceBetween: 0,
        // effect: 'coverflow',
        speed: 1000,
        loop: true,
        pagination: false,
        slidesPerColumn: 1,
        navigation: {
            nextEl: '.swiper-button-next3',
            prevEl: '.swiper-button-prev3',
        },
       //  autoplay: {
	      //   delay: 3500,
	      //   disableOnInteraction: false,
	      // },
        breakpoints:{
            1024: {
                slidesPerView: 1,
                slidesPerColumn: 2,
            },
            767: {
                slidesPerView: 1,
                slidesPerColumn: 2,
            },
            567: {
                slidesPerView: 1,
            	slidesPerColumn: 2,
            },
            320: {
                slidesPerView: 1,
            	slidesPerColumn: 2,

            },
        },
    });	

