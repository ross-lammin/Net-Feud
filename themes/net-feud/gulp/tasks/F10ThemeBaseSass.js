module.exports = function (task, gulp, sitesettings, need, taskObj) {

  gulp.task('F10ThemeJSLib', function () {
    return require('first-ten-theme-javascript-library')(
      'F10', './', [
        'triggerAndTargetClassModifier',
        'exampleFunctionObject',
        'testtwo'
      ], 'prod', 'es5');
  });
};
