module.exports = function(grunt) 
{

	require('load-grunt-tasks')(grunt);

	grunt.initConfig({

		phpcs: {
			application: {
				dir: "lib/"
			},
			options: {
				bin: "phpcs",
				standard: "PSR2"
			}
		},


		watch: {
			php: {
				files: ['lib/*.php'],
				tasks: ['phpcs'],
				options: {
					spawn: false
				}
			}
		}


	});

	grunt.registerTask('default', ['phpcs']);

}