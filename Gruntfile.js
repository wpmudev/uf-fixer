module.exports = function(grunt) {

    require('load-grunt-tasks')(grunt);

    grunt.initConfig({

        postcss: {
            options: {
                map: false,
                processors: [
                    require('autoprefixer')({
                        browsers: ['last 2 versions', 'ie 7', 'ios 6', 'android 4']
                    })
                ]
            },
            dist: {
                src: 'element-styles/**/*.css'
            }
        }

    });

    grunt.registerTask('default',['postcss']);

};