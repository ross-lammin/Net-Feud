'use strict';
module.exports = function(grunt){

	grunt.initConfig({
		pkg: grunt.file.readJSON('package.json'),

		// Watch Task
		watch: {
			css: {
				files: 'library/sass/**/*.scss',
				tasks: ['sass:dev', 'postcss:main', 'postcss:critical']
			},
			js: {
				files: 'library/js/*.js',
				tasks: ['jshint']
			},
			styleguide: {
				files: ['library/sass/**/*.scss', 'library/styleguide/**/*.scss', 'library/styleguide/*.md', 'library/styleguide/*.hbs'],
				tasks: ['sass:dev', 'sass:styleguide', 'clean:styleguide', 'sassdown']
			}
		},

		// Sass
		sass: {
			dev: {
				options: {
					style: 'expanded'
				},
				files: {
					'library/css/style.css' : 'library/sass/style.scss',
					'library/css/critical.css' : 'library/sass/critical.scss'
				}
			},
			prod: {
				options: {
					style: 'compressed',
					sourcemap: 'none'
				},
				files: {
					'library/css/style.css' : 'library/sass/style.scss',
					'library/css/critical.css' : 'library/sass/critical.scss'
				},
			},
			critical: {
				options: {
					style: 'compressed',
					sourcemap: 'none'
				},
				files: {
					'library/css/critical.css' : 'library/sass/critical.scss'
				}
			},
			styleguide: {
				options: {
					style: 'expanded',
					sourcemap: 'none'
				},
				files: {
					'library/styleguide/style.css' : 'library/styleguide/style.scss',
				}
			}
		},

		// PostCSS
		postcss: {
			main: {
				options: {
					processors: [
						require('autoprefixer')({browsers: ['last 5 versions']})
					]
				},
				dist: {
					src: 'library/css/style.css',
					dest: 'library/css/style.css'
				}
			},
			critical: {
				options: {
					processors: [
						require('autoprefixer')({browsers: ['last 5 versions']})
					]
				},
				dist: {
					src: 'library/css/critical.css',
					dest: 'library/css/critical.css'
				}
			}
		},

		// Js Hint
		jshint: {
		  files: ['library/js/scripts.js'],
		  options: {
		    globals: {
		      jQuery: true
		    }
		  }
		},

		// Uglify
		uglify: {
    	my_target: {
      	files: {
        	'library/js/min/scripts.min.js': ['library/js/*.js']
      	}
    	}
  	},

  	// Sassdown
		sassdown: {
		  styleguide: {
	      options: {
          assets: [
          	'library/css/style.css'
          ],
          template: 'library/styleguide/template.hbs',
          theme: 'library/styleguide/style.css',
          readme: 'library/styleguide/readme.md',
          excludeMissing: true
	      },
	      files: [{
          expand: true,
          cwd: 'library/sass',
          src: ['**/*.scss'],
          dest: 'styleguide/'
	      }]
		  }
		},

		// Clean
		clean: {
			sasscache: {
				src: ['.sass-cache']
			},
  		styleguide: {
    		src: ['styleguide']
  		}
		}

	});


	// Load Task Runners
	grunt.loadNpmTasks('grunt-contrib-watch');
	grunt.loadNpmTasks('grunt-contrib-sass');
	grunt.loadNpmTasks('grunt-postcss');
	grunt.loadNpmTasks('grunt-contrib-jshint');
	grunt.loadNpmTasks('grunt-contrib-uglify');
	grunt.loadNpmTasks('grunt-sassdown');
	grunt.loadNpmTasks('grunt-contrib-clean');


	// Register Tasks
	grunt.registerTask('dev', ['watch']);
	grunt.registerTask('prod', ['sass:prod', 'postcss:main', 'uglify', 'clean:sasscache', 'sassdown']);
	grunt.registerTask('critical', ['sass:critical', 'postcss:critical']);
	
	// Style Guide Tasks
	grunt.registerTask('sg-dev', ['watch:styleguide']);
	grunt.registerTask('sg-update', ['sass:dev', 'sass:styleguide', 'clean:styleguide', 'sassdown']);


};