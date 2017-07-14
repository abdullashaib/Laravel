<?php



Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('courses', 'CourseController');
Route::resource('teachers', 'TeacherController');
Route::resource('students', 'StudentController');
Route::resource('parents', 'ParentsController');
Route::resource('payments', 'PaymentController');
Route::resource('studentrecords', 'StudentRecordController');

/*
Route::get('/students', 'StudentController@index');
Route::get('/students/create', 'StudentController@create');   
Route::get('/parents', 'ParentsController@index');  
Route::get('/parents/create', 'ParentsController@create');
Route::get('/parents/{parent}', 'ParentsController@show'); 
Route::get('/students/{student}', 'StudentController@show'); 
Route::get('/payments/create', 'PaymentController@create');
Route::get('/payments/{id}', 'PaymentController@show');
Route::post('/parents', 'ParentsController@store');
Route::post('/students', 'StudentController@store');
Route::post('/payments', 'PaymentController@store');
Route::post('/studentrecords', 'StudentRecordController@store');
Route::get('/teachers', 'TeacherController@index');
Route::get('/teachers/create', 'TeacherController@create');
Route::get('/courses', 'CourseController@index');
Route::get('/courses/create', 'CourseController@create');
Route::post('/courses', 'CourseController@store');
Route::get('/courses/{$id}/edit', 'CourseController@edit');
Route::post('/teachers', 'TeacherController@store');
Route::delete('/courses/{id}', 'CourseController@destroy');
*/
