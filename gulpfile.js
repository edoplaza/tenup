const { src, dest, watch } = require('gulp');
const changed = require('gulp-changed');
const sass = require('gulp-sass');
const autoprefixer = require('gulp-autoprefixer');
const minifyCSS = require('gulp-minify-css');
const babel = require('gulp-babel');
const uglify = require('gulp-uglify');
const rename = require('gulp-rename');
const browserSync = require('browser-sync').create();

require('dotenv').config();

function css() {
  return src(['./scss/*.scss'], { sourcemaps: true })
    .pipe(changed('./assets/css/'))
    .pipe(sass())
    .pipe(
      autoprefixer(
        'last 2 version',
        'safari 5',
        'ie 8',
        'ie 9',
        'opera 12.1',
        'ios 6',
        'android 4'
      )
    )
    .pipe(dest('./assets/css/'))
    .pipe(minifyCSS())
    .pipe(browserSync.reload({ stream: true }))
    .pipe(dest('./assets/css/'), { sourcemaps: true });
}

function js() {
  return src(['./js/*.js'])
    .pipe(
      changed('./assets/js/', {
        extension: '.min.js'
      })
    )
    .pipe(
      babel({
        presets: ['@babel/env']
      })
    )
    .pipe(
      rename({
        suffix: '.min'
      })
    )
    .pipe(uglify())
    .pipe(browserSync.reload({ stream: true }))
    .pipe(dest('./assets/js/'));
}

function browser() {
  browserSync.init({
    proxy: process.env.LOCALHOST,
    files: ['./**/*.php']
  });

  watch('./scss/**/*.scss', css).on('change', browserSync.reload);
  watch('./js/*.js', js).on('change', browserSync.reload);
}

exports.css = css;
exports.js = js;
exports.default = browser;
