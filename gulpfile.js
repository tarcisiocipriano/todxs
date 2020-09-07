const $           = require("gulp-load-plugins")(),
      browserSync = require("browser-sync").create(),
      del         = require("del"),
      gulp        = require("gulp")

function data() {
  return gulp.src("source/data/**/*").pipe(gulp.dest("./assets/data"))
}

function files() {
  return gulp.src("source/files/**/*").pipe(gulp.dest("./assets/files"))
}

function icons() {
  return gulp.src("source/icons/**/*").pipe(gulp.dest("./assets/icons"))
}

function fonts() {
  return gulp.src("source/fonts/**/*").pipe(gulp.dest("./assets/fonts"))
}

function images() {
  return gulp
    .src("source/images/**/*")
    .pipe(
      $.imagemin([
        $.imagemin.gifsicle({ interlaced: true }),
        $.imagemin.mozjpeg({ progressive: true }),
        $.imagemin.optipng({ optimizationLevel: 5 })
      ])
    )
    .pipe(gulp.dest("./assets/images"))
}

function css() {
  return gulp
    .src("source/stylesheets/**/*.scss")
    .pipe($.sourcemaps.init({ loadMaps: true }))
    .pipe($.sass().on("error", $.sass.logError))
    .pipe($.autoprefixer({ overrideBrowserslist: ["last 2 versions"] }))
    .pipe($.cssnano())
    .pipe($.sourcemaps.write("../maps"))
    .pipe(gulp.dest("./stylesheets"))
    .pipe(browserSync.stream())
}

function Vendors() {
  return gulp
    .src([
      "node_modules/jquery/dist/jquery.min.js",
      // "node_modules/jquery-smooth-scroll/src/jquery.smooth-scroll.js",
      // "node_modules/popper.js/dist/umd/popper.min.js",
      "node_modules/bootstrap/dist/js/bootstrap.min.js",
      "node_modules/slick-carousel/slick/slick.min.js",
      // "node_modules/lottie-web/build/player/lottie_light.min.js",
    ])
    .pipe($.sourcemaps.init({ loadMaps: true }))
    .pipe($.concat("vendors.js"))
    .pipe($.uglify())
    .pipe($.sourcemaps.write("../maps"))
    .pipe(gulp.dest("./scripts"))
}

function js() {
  return gulp
    .src("source/scripts/main.js")
    .pipe($.sourcemaps.init({ loadMaps: true }))
    .pipe($.concat("main.js"))
    .pipe($.jshint())
    .pipe($.jshint.reporter("default"))
    .pipe($.babel())
    .pipe($.uglify())
    .pipe($.sourcemaps.write("../maps"))
    .pipe(gulp.dest("./scripts"))
}

function clean(done) {
  del("assets")
  del("maps")
  del("scripts")
  del("stylesheets")
  done()
}

function watch_files() {
  gulp.watch("source/data/**/*", data)
  gulp.watch("source/files/**/*", files)
  gulp.watch("source/icons/**/*", icons)
  gulp.watch("source/fonts/**/*", fonts)
  gulp.watch("source/images/**/*", images)

  gulp.watch("**/*.php").on("change", browserSync.reload)
  gulp.watch("source/stylesheets/**/*.scss", css)
  gulp.watch("source/scripts/**/*.js", js).on("change", browserSync.reload)

  browserSync.init({
    proxy: "http://sexshoptodxs.local",
    tunnel: "sexshoptodxs",
    // port: '80',
    // open: 'external',
    // host: 'todxs.localtunnel.me',
  })
}

function build(done) {
  data()
  files()
  icons()
  fonts()
  css()
  js()
  Vendors()
  done()
}

function imageclean(done) {
  del("assets/images")
  done()
}

function imagemin(done) {
  images()
  done()
}

exports.clean = clean
exports.build = build
exports.watch = watch_files
exports.default = gulp.series(clean, build, watch_files)
exports.imagemin = imagemin
exports.imageclean = imageclean
