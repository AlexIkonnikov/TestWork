const gulp = require("gulp");
const browserSync = require("browser-sync").create();

function serve() {
  browserSync.init({

      server: {
          baseDir: "./"
      }

  });
  gulp.watch("*.css").on("change", browserSync.reload);
  gulp.watch("*.html").on("change", browserSync.reload);
}

exports.serve = serve;


