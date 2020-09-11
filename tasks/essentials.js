const { src, dest } = require('gulp'),
$     = require('gulp-load-plugins')(),
bSync = require('browser-sync').create()

function css() {
  return src('source/stylesheets/**/*.scss')
    .pipe($.sourcemaps.init({ loadMaps: true }))
    .pipe($.sass().on('error', $.sass.logError))
    .pipe($.autoprefixer({ overrideBrowserslist: ['last 2 versions'] }))
    .pipe($.cssnano())
    .pipe($.sourcemaps.write('../maps'))
    .pipe(dest('./stylesheets'))
    .pipe(bSync.stream())
}

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

module.exports = { css, js, vendors }