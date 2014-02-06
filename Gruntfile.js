module.exports = function(grunt) 
{
	require('load-grunt-tasks')(grunt);

	grunt.initConfig({
		phpcs: {
			application: {
				dir: "phpokeapi/"
			},
			options: {
				bin: "phpcs",
				standard: "PHPCS"
			}
		},
		watch: {
			php: {
				files: ['phpokeapi/*.php'],
				tasks: ['phpcs'],
				options: {
					spawn: false
				}
			}
		}
	});

	grunt.registerTask('default', ['phpcs']);
	
}
