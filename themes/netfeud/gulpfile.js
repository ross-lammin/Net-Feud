var gulp     = require('gulp');
var sass     = require('gulp-sass');



gulp.task('styles', function() {
    gulp.src('library/sass/**/**/*.scss')
        .pipe(sass().on('error', sass.logError))
        .pipe(gulp.dest('library/css'))
});

//Watch task css
gulp.task('dev',function() {
    gulp.watch('library/sass/my-files/**/*.scss',['styles']);
    gulp.watch('library/sass/pre-files/**/*.scss',['styles']);
    gulp.watch('library/sass/normalize.scss',['styles']);
});


