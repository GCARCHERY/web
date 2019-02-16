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
    return view('pages.home');
})->name('home_');

Route::get('/contact', function () {
    return view('pages.contact');
})->name('hello_');

Route::get('/about', function () {
    return view('pages.about');
})->name('about_');

Route::get('/code-of-conduct', function () {
    return view('pages.code_of_conduct');
})->name('coc_');

Route::get('/community-policy', function () {
    return view('pages.community_policy');
})->name('cp_');

Route::get('/our-team', function () {
    return view('pages.team');
})->name('tm_');


Auth::routes();

Route::get('/profile', 'HomeController@index')->name('home');

Route::get('/home', function () {
    return redirect('/');
})->name('home');

Route::get('/register', function () {
    return redirect('/');
});





Route::resource('posts','PostController');

Route::resource('sponsors','SponsorController');

Route::resource('teams','TeamController');

Route::get('news', 'PostController@index');

Route::get('our-team', 'TeamController@index');

Route::get('/', 'SponsorController@index');

Route::get('uploadfile', 'SponsorController@index');
Route::post('uploadfile', 'SponsorController@upload');
