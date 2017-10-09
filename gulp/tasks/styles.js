const gulp = require("gulp");
const sass = require("gulp-sass");
const sassImporter = require("sass-module-importer");
const autoprefixer = require("gulp-autoprefixer");
const notify = require("gulp-notify");

gulp.task("styles", function() {
    return gulp.src("./src/sass/**/*.scss")
        .pipe(sass({ importer: sassImporter() }))
        .on("error", notify.onError(function(error) {
            return {
                title: "Styles",
                message: error.message
            };
        }))
        .pipe(autoprefixer({
            browsers: ["last 2 versions"],
            cascade: false
        }))
        .pipe(gulp.dest("./dist"));
});