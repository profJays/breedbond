<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


//Routes for Breedbond
Route::get('/', 'BreedbondController@index')->name('landingpage');

//Routes for Users
Route::get('/users', 'UserController@index')->name('homepage');
Route::get('/SignUp', 'UserController@createUserForm');
Route::post('/SignUpUser', 'UserController@createUser')->name('newUser');
// Route::get('/view/{id}', 'StudentController@viewstudent')->name('studentviews');
// Route::get('/editstudent/{id}', 'StudentController@editStudent')->name('studentedit');
// Route::post('/updatestudent/{id}', 'StudentController@updateStudent')->name('studentupdate');
// Route::get('/delete/{id}', 'StudentController@deleteStudent')->name('studentdelete');

//Routes for Post
// Route::get('/posts', 'PostController@index')->name('posthome');
// Route::get('/addPost', 'PostController@addPost')->name('addPost');
// Route::post('/create', 'PostController@newpost')->name('newpost');
// Route::get('/view/{id}', 'PostController@viewpost')->name('postview');
// Route::get('/edit/{id}', 'PostController@editpost')->name('postedit');
// Route::get('/update/{id}', 'PostController@updatepost')->name('postupdate');
// Route::get('/delete/{id}', 'PostController@deletepost')->name('postdelete');
