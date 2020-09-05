let project__folder = '../..';
let source__folder = 'frontend/web';

let path = {
	build: {
		css: project__folder + '/css/',
		js: project__folder + '/js/',
	},
	src: {
		css: source__folder + '/scss/style.scss',
		js: source__folder + '/js/script.js',
	},
	watch: {
		css: source__folder + '/scss/**/*.scss',
		js: source__folder + '/js/**/*.js',
	},
	clean: {
		css: project__folder + '/css/.css',
		js: project__folder + '/js/',
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
	babel = require('gulp-babel');

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

function watchFiles(params) {
	gulp.watch([path.watch.css], css);
	gulp.watch([path.watch.js], js);
}

function clean(params) {
	return del([path.clean.css], css), del([path.clean.js], js);
}

let build = gulp.series(clean, gulp.parallel(js, css));
let watch = gulp.parallel(build, watchFiles);

exports.js = js;
exports.css = css;
exports.build = build;
exports.watch = watch;
exports.default = watch;
