/* Dependencies */
var gulp = require('gulp'),
    sass = require('gulp-sass'),
    sourcemaps = require('gulp-sourcemaps'),
    autoprefixer = require('gulp-autoprefixer'),
    livereload = require('gulp-livereload');

/* Input and output */
var input = 'html/wp-content/themes/rise/assets/scss/**/*.scss',
    output = 'html/wp-content/themes/rise/assets/css';

var sassOptions = {
    errLogToConsole: true,
    outputStyle: 'expanded'
};

/* Compile SCSS and autoprefix */
gulp.task('styles', function () {
  return gulp
  .src(input)
  .pipe(sourcemaps.init())
  .pipe(sass(sassOptions).on('error', sass.logError))
  .pipe(autoprefixer({
      browsers: ['last 2 version', 'ios 6', 'android 4', 'IE 10', 'IE 11']
  }))
  .pipe(sourcemaps.write(''))
  .pipe(gulp.dest(output))
  .pipe(livereload());
});

/* Watch for changes */
gulp.task('watch', function() {
    livereload.listen();
    gulp.watch(input, ['styles'])
    gulp.on('change', function(event) {
      console.log('File ' + event.path + ' was ' + event.type + ', firing lasers!!!!');
    });
});

/* Default task, compile and watch */
gulp.task('default', ['styles', 'watch']);