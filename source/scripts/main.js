$('.slick-carousel').slick({
  dots: true,
  arrows: true,
  infinite: true,
  autoplay: true,
  autoplaySpeed: 2000,
  speed: 500,
  fade: true,
  cssEase: 'linear',
});

// sticky header
var body = $('body');
var headerDesktop = $('.header-desktop');
var headerNavHeight = 40;

$(window).scroll(function() {
  if ($(window).width() >= 992 && $(window).scrollTop() > headerNavHeight) {
    headerDesktop.addClass('fixed-top').css('margin-top', -headerNavHeight);
    body.css('margin-top', headerDesktop.height());
  } else {
    headerDesktop.removeClass('fixed-top').css('margin-top', 0);
    body.css('margin-top', 0);
  }
});

// open and close menu
function toggleMenu() {
  $('.button-burger').toggleClass('button-burger--toggle');
  $('.category-menu').toggleClass('category-menu--show');
  $('.category-menu__backdrop').toggleClass('category-menu__backdrop--show');
}

$('.button-burger').click(function () {
  toggleMenu();
});

$('.category-menu a').click(function() {
  toggleMenu();
});

$('.category-menu__backdrop').click(function() {
  toggleMenu();
});

// $.each($('.woocommerce span.onsale'), function( index, value ) {
//   lottie.loadAnimation({
//     container: value, // the dom element that will contain the animation
//     renderer: 'svg',
//     loop: true,
//     autoplay: true,
//     path: 'https://assets9.lottiefiles.com/packages/lf20_pKGPqV.json' // the path to the animation json
//   });
// });