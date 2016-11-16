var gulp = require('gulp');
var gulpwatch = require('./gulp/gulp-watch');
var uglify = require('gulp-uglify');
var concat = require('gulp-concat');
var config = require('./gulp/config');

gulp.task('default', function () {
    gulp.src('/webroot/js/*.js')
        .pipe(concat('/js/app.js'))
        .pipe(uglify())
        .pipe(gulp.dest('/webroot/js/app/'));
});