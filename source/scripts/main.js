$(document).ready(function () {
  $(".slick-carousel").slick({
    dots: true,
    arrows: true,
    infinite: true,
    autoplay: true,
    autoplaySpeed: 2000,
    speed: 500,
    fade: true,
    cssEase: "linear",
  });
});

lottie.loadAnimation({
  container: document.getElementById('pride'), // the dom element that will contain the animation
  renderer: 'svg',
  loop: true,
  autoplay: true,
  path: 'https://assets9.lottiefiles.com/packages/lf20_pKGPqV.json' // the path to the animation json
});
