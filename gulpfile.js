var gulp = require('gulp');
var sass = require('gulp-scss');

gulp.task('sass', function(){
    return gulp.src('scss/*.scss')
        .pipe(sass()) // Using gulp-sass
        .pipe(gulp.dest('/'))
});