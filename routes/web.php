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
Route::group(['namespace' => 'Post'], function(){
    Route::get('posts', 'IndexController')->name('posts.index');
    Route::get('posts/create', 'CreateController')->name('posts.create');
    Route::post('posts', 'StoreController')->name('posts.store');
    Route::get('posts/{post}', 'ShowController')->name('posts.show');
    Route::get('posts/{post}/edit', 'EditController')->name('posts.edit');
    Route::patch('posts/{post}', 'UpdateController')->name('posts.update');
    Route::delete('posts/{post}', 'DestroyController')->name('posts.delete');
});

Route::get('main', 'MainController@index')->name('main.index');
Route::get('about', 'AboutController@index')->name('about.index');
Route::get('contacts', 'ContactController@index')->name('contact.index');


Route::get('posts/firts_or_create', 'PostController@firstOrCreate');
Route::get('posts/update_or_create', 'PostController@updateOrCreate');
