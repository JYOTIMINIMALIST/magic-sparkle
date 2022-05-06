$(window).on('load', function(){
    setTimeout(function(){
        $('.loaderScreen').fadeOut();
        $(".bodyHolder").fadeIn("slow");
    }, 3000);
});
if($("#loaderAnim").length) {
    var loaderAnim = lottie.loadAnimation({
        container: document.getElementById('loaderAnim'), // Required
        path: site_url+'/wp-content/themes/magic-sparkle/js/json/loaderAnim.json', // Required
        renderer: 'svg', // Required
        loop: true, // Optional
        autoplay: true, // Optional
        name: "loaderAnim", // Name for future reference. Optional.
    });
}

// // Cookie Concent
// const Loader = {
// date:new Date().getDate(),
//   showLoader: () => {
//     console.log(localStorage.getItem("loaderStatus"), Loader.date);
//     // Check if cookie accepted
//     if(localStorage.getItem("loaderStatus") == Loader.date){
//         $('body').css('opacity',1);
//         $('.loaderScreen').fadeOut().html("");
//         return true
//     }
//     $('body').css('opacity',1);
//     $('.loaderScreen').css('opacity',1);

//     setTimeout(function(){
//         console.log()
//         $('.loaderScreen').fadeOut().html("");
//         $(".bodyHolder").fadeIn("slow");
//         Loader.setStatus()
//     }, 3000);
//     return true;
//   },
//   setStatus: () => {
//     localStorage.setItem("loaderStatus",Loader.date);
//     return true;
//   },
//   clearStatus: () => {
//     localStorage.removeItem("loaderStatus");
//     return true;
//   },
// };

$('.menu').click (function(){
    $(this).toggleClass('open');
    $('#menu').toggleClass('open');
});

$(window).on("scroll", function() {
    if($(window).scrollTop() > 50) {
        $(".header").addClass("active");
    } else {
        //remove the background property so it comes transparent again (defined in your css)
       $(".header").removeClass("active");
    }
});

$(function () {
    $(".bannercur").mousemove(function (e) {
        $(".bannercursor").show().css({
            "left": e.clientX-73,
            "top": e.clientY-73
        });
    }).mouseout(function () {
        $(".bannercursor").hide();
    });
});

$(document).ready(function () {
    $('#grid-container').imagesLoaded().progress( function() {
    	var $grid = $('#grid-container').isotope({
    		itemSelector: 'article'
    	});
    });
});

// filter buttons
$('.filters-button-group').on( 'click', 'button', function() {
	var $grid = $('#grid-container');
	var filterValue = $( this ).attr('data-filter');
	$grid.isotope({ filter: filterValue });
});
$('.button-group').each( function( i, buttonGroup ) {
	var $buttonGroup = $( buttonGroup );
	$buttonGroup.on( 'click', 'button', function() {
			$buttonGroup.find('.is-checked').removeClass('is-checked');
			$( this ).addClass('is-checked');
	});
});
setTimeout(function(){grid.isotope('layout')}, 300);
// debounce so filtering doesn't happen every millisecond
function debounce( fn, threshold ) {
	var timeout;
	return function debounced() {
	if ( timeout ) {
			clearTimeout( timeout );
	}
	function delayed() {
			fn();
			timeout = null;
	}
	timeout = setTimeout( delayed, threshold || 100 );
	}
}

$(window).bind("load", function() {
  	$('#all').click();
});

var $testislider = $(".testimonialSlider").slick({
    dots: false,
    infinite: true,
    arrows:true,
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 4000,
    prevArrow: $(".testimonialSliderBack"),
    nextArrow: $(".testimonialSliderForward")
});

