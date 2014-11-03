// Basic Grunt configuration
module.exports = function(grunt) {

    // 1. All configuration goes here
    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),

        // Task settings here
        // Settings for the Sass task
        sass: {
            dist: {
                options: {
                    style: 'compressed'
                },
                files: {
                    'public/css/styles.css': 'public/sass/styles.scss'
                }
            }
        },
        // Grunt task Uglify
        uglify: {
            options: {
                banner: ''
            },
            target_1: {

                // Source file
                src: ['js/scripts.js'],

                // Minified new file
                dest: 'js/main.min.js'

            }
        },

        // Grunt task Imagemin
        imagemin: {
            dynamic: {
                files: [{
                    expand: true,
                    cwd: 'images-orig/',
                    src: ['**/*.{png,jpg,gif}'],
                    dest: 'images/'
                }]
            }
        }

    });

    // 3. Where we tell Grunt we plan to use this plug-in.
    grunt.loadNpmTasks('grunt-contrib-sass');
    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-contrib-imagemin');


    // 4. Where we tell Grunt what to do when we type "grunt" into the terminal.
    grunt.registerTask('default', ['sass', 'uglify', 'imagemin']);

};