<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/
# Homepage
Route::get('/', function() {
    return View::make('index');
});

// Lorem Ipsum Generator Page
Route::get('/LoremIpsum', function() {
    return View::make('LoremIpsum');
});
// RandomUser Generator Page
Route::get('/RandomUser', function() {
    return View::make('RandomUser');
});