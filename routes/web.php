<?php

Route::get('/','CoursesController@index');

Route::get('/about','CoursesController@about');

Route::get('/courses','CoursesController@courses');

Route::get('/contact','CoursesController@contact');

Route::get('/course_info/{id}','CoursesController@info');

//Route::get('/instructors','CoursesController@instructor');

Route::get('/profile/{id}', 'CoursesController@instructor');

Route::post('/enroll', 'CoursesController@store' );

Route::get('/message/{id}', 'CoursesController@message');

Route::get('/messages/{id}', 'CoursesController@ajaxget');

Route::post('/message', 'CoursesController@messag');

Route::post('/getmsg','CoursesController@messages');

Auth::routes();





Route::group(['prefix' => 'dashboard'], function () {
    Voyager::routes();
});
