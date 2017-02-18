var gulp = require('gulp'),
    concat = require('gulp-concat'),
    uglify = require('gulp-uglify');

gulp.task('scripts', function() {
  return gulp.src(
      ['./dev/app/*.js'],
      ['./dev/components/*.js']
    )
    .pipe(concat('bundle.min.js'))
    .pipe(uglify())
    .pipe(gulp.dest('./assets/js/'));
});
