<?php

Route::get('/','HomeController@index');

Route::get('/about','HomeController@about');

Route::get('/courses','CoursesController@courses');

Route::get('/contact','HomeController@contact');

Route::get('/course_info','CoursesController@info');

Route::get('/instructors','CoursesController@instructor');





Auth::routes();


Route::get('/profile', 'CoursesController@instructor');


Route::group(['prefix' => 'dashboard'], function () {
    Voyager::routes();
});
