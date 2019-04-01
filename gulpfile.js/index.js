'use strict';

    // "browser-sync": "^2.26.3",
    // "gulp-autoprefixer": "^4.0.0",
    // "gulp-notify": "^3.0.0",
    // "gulp-rename": "^1.2.2",
    // "webpack-stream": "^4.0.3"

    // "gulp-wait": "0.0.2",
    // "jquery": "^3.2.1",

const gulp = require('gulp');
const pug = require('gulp-pug');
const sass = require('gulp-sass');
const server = require('browser-sync').create();

const dirs = {
  pug: './src/*.pug',
  dist: './dist',
  scss: './src/sass/**/*.scss',
  styles: './src/sass/styles.scss',
};

const webpackConfig = {
  mode: 'production',
  entry: {
      main: "./src/js/main.js",
      course: "./src/js/course.js",
      models: "./src/js/models.js",
      "404": "./src/js/404.js",
      policy: "./src/js/policy.js",
  },
  output: {
      filename: "[name].js"
  },
  module: {
      loaders: [{
          loader: "babel-loader",
          query: {
              presets: ["es2015"]
          },
          test: /\.js$/,
          exclude: /node_modules/
      }]
  },
};

/**
 * Render html files from pug files
 */
let pugRender = () => (
  gulp.src(dirs.pug)
    .pipe(pug())
    .pipe(gulp.dest(dirs.dist))
);

/**
 * Render styles from scss modules
 */
let styles  = () => (
  gulp.src(dirs.styles)
    .pipe(sass())
    .pipe(gulp.dest(dirs.dist))
    .pipe(server.reload({stream: true}))
);

/**
 * Runs browserSync server
 * @param {Function} done callback function
 */
let serverInit = (done) => {
  server.init({
    server: {
      baseDir: dirs.dist,
    },
    port: 3000,
  });
  done();
};


/**
 * Reloads browserSync server
 * @param {Function} done callback function
 */
let serverReload = (done) => {
  server.reload();
  done();
};

/**
 * Watches files for changes
 */
let watchFiles = () => {
  gulp.watch(dirs.pug, gulp.series(pugRender, serverReload));
  gulp.watch(dirs.scss, gulp.series(styles));
};


const watch = gulp.parallel(watchFiles, serverInit);

exports.pugRender = pugRender;
exports.styles = styles;
exports.watch = watch;
