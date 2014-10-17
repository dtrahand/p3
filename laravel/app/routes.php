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

// Lorem Ipsum Generator Page GET
Route::get('/LoremIpsum', function() {
    return View::make('LoremIpsum');
});
// Lorem Ipsum Generator POST
Route::post('/LoremIpsum', function() {
    $num_paragraphs=Input::get('num_paragraphs');
    return View::make('LoremIpsum')
        ->with('num_paragraphs', $num_paragraphs);
});

// RandomUser Generator Page GET
Route::get('/RandomUser', function() {
    return View::make('RandomUser');
});
// RandomUser Generator Page POST
Route::post('/RandomUser', function() {
    $num_users=Input::get('num_users');
    return View::make('RandomUser')
        ->with('num_users', $num_users);
});