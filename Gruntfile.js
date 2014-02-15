module.exports = function(grunt) {
  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),
    concat: {
      css: {
        src: 'css/scss/*.scss',
        dest: 'css/screen.css'
      }
    },
    // uglify: {
    //   options: {
    //     banner: '/*! <%= pkg.name %> <%= grunt.template.today("dd-mm-yyyy") %> */\n'
    //  },
    //   dist: {
    //     files: {
    //       'dist/nyx-cal.min.js': ['dist/nyx-cal.js']
    //     }
    //   }
    // },
    // mochaTest: {
    //   files: ['test/**/*.js']
    // },
    // jshint: {
    //   files: ['Gruntfile.js', 'src/**/*.js', 'test/**/*.js'],
    //   options: {
    //     globals: {
    //       jQuery: true,
    //       console: true,
    //       module: true,
    //       document: true
    //     }
    //   }
    // },
    sass: {
      dist: {
        files: {
          'css/styles.css': 'css/scss/styles.scss',
          'css/normalize.css': 'css/scss/normalize.scss'
        }
      }
    },
    watch: {
      html: {
        files: '*.html',
      },
      css: {
        files: 'css/scss/*.scss',
        tasks: ['sass'],
      },
      // js: {
      //   files: ['src/**/*.js', 'test/**/*.js'],
      //   tasks: ['default'],
      // },
       livereload: {
        options: {
          livereload: true
        },
        files: ['css/*.css']
      }
    }
  });

  // grunt.loadNpmTasks('grunt-contrib-uglify');
  // grunt.loadNpmTasks('grunt-browserify');
  // grunt.loadNpmTasks('grunt-contrib-jshint');
  // grunt.loadNpmTasks('grunt-mocha-test');
  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.loadNpmTasks('grunt-contrib-concat');
  grunt.loadNpmTasks('grunt-contrib-sass');
  // grunt.loadNpmTasks('grunt-mocha-test');
  // grunt.registerTask('test', ['jshint', 'mochaTest']);

  grunt.registerTask('default', ['concat', 'sass', 'watch']);

};
