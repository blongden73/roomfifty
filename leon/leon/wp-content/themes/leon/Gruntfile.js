module.exports = function(grunt) {

  grunt.initConfig({
    'sftp-deploy': {
        build: {
        auth: {
          host: 'roomfifty.com',
          port: 22,
          authKey: 'key1'
        },
        src: 'build',
        dest: '/home/room41446669654/html/wp-content/themes/leon',
        concurrency: 4,
        progress: true
        }
    },
    sass: {
    	dist: {
    		files: {
    			'style/style.css' : 'style/style.scss'
    		}
    	}
    },

    postcss: {
      options: {
        map: true,
        processors: [
          require('pixrem')(),
          require('autoprefixer')({browsers: 'last 2 versions'}),
          require('cssnano')()
        ]
      },
      dist: {
        src: 'build/*.css'
      }
    },

    copy: {
       main: {
             expand: true,
             cwd: 'style',
             src: 'style.css',
             dest: 'build',
       },
       static: {
             expand: true,
             cwd: 'static',
             src: '**/*.php',
             dest: 'build',
       },
       deploy: {
             expand: true,
             cwd: 'build',
             src: 'style.css',
             dest: '',
        }
    },

    'compile-handlebars': {
        anyArray: {
          files: [{
            src: ['fixtures/template.handlebars', 'fixtures/sale.handlebars', 'fixtures/special.handlebars', 'fixtures/product.handlebars'],
            dest: ['static/allproducts.php', 'static/sale.php', 'static/special.php', 'static/product.php']
          }],
          postHTML: 'fixtures/footer.html',
          templateData: 'data/allRoomfifty.json'
        }
    },

    uglify: {
        options: {
          mangle: false
        },
        my_target: {
          files: {
            'build/js/main.js': ['js/main.js']
          }
        }
    },

    clean: ['static'],

    watch: {
			css: {
				files: '**/*.scss',
				tasks: ['sass', 'copy', 'postcss']
			}
	    }
  });

  grunt.loadNpmTasks('grunt-sass');
  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.loadNpmTasks('grunt-contrib-copy');
  grunt.loadNpmTasks('grunt-postcss');
  grunt.loadNpmTasks('grunt-contrib-uglify');
  grunt.loadNpmTasks('grunt-sftp-deploy');
  grunt.loadNpmTasks('grunt-compile-handlebars');
  grunt.loadNpmTasks('grunt-contrib-clean');
  grunt.registerTask('default', ['sass', 'watch']);
  grunt.registerTask('compile', ['uglify', 'copy', 'postcss']);
  grunt.registerTask('make', ['clean', 'compile-handlebars', 'copy']);
  grunt.registerTask('deploy', ['make','compile','sftp-deploy']);
};
