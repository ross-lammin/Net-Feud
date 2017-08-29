var sassdev = function (task, gulp, sitesettings, need, taskObj) {
  'use strict';

  //var debug = require('gulp-debug');


  var taskDetails = taskObj[global.process.argv[2]],
    enableSassLint = taskDetails.linting.testSass;

  var location = sitesettings.location,
    shouldstream = true;


  var sassOptions = {
    includePaths: ['node_modules/first-ten-theme-sass-base-library/'],
    precision: 3,
    outputStyle: 'expanded'
  };


  var processors = [
    need.stylelint(location.linting.sass),
    need.reporter({
      clearMessages: true,
      throwError: true
    })
  ];


  gulp.task('sass', function () {
    return gulp.src(location['stylessrc'] + '/' + location['csssource'])
      //.pipe(need.sourcemaps.init())
      .pipe(need.sassGlob())
      //.pipe(need.changed(location['cssdest']))
      //.pipe(need.gulpif(enableSassLint, need.postcss(processors, {syntax: need.syntax_scss})))
      .pipe(need.sass(sassOptions))
      //.pipe(need.sourcemaps.write('.'))
      .pipe(need.rename(location['cssoutput']))
      .pipe(gulp.dest(location['cssdest']))
      .pipe(need.gulpif(shouldstream, need.bs.stream()))
      .on('end', function () {
        console.log(need.colors.inverse.green('----------- DEV sass files changed -----------'));
      });
  });
};

module.exports = sassdev;