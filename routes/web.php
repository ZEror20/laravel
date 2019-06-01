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

Route::get('tasks/create', 'Test\TasksController@create');
Route::post('tasks', 'Test\TasksController@store');

Route::resource('resource', 'TestController');

Route::get('error', function() {
  abort(403, 'You cannot do that!');
});

Route::get('file', function() {
  return response()->download('/home/zeror20/Desktop/love-pictures-7219.jpg', 'rose.jpg');
});

Route::group(['prefix' => 'test'], function() {
  Route::get('/', function() {
    return 'home';
  });

  Route::get('hello', function() {
    return 'hello';
  });

  Route::get('world', function() {
    return 'world';
  });
});
