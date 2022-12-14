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

Route::get('/', function () {
    return view('frontend.index.index');
})->name('home');

Route::get('/contact', function () {
    return view('frontend.contact.contact');
})->name('my.contact');


Route::get('/post', function () {
    return view('frontend.post.post');
})->name('my.post');



// backend site
Route::get('/admin', function () {
    return view('admin.index');
});



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
