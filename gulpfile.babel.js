import gulp from 'gulp';
import yargs from 'yargs';
import sass from 'gulp-sass';
import cleanCSS from 'gulp-clean';
import gulpif from 'gulp-if';
import sourcemaps from 'gulp-sourcemaps';
import imagesmin from 'gulp-imagemin';
import del from 'del';
import webpack from 'webpack-stream';

const PRODUCTION = yargs.argv.prod;

const paths = {
  styles: {
    src: ['src/assets/scss/bundle.scss', 'src/assets/scss/admin.scss'],
    dest: 'dist/assets/css'
  },
  images: {
    src: 'src/assets/images/**/*.{jpg, jpeg, png, gif}',
    dest: 'dist/assets/images'
  },
  scripts: {
    src: 'src/assets/js/bundle.js',
    dest: 'dist/assets/js'
  },
  other: {
    src: ['src/assets/**/*', '!src/assets/{images,js,scss}', '!src/assets/{images,js,scss}/**/*'],
    dest: 'dist/assets'
  }
}
export const clean = () => {
  return del(['dist']);
}

export const styles = (done) => {
  return gulp.src(paths.styles.src)
    .pipe(gulpif(!PRODUCTION, sourcemaps.init()))
    .pipe(sass().on('error', sass.logError))
    .pipe(gulpif(PRODUCTION, cleanCSS({ compatibility: 'ie8' })))
    .pipe(gulpif(!PRODUCTION, sourcemaps.write()))
    .pipe(gulp.dest(paths.styles.dest));
}

export const images = () => {
  return gulp.src(paths.images.src)
    .pipe(gulpif(PRODUCTION, imagesmin()))
    .pipe(gulp.dest(paths.images.dest));
}

export const watch = () => {
  gulp.watch('src/assets/scss/**/*/scss', styles);
  gulp.watch(paths.images.src, images);
  gulp.watch(paths.other.src, copy);
}

export const copy = () => {
  return gulp.src(paths.other.src)
    .pipe(gulp.dest(paths.other.dest));
}

export const scripts = () => {
  return gulp.src(paths.scripts.src)
    .pipe(webpack({
      module: {
        rules: [
          {
            test: /\.js$/,
            use: {
              loader: 'babel-loader',
              options: {
                presets: ['@babel/preset-env']
              }
            }
          }
        ]
      },
      output: {
        filename: 'bundle.js'
      },
      devtool: !PRODUCTION ? 'inline-source-map' : false,
      mode: PRODUCTION ? 'production' : 'development'
    }))
    .pipe(gulp.dest(paths.scripts.dest));
}

export const dev = gulp.series(clean, gulp.parallel(styles, images, copy), watch);
export const build = gulp.series(clean, gulp.parallel(styles, images, copy));

export default dev;