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
var topBar = $('.top-bar');
var topBarSmall = $('.top-bar__small');
$('body').css('padding-top', topBar.height());
$(window).scroll(function() {
  $('body').css('padding-top', topBar.height());
  if($(window).scrollTop() > 40) {
    topBar.addClass('top-bar--dense')
  } else {
    topBar.removeClass('top-bar--dense')
  }
});

// open and close menu
$('.button__burger').click(function () {
  $('.category__menu').toggleClass('category__menu--active');
  $('.button__burger').toggleClass('button__burger--toggle');
});

$('.category__menu a').click(function() {
  $('.category__menu').removeClass('category__menu--active');
  $('.button__burger').removeClass('button__burger--toggle');
});

// make search form bigger at smaller devices
$('.search-field').focusin(function() {
  if($(window).width() <= 991) {
    $('#top-bar__actions--left').addClass('top-bar__actions--left');
    $('#top-bar__actions--right').addClass('top-bar__actions--right');
    $('.search-form__container').removeClass('mr-3');
  }
});
$('.search-field').focusout(function() {
  $('#top-bar__actions--left').removeClass('top-bar__actions--left');
  $('#top-bar__actions--right').removeClass('top-bar__actions--right');
  $('.search-form__container').addClass('mr-3');
});


lottie.loadAnimation({
  container: document.getElementById('pride'), // the dom element that will contain the animation
  renderer: 'svg',
  loop: true,
  autoplay: true,
  path: 'https://assets9.lottiefiles.com/packages/lf20_pKGPqV.json' // the path to the animation json
});
