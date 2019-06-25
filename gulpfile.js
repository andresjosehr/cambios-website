'use strict';

var gulp      = require('gulp'),
    sass      = require('gulp-sass'),
    cssmin    = require('gulp-cssmin'),
    rename    = require('gulp-rename'),
    concat    = require('gulp-concat'),
    imagemin  = require('gulp-imagemin'),
    uglify    = require('gulp-uglify'),
    sourcemaps = require('gulp-sourcemaps'),
    prefix    = require('gulp-autoprefixer'),
    config    = require('./config.json');

console.log(config.css);

// Configure CSS task.
gulp.task('css', function () {
  return gulp.src(config.css)
    .pipe(sourcemaps.init())
    .pipe(sass.sync().on('error', sass.logError))
    .pipe(prefix('last 5 versions'))
    .pipe(cssmin())
    .pipe(concat('style.css', {newLine: ''}))
    .pipe(sourcemaps.write('.'))
    .pipe(gulp.dest('.'));
});

// Configure JS task.
gulp.task('js', function() {
  return gulp.src(config.js)
    // .pipe(uglify({mangle: false}))
    .pipe(concat('scripts.js', {newLine: ''}))
    // .pipe(rename({suffix: '.min'}))
    .pipe(gulp.dest('js'));
});

gulp.task('watch', function () {
  gulp.watch('sass/**/*.scss', ['css']);
  gulp.watch('js/main/main.js', ['js']);
  gulp.watch('js/main/functions.js', ['js']);
  gulp.watch('./config.json', [ 'css', 'js' ]);
});

gulp.task('default', ['css', 'js']);