$('#fullpage').fullpage({
    css3:true,
    sectionsColor: ['linear-gradient(287.56deg, #33154D 0%, #000132 100%)', 'linear-gradient(65.58deg, #E5FFFC 17.14%, #F6E8FE 101.47%)', '#7BAABE', 'whitesmoke', '#ccddff', '#ccc'],
    anchors: ['home', 'our-magical-range', 'how-to-buy', 'our-ambassadors', 'media-blogs', 'certifications', 'candid-on-ig', 'sparkling-gallery', 'footer'],
    navigation: true,
    navigationPosition: 'right',
    navigationTooltips: ['Home', 'Our Magical Range', 'How To Buy', 'Our Ambassadors', 'Media & Blogs', 'Certifications', 'Candid on IG', 'Sparkling Gallery', 'Footer'],
    fadingEffect: true,
    keyboardScrolling: true,
    scrollingSpeed:800,
    licenseKey: 'OPEN-SOURCE-GPLV3-LICENSE',
    responsiveWidth: 900,
    afterResponsive: function(isResponsive){
    },
    afterLoad: function(anchorLink, index){
        // console.log(index);
        if(index == 1){
            $('#fp-nav ul li a span, .fp-slidesNav ul li a span').css('background','#fff');
            $('#fp-nav ul li .fp-tooltip').css('color','#fff');
            $('#header .menuHolder a, .contactUsCta').css('color','#fff');
            $('.contactUsCta').css('border','1px solid #fff');
            $('.btn2 .icon').removeClass('blackBG');
            $('#header').removeClass('active');
        };
        if(index == 2){
            $('#fp-nav ul li a span, .fp-slidesNav ul li a span').css('background','#000');
            $('#fp-nav ul li .fp-tooltip').css('color','#000');
            $('#header .menuHolder a, .contactUsCta').css('color','#000');
			$('#header').append('<style>.menuHolder a:before{background:#000 !important;}</style');
            $('.contactUsCta').css('border','1px solid #000');
            $('.btn2 .icon').addClass('blackBG');
            $('#header').removeClass('active');
        };
        if(index == 3){
            $('#fp-nav ul li a span, .fp-slidesNav ul li a span').css('background','#fff');
            $('#fp-nav ul li .fp-tooltip').css('color','#fff');
            $('#header .menuHolder a, .contactUsCta').css('color','#fff');
			$('#header').append('<style>.menuHolder a:before{background:#fff !important;}</style');
            $('.contactUsCta').css('border','1px solid #fff');
            $('.btn2 .icon').removeClass('blackBG');
            $('#header').removeClass('active');
        };
        if(index == 4){
            $('#fp-nav ul li a span, .fp-slidesNav ul li a span').css('background','#000');
            $('#fp-nav ul li .fp-tooltip').css('color','#000');
            $('#header .menuHolder a, .contactUsCta').css('color','#000');
			$('#header').append('<style>.menuHolder a:before{background:#000 !important;}</style');
            $('.contactUsCta').css('border','1px solid #000');
            $('.btn2 .icon').addClass('blackBG');
            $('#header').removeClass('active');
        }
        if(index == 5){
            $('#fp-nav ul li a span, .fp-slidesNav ul li a span').css('background','#fff');
            $('#fp-nav ul li .fp-tooltip').css('color','#fff');
            $('#header .menuHolder a, .contactUsCta').css('color','#fff');
			$('#header').append('<style>.menuHolder a:before{background:#fff !important;}</style');
            $('.contactUsCta').css('border','1px solid #fff');
            $('.btn2 .icon').removeClass('blackBG');
            $('#header').removeClass('active');
        }
        if(index == 6){
            $('#fp-nav ul li a span, .fp-slidesNav ul li a span').css('background','#000');
            $('#fp-nav ul li .fp-tooltip').css('color','#000');
            $('#header .menuHolder a, .contactUsCta').css('color','#000');
			$('#header').append('<style>.menuHolder a:before{background:#000 !important;}</style');
            $('.contactUsCta').css('border','1px solid #000');
            $('.btn2 .icon').addClass('blackBG');
            $('#header').removeClass('active');
        }
        if(index == 7){
            $('#fp-nav ul li a span, .fp-slidesNav ul li a span').css('background','#fff');
            $('#fp-nav ul li .fp-tooltip').css('color','#fff');
            $('#header .menuHolder a, .contactUsCta').css('color','#fff');
			$('#header').append('<style>.menuHolder a:before{background:#fff !important;}</style');
            $('.contactUsCta').css('border','1px solid #fff');
            $('.btn2 .icon').removeClass('blackBG');
            $('#header').removeClass('active');
        }
        if(index == 8){
            $('#fp-nav ul li a span, .fp-slidesNav ul li a span').css('background','#000');
            $('#fp-nav ul li .fp-tooltip').css('color','#000');
            $('#header .menuHolder a, .contactUsCta').css('color','#000');
			$('#header').append('<style>.menuHolder a:before{background:#000 !important;}</style');
            $('.contactUsCta').css('border','1px solid #000');
            $('.btn2 .icon').addClass('blackBG');
            $('#header').removeClass('active');
        }
        if(index == 9){
            // $('#header').css('background','linear-gradient(65.58deg, #E5FFFC 17.14%, #F6E8FE 101.47%)');
            $('#header').addClass('active');
            $('#fp-nav ul li .fp-tooltip').css('color','#000');
            $('#header .menuHolder a, .contactUsCta').css('color','#000');
			$('#header').append('<style>.menuHolder a:before{background:#000 !important;}</style');
            $('.contactUsCta').css('border','1px solid #000');
            $('.btn2 .icon').addClass('blackBG');
        }
    },
    onLeave: function(index, nextIndex, direction){
        // console.log(index, nextIndex, direction);
        if(index == 1){
        };
        if(index == 2){
        };
        if(index == 3){
        };
        if(index == 4){
        };
        if(index == 5){
        };
        if(index == 6){
        };
        if(index == 7){
        };
        if(index == 8 && nextIndex == 7){
        };
        if(index == 9){
            $('#header').css('background','transparent');
        };
        // if(index == 2 && nextIndex == 1){
        // };
        // if(index == 3 && nextIndex ==4){
        // };
    }
});

