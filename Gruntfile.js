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
                    cwd: 'public/img-orig/',
                    src: ['**/*.{png,jpg,gif}'],
                    dest: 'public/img/'
                }]
            }
        },

        // Watch
        watch: {
            sass: {
                files: ['public/sass/**/*.scss'],
                tasks: ['sass'],
            },
            uglify: {
                files: ['public/js/scripts.js'],
                tasks: ['uglify']
            },
            imagemin: {
                files: ['public/img-orig/*.{png,jpg,gif}'],
                tasks: ['imagemin']
            },
            livereload: {
                options: {
                    livereload: true
                },
                files: [
                    'app/views/**/*.php', '/public/css/*.css'
                ]
            }

        },






    });

    // 3. Where we tell Grunt we plan to use this plug-in.
    grunt.loadNpmTasks('grunt-contrib-sass');
    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-contrib-imagemin');
    grunt.loadNpmTasks('grunt-contrib-watch');


    // 4. Where we tell Grunt what to do when we type "grunt" into the terminal.
    grunt.registerTask('default', ['watch']);

};