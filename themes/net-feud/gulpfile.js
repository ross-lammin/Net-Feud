'use strict';

const taskGenerator = require('gulp_first10_frontend-toolbox');
const sitesettings = require('./gulp_settings');

(function () {
  const gulp = require('gulp');
  // const debug = require('gulp-debug');
  // Use this to debug pipes.
  // .pipe(debug({title: 'Streams open :'}))

  const paths = {};

  const TaskTemplate = {
    subtasks: [],
    pretasks: [],
    watch: {
      active: false,
      files: [sitesettings.watch.sass]
    },
    linting: {
      js: sitesettings.location.linting.js,
      sass: sitesettings.location.linting.sass
    },
    broswerConfig: function(root, port) {
      return {
        serveStatic: [root],
        open: "external",
        port: port,
        snippetOptions: {},
        files: [paths.devAssets.css, paths.devAssets.js]
      }
    }
  };

// Tasks
  const tasks = {
    'dev': {
      subtasks: ['moveAssets'],
      orderedTasks: ['F10ThemeJSLib', 'jsProcessing', 'sass'],
      watch: {
        active: true,
        files: [sitesettings.watch.sass, sitesettings.watch.js]
      },
      linting: {
        testSass: true
      },
      env: 'development'
    },
    'prepForRelease': {
      subtasks: ['combineMq', 'moveAssets'],
      orderedTasks: ['sass', 'jsProcessing'],
      watch: {
        active: false,
        files: [sitesettings.watch.sass, sitesettings.watch.js]
      },
      linting: {
        testSass: false
      },
      env: 'production'
    },
    'prepAssets': {
      subtasks: ['moveAssets'],
      orderedTasks: [],
      watch: {
        active: false,
        files: [sitesettings.watch.sass]
      },
      linting: {
        testSass: false
      }
    }
  };

  taskGenerator(gulp, tasks, TaskTemplate, sitesettings);

}());








