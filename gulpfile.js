const gulp          = require('gulp');
const sass          = require("gulp-sass");
const autoprefixer  = require('gulp-autoprefixer');
const cssmin        = require('gulp-cssmin');
const shorthand     = require('gulp-shorthand');
const purgecss      = require('gulp-purgecss')
const babel         = require('gulp-babel');

const dir = {
  css: {
    in: './assets/scss/**/*.+(scss|sass)',
    out: './assets/css/'
  },
  js: {
    in: './assets/babel/**/*.js',
    out: './assets/js/'
  },
};

function scss() {
  return (
    gulp.src(dir.css.in)
      .pipe(sass())
      .on("error", sass.logError)
      .pipe(autoprefixer())
      .pipe(shorthand())
      .pipe(cssmin({removeDuplicateRules: true}))
      .pipe(gulp.dest(dir.css.out))
    );
}

function js() {
  return (
    gulp.src([
      //'node_modules/babel-polyfill/dist/polyfill.js',
      dir.js.in
      ])
      .pipe(babel({presets: ['@babel/env']}))
      .pipe(gulp.dest(dir.js.out))
  );
}

function watch(cb) {
  gulp.watch(dir.css.in, scss);
  gulp.watch(dir.js.in, js);
  cb();
}

exports.scss        = scss;
exports.js            = js;
exports.default = watch
