const $     = require("gulp-load-plugins")(),
browserSync = require("browser-sync").create(),
del         = require("del"),
gulp        = require("gulp")

const { data, files, icons, fonts } = require('./tasks/files'),
      { js, vendors}                = require('./tasks/scripts'),
      sprites                       = require('./tasks/sprites')

function clean(done) {
  del("assets")
  del("maps")
  del("scripts")
  del("stylesheets")
  done()
}

function css() {
  return gulp.src('source/stylesheets/**/*.scss')
    .pipe($.sourcemaps.init({ loadMaps: true }))
    .pipe($.sass().on('error', $.sass.logError))
    .pipe($.autoprefixer({ overrideBrowserslist: ['last 2 versions'] }))
    .pipe($.cssnano())
    .pipe($.sourcemaps.write('../maps'))
    .pipe(gulp.dest('./stylesheets'))
    .pipe(browserSync.stream())
}

function watch() {
  gulp.watch("source/data/**/*", data)
  gulp.watch("source/files/**/*", files)
  gulp.watch("source/icons/**/*", icons)
  gulp.watch("source/fonts/**/*", fonts)
  gulp.watch("source/icons/**/*", sprites)

  gulp.watch("**/*.php").on("change", browserSync.reload)
  
  gulp.watch("source/stylesheets/**/*.scss", css)
  gulp.watch("source/scripts/**/*.js", js).on("change", browserSync.reload)

  browserSync.init({
    browser: "google chrome",
    notify: false,
    proxy: "http://sexshoptodxs.local",
    // tunnel: "sexshoptodxs",
    // port: '80',
    // open: 'external',
    // host: 'todxs.localtunnel.me',
  })
}


exports.default = gulp.series(
  clean,
  sprites,
  data,
  files,
  icons,
  fonts,
  css,
  js,
  vendors,
  watch
)

// function images() {
//   return gulp
//     .src('source/images/**/*')
//     .pipe(
//       $.imagemin([
//         $.imagemin.gifsicle({ interlaced: true }),
//         $.imagemin.mozjpeg({ progressive: true }),
//         $.imagemin.optipng({ optimizationLevel: 5 })
//       ])
//     )
//     .pipe(gulp.dest('./assets/images'))
// }

// function imageclean(done) {
//   del('assets/images')
//   done()
// }

// function imagemin(done) {
//   images()
//   done()
// }

// exports.imagemin = imagemin
// exports.imageclean = imageclean