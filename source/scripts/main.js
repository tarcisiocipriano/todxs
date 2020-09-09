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
var navbar = $(".top-bar");
var navbarSmall = $(".navbar-small");
$(window).scroll(function() {
  if($(window).width() <= 992) {
    navbar.addClass('fixed-top');
  } else {
    if($(window).scrollTop() > navbarSmall.height()) {
      navbar.addClass('fixed-top pt-0 pt-lg-3');
      $('body').css('padding-top', navbar.height());
    } else {
      navbar.removeClass('fixed-top pt-0 pt-lg-3');
      $('body').css('padding-top', 0);
    }
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
