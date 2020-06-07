const gulp = require("gulp");
const sass = require("gulp-sass");
const autoprefixer = require('gulp-autoprefixer');

gulp.task("style", () => {
    return gulp
        .src("./sass/style.scss")
        .pipe(sass().on("error", sass.logError))
        .pipe(autoprefixer({
            cascade: false,
            overrideBrowserslist:  ['last 6 versions']
        }))
        .pipe(gulp.dest("./"));
});

gulp.task("default", () => {
    gulp.watch("./sass/**/*.scss", gulp.parallel("style"));
});