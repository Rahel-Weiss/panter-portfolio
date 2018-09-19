"use strict";

const gulp = require("gulp");
const sass = require("gulp-sass");
const uglifycss = require("gulp-uglifycss");
const concat = require("gulp-concat");
const autoprefixer = require("gulp-autoprefixer");
const runSequence = require("run-sequence");
const del = require("del");

// Concatinate scss into one css file

gulp.task("sass", function() {
  return gulp
    .src("assets/style/*.scss")
    .pipe(sass().on("error", sass.logError))
    .pipe(concat("index.css"))
    .pipe(gulp.dest("assets/build/css"));
});

// Automatically prefix stylesheets

const autoprefixBrowsers = [
  "ie >= 10",
  "ie_mob >= 10",
  "ff >= 30",
  "chrome >= 34",
  "safari >= 7",
  "opera >= 23",
  "ios >= 7",
  "android >= 4.4",
  "bb >= 10"
];

gulp.task("prefix", function() {
  return gulp
    .src("assets/build/css/*.css")
    .pipe(autoprefixer(autoprefixBrowsers))
    .pipe(gulp.dest("assets/build"));
});

// Minify CSS stylesheet

gulp.task("css", function() {
  return gulp
    .src("assets/build/*.css")
    .pipe(
      uglifycss({
        maxLineLen: 80,
        uglyComments: true
      })
    )
    .pipe(gulp.dest("assets/build"));
});

// Concatinate Javascript

gulp.task("script", function() {
  return gulp
    .src("assets/js/*.js")
    .pipe(concat("script.min.js"))
    .pipe(gulp.dest("assets/build"));
});

// Clean output directory
gulp.task("clean", function(cb) {
  del([".tmp", "assets/build/*", "!build/.git"], { dot: true });
  cb();
});

// All style related tasks

gulp.task("style-sheets", gulp.series("sass", "prefix", "css"));

// Watch for chanches to folders

gulp.task("default", function() {
  gulp.watch("assets/style/*.scss", gulp.series("style-sheets"));
  gulp.watch("assets/js/*.js", gulp.series("script"));
});

// Run all the tasks for production

// const build = gulp.series("style-sheets", "script");
const all = gulp.series("clean", "style-sheets", "script");

// Build production files, the default task

gulp.task("build", all);
