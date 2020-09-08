let project__folder = '../';
let source__folder = 'frontend/web';
let fs = require('fs');

let path = {
	build: {
		css: project__folder + '/css/',
		js: project__folder + '/js/',
		fonts: project__folder + '/fonts/',
	},
	src: {
		css: source__folder + '/scss/style.scss',
		js: source__folder + '/js/script.js',
		fonts: source__folder + '/fonts/*.ttf',
	},
	watch: {
		css: source__folder + '/scss/**/*.scss',
		js: source__folder + '/js/**/*.js',
	},
	clean: {
		css: project__folder + '/css/.css',
		js: project__folder + '/js/.js',
	},
};

let { src, dest } = require('gulp'),
	gulp = require('gulp'),
	fileinclide = require('gulp-file-include'),
	del = require('del'),
	scss = require('gulp-sass'),
	autoprefixer = require('gulp-autoprefixer'),
	group_media = require('gulp-group-css-media-queries'),
	clean_css = require('gulp-clean-css'),
	rename = require('gulp-rename'),
	uglify = require('gulp-uglify-es').default,
	babel = require('gulp-babel'),
	ttf2woff = require('gulp-ttf2woff'),
	ttf2woff2 = require('gulp-ttf2woff2'),
	fonter = require('gulp-fonter');

function css() {
	return src(path.src.css)
		.pipe(
			scss({
				outputStyle: 'expanded',
			})
		)
		.pipe(group_media())
		.pipe(
			autoprefixer({
				overrideBrowserlist: ['last 5 versions'],
				cascade: true,
			})
		)
		.pipe(dest(path.build.css))
		.pipe(clean_css())
		.pipe(
			rename({
				extname: '.min.css',
			})
		)
		.pipe(dest(path.build.css));
}

function js() {
	return src(path.src.js)
		.pipe(fileinclide())
		.pipe(
			babel({
				presets: ['@babel/env'],
			})
		)
		.pipe(dest(path.build.js))
		.pipe(uglify())
		.pipe(
			rename({
				extname: '.min.js',
			})
		)
		.pipe(dest(path.build.js));
}


gulp.task('otf2ttf', function () {
	return src([source__folder + '/fonts/*.otf'])
		.pipe(
			fonter({
				formats: ['ttf'],
			})
		)
		.pipe(dest(source__folder + '/fonts/'));
});

function fonts() {
	src(path.src.fonts)
		.pipe(ttf2woff())
		.pipe(dest(path.build.fonts));
	return src(path.src.fonts)
		.pipe(ttf2woff2())
		.pipe(dest(path.build.fonts));
}

// Импорт Шрифтов в scss
function fontsStyle(params) {

	let file_content = fs.readFileSync(source__folder + '/scss/fonts.scss');
	if (file_content == '') {
		fs.writeFile(source__folder + '/scss/fonts.scss', '', cb);
		return fs.readdir(path.build.fonts, function (err, items) {
			if (items) {
				let c_fontname;
				for (var i = 0; i < items.length; i++) {
					let fontname = items[i].split('.');
					fontname = fontname[0];
					if (c_fontname != fontname) {
						fs.appendFile(source__folder + '/scss/fonts.scss', '@include font("' + fontname + '", "' + fontname + '", "400", "normal");\r\n', cb);
					}
					c_fontname = fontname;
				}
			}
		})
	}
}

function cb() { }

function watchFiles(params) {
	gulp.watch([path.watch.css], css);
	gulp.watch([path.watch.js], js);
}

function clean(params) {
	return del([path.clean.css], css), del([path.clean.js], js);
}

let build = gulp.series(clean, gulp.parallel(js, css, fonts), fontsStyle);
let watch = gulp.parallel(build, watchFiles);


exports.fonts = fonts;
exports.fontsStyle = fontsStyle;
exports.js = js;
exports.css = css;
exports.build = build;
exports.watch = watch;
exports.default = watch;
