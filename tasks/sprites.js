const {
src, dest, series
}   = require('gulp'),
$   = require('gulp-load-plugins')(),
del = require('del')

function sprites() {
  return src('source/icons/nav-icons/*.svg')
    .pipe(
      $.svgSprite({
        mode: {
          css: {
            sprite: 'sprite-nav.svg',
            render: {
              css: { template: 'source/templates/template-sprite-nav.css' },
            },
          },
        },
      })
    )
    .pipe(dest('temp'));
}

function moveSpritesCss() {
  return src('temp/css/*.css')
    .pipe($.rename('_sprite.scss'))
    .pipe(dest('source/stylesheets/vendors'));
}

function moveSpritesSvg() {
  return src('temp/css/*.svg').pipe(dest('assets/icons/sprites'));
}

function cleanTemp() {
  return del('temp')
}

module.exports = series(
  sprites, moveSpritesCss, moveSpritesSvg, cleanTemp
)
