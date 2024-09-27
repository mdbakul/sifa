(function ($) {
	"use strict"; 
	
//Hide Loading Box (Preloader)
function handlePreloader() {
	if($('.preloader').length){
		$('.preloader').delay(300).fadeOut(500);
	}
	}
	$(window).on('load', function() {
	handlePreloader();
});

$(document).ready(function () {	
// Sidebar Js
$(".tp-menu-bar").on("click", function () {
	$(".tpoffcanvas").addClass("opened");
	$(".body-overlay").addClass("apply");
});
$(".close-btn").on("click", function () {
	$(".tpoffcanvas").removeClass("opened");
	$(".body-overlay").removeClass("apply");
});
$(".body-overlay").on("click", function () {
	$(".tpoffcanvas").removeClass("opened");
	$(".body-overlay").removeClass("apply");
});	

if($('.tp-main-menu-content').length && $('.tp-main-menu-mobile').length){
	let navContent = document.querySelector(".tp-main-menu-content").outerHTML;
	let mobileNavContainer = document.querySelector(".tp-main-menu-mobile");
	mobileNavContainer.innerHTML = navContent;

	let arrow = $(".tp-main-menu-mobile .has-dropdown > a");
	
	arrow.each(function () {
		let self = $(this);
		let arrowBtn = document.createElement("BUTTON");
		arrowBtn.classList.add("dropdown-toggle-btn");
		arrowBtn.innerHTML = "<i class='fal fa-angle-right'></i>";

		self.append(function () {
		  return arrowBtn;
		});

		self.find("button").on("click", function (e) {
		  e.preventDefault();
		  let self = $(this);
		  self.toggleClass("dropdown-opened");
		  self.parent().toggleClass("expanded");
		  self.parent().parent().addClass("dropdown-opened").siblings().removeClass("dropdown-opened");
		  self.parent().parent().children(".tp-submenu").slideToggle();
		});

	});
}


/*==== header Section Start here =====*/
$("ul>li>ul").parent("li").addClass("menu-item-has-children");
// drop down menu width overflow problem fix
$('ul').parent('li').on('hover', function () {
	var menu = $(this).find("ul");
	var menupos = $(menu).offset();
	if (menupos.left + menu.width() > $(window).width()) {
		var newpos = -$(menu).width();
		menu.css({
			left: newpos
		});
	}
});
$('.header__nav li a').on('click', function (e) {
	var element = $(this).parent('li');
	if (screen.width < 1200) {
		if (element.hasClass('open')) {
			element.removeClass('open');
			element.find('li').removeClass('open');
			element.find('ul').slideUp(300, "swing");
		} else {
			element.addClass('open');
			element.children('ul').slideDown(300, "swing");
			element.siblings('li').children('ul').slideUp(300, "swing");
			element.siblings('li').removeClass('open');
			element.siblings('li').find('li').removeClass('open');
			element.siblings('li').find('ul').slideUp(300, "swing");
		}
	}
})

	
//Header   	
var fixed_top = $(".header__bottom");
$(window).on('scroll', function () {
	if (screen.width > 1200) {
		if ($(this).scrollTop() > 100) {
			fixed_top.addClass("header-fixed animated fadeInDown");
		} else {
			fixed_top.removeClass("header-fixed animated fadeInDown");
		}
	}	
});	
	
// 03. Search Js
$(".search-open-btn").on("click", function () {
	$(".search__popup").addClass("search-opened");
});
	
$(".search-close-btn").on("click", function () {
	$(".search__popup").removeClass("search-opened");
});
	
// banner garden
var swiper = new Swiper(".hostbanner", {
	spaceBetween: 0,
	loop: true,
	slidesPerView: 1,
	freeMode: true,
	watchSlidesProgress: true,
	autoplay: {
		delay: 7000,
	},
});

//Odometer
$(".odometer").each(function () {
	$(this).isInViewport(function (status) {
		if (status === "entered") {
			for (
				var i = 0; i < document.querySelectorAll(".odometer").length; i++
			) {
				var el = document.querySelectorAll(".odometer")[i];
				el.innerHTML = el.getAttribute("data-odometer-final");
			}
		}
	});
});


// our project section start here garden
var swiper = new Swiper(".project__slider", {
	spaceBetween: 0,
	loop: true,
	watchSlidesProgress: true,
	breakpoints: {
		1200: {
			slidesPerView: 4,
		},
		992: {
			slidesPerView: 3,
		},
		768: {
			slidesPerView: 2,
		},
	},
	autoplay: {
		delay: 5000,
	},
});

// our project section start here garden
var swiper = new Swiper(".project__slider2", {
	spaceBetween: 24,
	loop: true,
	watchSlidesProgress: true,
	breakpoints: {
		768: {
			slidesPerView: 3,
		},
		576: {
			slidesPerView: 2,
		},
	},
	autoplay: {
		delay: 5000,
	},
});


// team  here
var swiper = new Swiper(".team__slider", {
	spaceBetween: 24,
	loop: true,
	freeMode: true,
	watchSlidesProgress: true,
	pagination: {
		el: ".swiper-pagination",
		clickable: true,
	},
	navigation: {
		nextEl: ".swiper-button-next",
		prevEl: ".swiper-button-prev",
	},
	autoplay: {
		delay: 5000,
	},
	breakpoints: {
		768: {
			slidesPerView: 2,

		},
		0: {
			slidesPerView: 1,
		},

	},
});

// testmonial  garden
var swiper = new Swiper(".testmonial__slider", {
	spaceBetween: 24,
	loop: true,
	freeMode: true,
	watchSlidesProgress: true,
	pagination: {
		el: ".swiper-pagination",
		clickable: true,
	},
	navigation: {
		nextEl: ".swiper-button-next",
		prevEl: ".swiper-button-prev",
	},
	autoplay: {
		delay: 5000,
	},
	breakpoints: {
		992: {
			slidesPerView: 2,

		},
		0: {
			slidesPerView: 1,
			height: 360,
		},
	},
});



// service gardening
var swiper = new Swiper(".service2__slider", {
	spaceBetween: 24,
	loop: true,
	freeMode: true,
	watchSlidesProgress: true,
	breakpoints: {		
		992: {
			slidesPerView: 3,
		},
		768: {
			slidesPerView: 2,
		},
	},
	autoplay: {
		delay: 3000,
	},
});


// service section start here 2
var swiper = new Swiper(".feedback2__slider2", {
	spaceBetween: 24,
	loop: true,
	freeMode: true,
	watchSlidesProgress: true,
	navigation: {
		nextEl: ".swiper-button-next",
		prevEl: ".swiper-button-prev",
	},
	breakpoints: {
		1366: {
			slidesPerView: 4,
			height: 24,
		},
		768: {
			slidesPerView: 2,
		},
	},
	autoplay: {
		delay: 5000,
	},
});


// feedback garden
var swiper = new Swiper(".feedback__slider", {
	direction: "vertical",
	slidesPerView: 2,
	paginationClickable: true,
	spaceBetween: 0,
	mousewheelControl: true,
	loop: true,	
	autoHeight: true,
	speed: 700,
	breakpoints: {
		576: {
			height: 700,
		},
		500: {
			height: 520,
		},
		450: {
			height: 600,
		},
		375: {
			height: 650,
		},
		0: {
			height: 680,
		}
	}	
});

// partner  here
var swiper = new Swiper(".partner__slider", {
	spaceBetween: 5,
	loop: true,
	freeMode: true,
	watchSlidesProgress: true,

	breakpoints: {
		1200: {
			slidesPerView: 5,
		},
		992: {
			slidesPerView: 4,
		},
		450: {
			slidesPerView: 3,
		},
		375: {
			slidesPerView: 2,
		},
	},
	autoplay: {
		delay: 4000,
		disableOnInteraction: false,
        reverseDirection: true,
	},
});
	
// product  here
var swiper = new Swiper(".product__slider", {
	spaceBetween: 5,
	loop: true,
	freeMode: true,
	watchSlidesProgress: true,	
	breakpoints: {
		1366: {
			slidesPerView: 4,
		},
		992: {
			slidesPerView: 3,
		},
		768: {
			slidesPerView: 2,
		},
		576: {
			slidesPerView: 1,
		},
	},
	autoplay: {
		delay: 5000,
		disableOnInteraction: false,
	},
});
	
// testimonial2 section start here
var swiper = new Swiper(".testmonial2__slider", {
	spaceBetween: 0,
	loop: true,
	freeMode: true,
	watchSlidesProgress: true,
	navigation: {
		nextEl: ".testmonial__next",
		prevEl: ".testmonial__pre",
	},
	breakpoints: {
		1200: {
			slidesPerView: 1,
		},

	},
	autoplay: {
		delay: 4000,
	},
});


//food gallery    
var $grid2 = $(".projectfilter__filter").isotope({
	transitionDuration: "0.9s",
});
// sort items on button click
$(".item").on("click", function () {
	var filterValue = $(this).attr("data-sort-by");
	$grid2.isotope({ filter: filterValue });
});

$(".item").click(function () {
	$(this).addClass("active").siblings().removeClass("active");
});


// Search option start here
$(document).on("click", ".searchbtn, .closer", function () {
	$(".orginalsearch").toggleClass("active");
});

// scroll up start here
$(function () {
	//Check to see if the window is top if not then display button
	$(window).scroll(function () {
		if ($(this).scrollTop() > 300) {
			$(".scrollToTop").css({
				bottom: "2%",
				opacity: "1",
				transition: "all .5s ease",
			});
		} else {
			$(".scrollToTop").css({
				bottom: "-30%",
				opacity: "0",
				transition: "all .5s ease",
			});
		}
	});
	//Click event to scroll to top
	$(".scrollToTop").on("click", function () {
		$("html, body").animate(
			{
				scrollTop: 0,
			},
			500
		);
		return false;
	});
});

// lightcase 
$('a[data-rel^=lightcase]').lightcase();

// shop cart + - start here
var CartPlusMinus = $('.cart-plus-minus');
$(".qtybutton").on("click", function () {
	var $button = $(this);
	var oldValue = $button.parent().find("input").val();
	if ($button.text() === "+") {
		var newVal = parseFloat(oldValue) + 1;
	} else {
		if (oldValue > 0) {
			var newVal = parseFloat(oldValue) - 1;
		} else {
			newVal = 1;
		}
	}
	$button.parent().find("input").val(newVal);
});
// products details start here
var swiper = new Swiper(".productsdetails1", {
	loop: true,
	spaceBetween: 10,
	height: 553,
	slidesPerView: 5,
	freeMode: true,
	watchSlidesProgress: true,
});
var swiper2 = new Swiper(".productsdetails2", {
	loop: true,
	spaceBetween: 0,
	thumbs: {
		swiper: swiper,
	},
});

//Header ellipsis gardening   
var fixed_top = $(".header__bottom");
$(window).on('scroll', function () {
	if ($(this).scrollTop() > 100) {
		fixed_top.addClass("ellepsis animated fadeInDown");
	} else {
		fixed_top.removeClass("ellepsis animated fadeInDown");
	}
});

// ellepsis gardening
$('.ellepsis').on('click', function (e) {
	var element = $('.header__top');
	if (element.hasClass('open')) {
		element.removeClass('open');
		element.slideUp(100, "swing");
		$('.overlayTwo').removeClass('active');
	} else {
		element.addClass('open');
		element.slideDown(300, "swing");
		$('.overlayTwo').addClass('active');
	}
});	

// cart 
$('.carticon a').on("click", function () {
	$('.mini_shopping_cart_box').addClass('cartopen');
});
$('.cartclose i').on("click", function () {
	$('.mini_shopping_cart_box').removeClass('cartopen');
});

});
}(jQuery));