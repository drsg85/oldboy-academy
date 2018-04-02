const gulp = require("gulp");
const watch = require("gulp-watch");
const browserSync = require("browser-sync").create();

gulp.task("watch", function() {
    browserSync.init({
        server: {
            baseDir: "dist"
        },
        notify: {
            styles: {
                top: "auto",
                bottom: 0
            }
        }
    });

    // pug
    watch("./src/**/*.pug", function() {
        gulp.start("pugChanged");
    });

    // css
    watch("./src/sass/**/*.scss", function() {
        gulp.start("cssInject");
    });

    // js
    watch("./src/js/**/*.js", function() {
        gulp.start("jsChanged");
    });

    // wordpress

    // php
    watch("./wp/*.php", () => {
        gulp.start("copyPHP");
    });

    // order
    watch("./src/order.php", () => {
        console.log("order changed");
        return gulp.src("./src/order.php")
            .pipe(gulp.dest("C:/xampp/htdocs/OldBoyAcademy/"));
    });

    // css
    watch("./dist/styles.css", () => {
        gulp.start("copyCSS");
    });

    // js
    watch("./dist/*.js", () => {
        gulp.start("copyJS");
    });
});

gulp.task("pugChanged", ["pugRender"], function() {
    browserSync.reload();
});

gulp.task("cssInject", ["styles"], function() {
    gulp.src("./dist/styles.css")
        .pipe(browserSync.stream());
});

gulp.task("jsChanged", ["scripts"], function() {
    browserSync.reload();
});