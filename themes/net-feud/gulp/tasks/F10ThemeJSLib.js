module.exports = function (task, gulp, sitesettings, need, taskObj) {

  gulp.task('F10ThemeJSLib', function (done) {
    return require('first-ten-theme-javascript-library')(
      done,
      'F10', './', [
      'triggerAndTargetClassModifier',
      'exampleFunctionObject',
      'testtwo'
    ], 'prod', 'es5');
  });
};
