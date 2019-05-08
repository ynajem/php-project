module.exports = function(grunt) {
  // pkg: grunt.file.readJSON('package.json'),
  const sassImp = require('node-sass');
  // Project configuration.
  grunt.initConfig({

    // Copy files to their proper destinations.
    copy: {
      js: {
        expand:true, cwd: 'node_modules', flatten: true, nonull:true,
        src: [
          'popper.js/dist/umd/popper.min.js',
          'jquery/dist/jquery.slim.min.js',
          'bootstrap/dist/js/bootstrap.min.js',
        ],
        dest: 'js/'
      },
      css: {
        expand:true, cwd: 'node_modules', flatten: true, nonull:true,
        src: [
          'font-awesome/css/font-awesome.min.css',
          'bootstrap/dist/css/bootstrap.min.css',
          'bootstrap/dist/css/bootstrap.min.css.map',
        ],
        dest: 'css/'
      },
      fonts: {
        expand:true, cwd: 'node_modules', flatten: true, nonull:true,
        src: [
          'font-awesome/css/font-awesome.min.css',
          'bootstrap/dist/css/bootstrap.min.css',
          'bootstrap/dist/css/bootstrap.min.css.map',
        ],
        dest: 'css/'
      },
      plugins: {
        files: [
          {src:['quill/dist/*'],dest:'plugins/quill', expand: true, cwd: 'node_modules', flatten: true, nonull: true},
          {src:['codemirror/lib/*'],dest:'plugins/codemirror', expand: true, cwd: 'node_modules', flatten: true, nonull: true},
          {src: ['bootstrap-tagsinput/dist/*'],dest:'plugins/tagsinput', expand: true, cwd: 'node_modules', flatten: true, nonull: true},
        ]
      }
    },

    // Configuration of uglify.
    uglify: {
      options: {
        banner: '/*! This script created by Najem UNESS */\n'
      },
      build: {
        src: 'js/app.js',
        dest: 'js/app.min.js'
      }
    },
    sass: {
      options: {
        // sourcemap: 'none',
        implementation: sassImp,
      },
      main: {
        files: {
          'css/layout.css':'sass/layout.scss',
          'css/main.css':'sass/main/main.scss'
        }
      },
      dashboard: {
        files: {
          'css/dashboard.css':'sass/dashboard/main.scss'
        }
      },
      bootstrap : {
        files: {'css/bootstrap.css':'sass/bootstrap/main.scss'}
      }
    },
    watch: {
      main: {
        files: ['sass/main/*.scss','sass/main/*/*.scss'],
        tasks: ['sass:main'],
      },
      dashboard: {
        files: ['sass/dashboard/*.scss','sass/dashboard/*/*.scss'],
        tasks: ['sass:dashboard'],
      },
      bootstrap: {
        files: ['node_modules/bootstrap/scss/*.scss','sass/bootstrap/*.scss'],
        tasks: ['sass:bootstrap'],
      },
      scripts: {
        files: 'js/app.js',
        tasks: ['uglify'],
      }
    }
  });

  // Load the plugin that provides the tasks.
  grunt.loadNpmTasks('grunt-contrib-uglify');
  grunt.loadNpmTasks('grunt-contrib-copy');
  grunt.loadNpmTasks('grunt-sass');
  grunt.loadNpmTasks('grunt-contrib-watch');
  // Default task(s).
  grunt.registerTask('default', ['copy']);

  // Tasks
  grunt.registerTask('init', ['copy']);


};
