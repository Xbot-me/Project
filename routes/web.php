<?php

Route::get('/','CoursesController@index');

Route::get('/about','CoursesController@about');

Route::get('/courses','CoursesController@courses');

Route::get('/contact','CoursesController@contact');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
