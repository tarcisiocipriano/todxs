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
var navbarSmallHeight = $(".navbar--small").height();
var navbarHeight = $(".top-bar").height();
$(window).scroll(function() {
  if($(this).scrollTop() > navbarSmallHeight) {
    $('.top-bar').addClass('fixed-top');
    $('.top-bar').addClass('pt-0 pt-lg-3');
    $('body').css('padding-top', navbarHeight);
  } else {
      $('.top-bar').removeClass('fixed-top');
      $('.top-bar').removeClass('pt-0 pt-lg-3');
      $('body').css('padding-top', 0);
  }
});

// open and close menu
$('.button__burger').click(function () {
  $('.category__menu').toggleClass('category__menu--active')
  $('.button__burger').toggleClass('button__burger--toggle')
});

$('.category__menu a').click(function() {
  $('.category__menu').removeClass('category__menu--active')
  $('.button__burger').removeClass('button__burger--toggle')
});

// make search form bigger at smaller devices
$('.search-field').focusin(function() {
  $('.top-bar__actions').addClass('hiddeOnlySmall');
})
$('.search-field').focusout(function() {
  $('.top-bar__actions').removeClass('hiddeOnlySmall');
})


lottie.loadAnimation({
  container: document.getElementById('pride'), // the dom element that will contain the animation
  renderer: 'svg',
  loop: true,
  autoplay: true,
  path: 'https://assets9.lottiefiles.com/packages/lf20_pKGPqV.json' // the path to the animation json
});
