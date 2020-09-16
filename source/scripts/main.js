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
// var body = $('body');
// var headerDesktop = $('.header-desktop');
// var headerNavHeight = 40;

// $(window).scroll(function() {
//   if ($(window).width() >= 992 && $(window).scrollTop() > headerNavHeight) {
//     headerDesktop.addClass('fixed-top').css('margin-top', -headerNavHeight);
//     body.css('margin-top', headerDesktop.height());
//   } else {
//     headerDesktop.removeClass('fixed-top').css('margin-top', 0);
//     body.css('margin-top', 0);
//   }
// });

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

lottie.loadAnimation({
  container: document.getElementById('lottie-not-found'), // the dom element that will contain the animation
  renderer: 'svg',
  loop: true,
  autoplay: true,
  path: 'https://assets10.lottiefiles.com/packages/lf20_4DPcyu.json' // the path to the animation json
});

/* -------------------- rebuild review order layout to add the cupon --------------------*/
// select the elements
var checkout_coupon = $('.checkout_coupon').addClass('d-flex');
var order_review_area = $('#order_review');
var order_review_table = $('#order_review > table');
var order_review_payment = $('#order_review > #payment');

// clear the order review
$('#order_review > table').remove();
$('#order_review > #payment').remove();

// add the contents again
order_review_area.append('<div class="row"></div>');
$('#order_review > .row')
.append('<div class="table-location col-12 col-lg-6 mb-3 mb-lg-0"></div>')
.append('<div class="payment-location col-12 col-lg-6"></div>')
$('.payment-location').append(order_review_payment);
$('.table-location').append(order_review_table).append(checkout_coupon);