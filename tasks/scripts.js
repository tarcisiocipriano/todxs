const { src, dest, series } = require('gulp'),
$     = require('gulp-load-plugins')()

function js() {
  return src('source/scripts/main.js')
    .pipe($.sourcemaps.init({ loadMaps: true }))
    .pipe($.concat('main.js'))
    .pipe($.jshint())
    .pipe($.jshint.reporter('default'))
    .pipe($.babel())
    .pipe($.uglify())
    .pipe($.sourcemaps.write('../maps'))
    .pipe(dest('./scripts'))
}

function vendors() {
  return src([
      'node_modules/jquery/dist/jquery.min.js',
      // 'node_modules/jquery-smooth-scroll/src/jquery.smooth-scroll.js',
      // 'node_modules/popper.js/dist/umd/popper.min.js',
      'node_modules/bootstrap/dist/js/bootstrap.min.js',
      'node_modules/slick-carousel/slick/slick.min.js',
      'node_modules/lottie-web/build/player/lottie_light.min.js',
    ])
    .pipe($.sourcemaps.init({ loadMaps: true }))
    .pipe($.concat('vendors.js'))
    .pipe($.uglify())
    .pipe($.sourcemaps.write('../maps'))
    .pipe(dest('./scripts'))
}

module.exports = series( js, vendors )