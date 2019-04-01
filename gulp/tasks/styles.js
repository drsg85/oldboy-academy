const gulp = require("gulp");
const sass = require("gulp-sass");
const sassImporter = require("sass-module-importer");
const autoprefixer = require("gulp-autoprefixer");
const notify = require("gulp-notify");
const wait = require("gulp-wait");

gulp.task("styles", function() {
    return gulp.src("./src/sass/**/*.scss")
        .pipe(sass({ importer: sassImporter() }))
        .pipe(wait(100))
        .on("error", notify.onError(function(error) {
            return {
                title: "Styles",
                message: error.message
            };
        }))
        .on("error", function(error) {
            console.log(error.toString());
            this.emit("end");
        })
        .pipe(autoprefixer({
            browsers: ["last 2 versions"],
            cascade: false
        }))
        .pipe(gulp.dest("./dist"));
});