(function () {
  const gulp = require('gulp');
  //const debug = require('gulp-debug');
  // Use this to debug pipes.
  // .pipe(debug({title: 'Streams open :'}))

  const need = require('./gulp/gulp_dependencies');
  const sitesettings = require('./gulp/gulp_settings');


  // This task simply displays information about the other tasks available.
  //gulp.task('default', gulp.parallel('tasklist'));

  // Bundle tasks together.

  //gulp.task('test', gulp.parallel('lintJS'));

  //gulp.task('production', gulp.parallel('sassprod', 'imagemin', 'iconify'));

  const TaskTemplate = {
    subtasks: [],
    pretasks: [],
    watch: {
      active: false,
      files: [sitesettings.watch.sass]
    },
    taskData: {
      proxy: sitesettings.siteurl
    },
    linting: {
      js: sitesettings.location.linting.js,
      sass: sitesettings.location.linting.sass
    },
    browserSync: false,
    callbackFn: function() {
      console.log(this.subtasks);
      console.log('Callback');
    },
    testmethod: function () {
      console.log('this is a test!');
    },
    testprop: {
      hello: true
    }
  };

// Tasks
  const tasks = {
    'dev': {
      subtasks: ['kss'],
      pretasks: ['F10ThemeJSLib', 'sass'],
      watch: {
        active: false,
        files: [sitesettings.watch.sass]
      },
      linting: {
        testSass: true
      },
      browserSync: true,
      callbackFn: function () {
      },
      taskData: {
        proxy: sitesettings.siteurl
      }
    }
  };

  var tasksooj = {};

  // Rebuild the task object using the template as a base for each item.
  (function(tasksooj, TaskTemplate) {
    Object.keys(tasks).forEach(function(taskname) {

      var newTaskObj = Object.create(TaskTemplate);
      tasksooj[taskname] = Object.assign(newTaskObj, tasks[taskname]);
    });
  })(tasksooj, TaskTemplate);

  function genTasks(task, subtasks) {
    task[subtasks].forEach(function (task) {
      getTask(task, gulp, sitesettings, need, tasksooj);
    });
  }

  // This function pulls the tasks in from their separate files and passes the configuration.
  function getTask(task, gulp, sitesettings, need, tasksooj) {
    if (task !== '' && typeof task === 'string') {
      let livetask = require('./gulp/tasks/' + task);
      livetask(task, gulp, sitesettings, need, tasksooj);
    }
  }

  // console.log(JSON.stringify(tasksooj, null, '\t'));
  // console.log(JSON.stringify(tasksooj.dev.testmethod(), null, '\t'));

  // Only get the task needed, this is gathered from the global object. Arg 2 should always be the task name
  // passed from the original execution.
  var masterTaskName = global.process.argv[2];
  var masterTaskObj = tasks[masterTaskName];

  // Generate both sets of tasks ready for use.
  genTasks(masterTaskObj, 'pretasks');
  genTasks(masterTaskObj, 'subtasks');

  gulp.task(masterTaskName, gulp.series(masterTaskObj.pretasks, masterTaskObj.subtasks), function () {

    if (masterTaskObj.watch.active) {
      gulp.watch([masterTaskObj.watch.files], masterTaskObj.subtasks, masterTaskObj.callbackFn());
    }
    if (masterTaskObj.browserSync) {
      need.bs.reload;
    }
  });

  // Generate all the simple low level tasks.
  // var allTasks = simple_task_list.forEach(function (task) {
  //   getTask(task, gulp, sitesettings, need, tasksooj);
  // });
}());
