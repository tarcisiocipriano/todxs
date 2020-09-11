const { src, dest } = require( 'gulp' )

data = function() {
  return src("source/data/**/*").pipe(dest("./assets/data"))
}

files = function() {
  return src("source/files/**/*").pipe(dest("./assets/files"))
}

icons = function() {
  return src("source/icons/**/*").pipe(dest("./assets/icons"))
}

fonts = function() {
  return src("source/fonts/**/*").pipe(dest("./assets/fonts"))
}

module.exports = { data, files, icons, fonts }