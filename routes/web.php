<?php

use App\Http\Controllers\MyPlaceController;
use Illuminate\Support\Facades\Route;

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
Route::get('post', 'PostController@index');
Route::get('post/create', 'PostController@create');
Route::get('post/update', 'PostController@update');
Route::get('post/delete', 'PostController@delete');
Route::get('post/firts_or_create', 'PostController@firstOrCreate');
Route::get('post/update_or_create', 'PostController@updateOrCreate');
