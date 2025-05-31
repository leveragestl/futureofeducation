// webpack.mix.js

let mix = require('laravel-mix')

mix
	.setPublicPath('dist')
	.js('src/js/index.js', 'dist/js/main.bundle.js')
	.sass('src/scss/global.scss', 'dist/css/global.css')
	.options({
		processCssUrls: false,
		postCss: [
			require('tailwindcss'),
			require('autoprefixer'),
		],
    autoprefixer: {
      options: {
        browsers: [
          'last 6 versions',
        ]
      }
    }
	})
	.setResourceRoot('../')
	.sourceMaps(false, 'source-map')
	// Browsersync
	.browserSync({
    files: ["**/*.php", "dist/css/*.css", "dist/js/*.js"],
    port: 7000,
    proxy: 'https://futureofeducation.local/',
    host: 'futureofeducation.local',
    open: false,
    reloadOnRestart: true,
    notify: false,
    online: false,
    "https": {
      "key": '/Applications/MAMP/Library/OpenSSL/certs/futureofeducation.local.key',
      "cert": '/Applications/MAMP/Library/OpenSSL/certs/futureofeducation.local.crt'
    }
	})