$("#fp-nav ul li").click(function () {
    $(".activeInput").removeClass("activeInput");
    $(this).addClass("activeInput");
});

$('.mediablogSlider').slick({
    dots: false,
    infinite: false,
    arrows:true,
    slidesToShow: 3,
    slidesToScroll: 1,
    prevArrow: $(".mediablogSliderBack"),
    nextArrow: $(".mediablogSliderForward"),
    responsive: [
        {
            breakpoint: 900,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 1
            }
        },
        {
            breakpoint: 640,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1
            }
        }
    ]
});

$('#instafeed').slick({
    dots: false,
    infinite: false,
    arrows:true,
    slidesToShow: 5,
    slidesToScroll: 1,
    prevArrow: $(".candidInstaSliderBack"),
    nextArrow: $(".candidInstaSliderForward"),
    responsive: [
        {
            breakpoint: 900,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 1
            }
        },
        {
            breakpoint: 640,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1
            }
        }
    ]
});

var rev = $('.rev_slider');
rev.on('init', function(event, slick, currentSlide) {
    var
        cur = $(slick.$slides[slick.currentSlide]),
        next = cur.next(),
        next2 = cur.next().next(),
        prev = cur.prev(),
        prev2 = cur.prev().prev();
        prev.addClass('slick-sprev');
        next.addClass('slick-snext');  
        prev2.addClass('slick-sprev2');
        next2.addClass('slick-snext2');  
        cur.removeClass('slick-snext').removeClass('slick-sprev').removeClass('slick-snext2').removeClass('slick-sprev2');
        slick.$prev = prev;
        slick.$next = next;
    }).on('beforeChange', function(event, slick, currentSlide, nextSlide) {
    console.log('beforeChange');
    var
        cur = $(slick.$slides[nextSlide]);
        console.log(slick.$prev, slick.$next);
        slick.$prev.removeClass('slick-sprev');
        slick.$next.removeClass('slick-snext');
        slick.$prev.prev().removeClass('slick-sprev2');
        slick.$next.next().removeClass('slick-snext2');
        next = cur.next(),  
        prev = cur.prev();
        //prev2.prev().prev();
        //next2.next().next();
        prev.addClass('slick-sprev');
        next.addClass('slick-snext');
        prev.prev().addClass('slick-sprev2');
        next.next().addClass('slick-snext2');
        slick.$prev = prev;
        slick.$next = next;
        cur.removeClass('slick-next').removeClass('slick-sprev').removeClass('slick-next2').removeClass('slick-sprev2');
    });
rev.slick({
    speed: 1000,
    arrows: true,
    dots: false,
    focusOnSelect: true,
    prevArrow: $(".gallerySliderBack"),
    nextArrow: $(".gallerySliderForward"),
    infinite: true,
    centerMode: true,
    slidesPerRow: 1,
    slidesToShow: 1,
    slidesToScroll: 1,
    centerPadding: '0',
    swipe: true,
    customPaging: function(slider, i) {
    return '';
},
});

// FAQs Page JS
$(document).ready(function () {
    //toggle the component with class accordion_body
	$(".accordion_head").click(function () {
    	if ($('.accordion_body').is(':visible')) {
        	$(".accordion_body").slideUp(300);
        	$(".plusminus").text('+');
    	}
    	if ($(this).next(".accordion_body").is(':visible')) {
        	$(this).next(".accordion_body").slideUp(300);
        	$(this).children(".plusminus").text('+');
    	} else {
        	$(this).next(".accordion_body").slideDown(300);
        	$(this).children(".plusminus").text('-');
    	}
	});

	$(".faqsQA").slice(0, 5).show();
  		$("#loadMore").on("click", function(e){
		e.preventDefault();
		$(".faqsQA:hidden").slice(0, 100).slideDown();
		if($(".faqsQA:hidden").length == 0) {
  			$("#loadMore").text("No More Questions").addClass("noContent");
		}
	});
});

// Where To Buy Page JS
$(document).ready(function(){
  	//hides dropdown content
  	$(".size_chart").hide();
  	//unhides first option content
  	$("#option0").show();
  	//listen to dropdown for change
  	$("#size_select").change(function(){
    	//rehide content on change
    	$('.size_chart').hide();
    	//unhides current item
    	$('#'+$(this).val()).show();
  	});
});

// $('html,body').animate({
//     scrollTop: $(window.location.hash).offset().top - 100
// });