var gulp = require('gulp');
var plumber = require('gulp-plumber');
var templateCache = require('gulp-angular-templatecache');
var uglify = require('gulp-uglify');
var concat = require('gulp-concat');
var rev = require('gulp-rev');
var replace = require('gulp-replace');
//var data = require('gulp-data');
var sourcemaps = require('gulp-sourcemaps');
//var gutil = require('gulp-util');
//var es = require('event-stream');

// gulp.task('javascript', function() {
//   gulp.src('public/components/js/*.js')
//     .pipe(plumber())
//     .pipe(sourcemaps.init())
//     .pipe(concat('all.js'))
//     .pipe(sourcemaps.write('public/components/js'))
//     .pipe(gulp.dest('public/components/js'));
// });

gulp.task('default', function() {
  return gulp.src('public/js/*.js')
    .pipe(plumber())
    .pipe(sourcemaps.init())
    .pipe(concat('all.min.js'))
    .pipe(uglify())
    .pipe(sourcemaps.write('.'))
    .pipe(gulp.dest('public/js/dist'));
});

gulp.task('cachebust', ['default'], function() {
  return gulp.src('public/js/dist/*.min.js')
    .pipe(plumber())
    .pipe(rev())
    .pipe(rev.manifest())
    .pipe(gulp.dest('public/js/dist'));
});

gulp.task('cachebust-replace', ['cachebust'], function() {
  //var revs = require('./public/js/dist/rev-manifest.json');
  return gulp.src('public/app/views/*.{php,html}')
    .pipe(plumber())
    .pipe(Object.keys(revs).forEach(function(element, index, array) {
      replace(element, 'all-.js');
    }))
    .pipe(gulp.dest('public/js/dist'));
});
//
// gulp.task('default', function() {
//   return gulp.src('public/components/templates/**/*.html')
//     .pipe(plumber())
//     .pipe(templateCache())
//     .pipe(gulp.dest('public/js'));
// });

gulp.task('watch', function() {
  gulp.watch('public/js/*.js', ['cachebust']);
});
