import gulp from 'gulp';
import yargs from 'yargs';
import sass from 'gulp-sass';

const PRODUCTION = yargs.argv.prod;

export const styles = (done) => {
  return gulp.src('src/assets/scss/bundle.scss')
    .pipe(sass().on('error', sass.logError))
    .pipe(gulp.dest('dist.assets/css'));
}