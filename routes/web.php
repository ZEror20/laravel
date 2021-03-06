<?php
use Illuminate\Http\Request;

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

Route::get('loop', 'ViewsController@loop');
Route::get('foreach/{limit}', 'ViewsController@foreach');
Route::get('if/{number}', 'ViewsController@if');
Route::get('each', 'ViewsController@each');
Route::get('include', 'ViewsController@include');

Route::post('request', function(Request $request) {
  return view('request')->with('request', $request);
});

Route::get('form', function() {
  return view('form');
});

Route::get('pagination', function() {
  return view('posts.index', ['posts' => DB::table('posts')->paginate(5)]);
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
