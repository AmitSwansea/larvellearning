<?php

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

Route::get('contact', 'App\Http\Controllers\PagesController@getContact');


Route::get('contact', 'App\Http\Controllers\PagesController@getContact');

Route::get('about', 'App\Http\Controllers\PagesController@getAbout');

Route::get('/', 'App\Http\Controllers\PagesController@getIndex');
Route::resource('posts','App\Http\Controllers\PostController');



Route::post('comments/{post_id}',['uses'=>'App\Http\Controllers\CommentsController@store','as'=>'comments.store']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

