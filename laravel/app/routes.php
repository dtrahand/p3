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

//LOREM IPSUM GENERATOR
//*********************
// Lorem Ipsum Generator Page GET
Route::get('/LoremIpsum', function() {
    return View::make('LoremIpsum');
});
// Lorem Ipsum Generator POST
Route::post('/LoremIpsum', function() {
    $num_paragraphs=Input::get('num_paragraphs');
    if ($num_paragraphs > 100) {
        $outputsentence = "The maximum number of paragraphs is 100, please type in a number <=100.";
        return View::make('LoremIpsum')
        ->with('outputsentence', $outputsentence)
        ->with('num_paragraphs', $num_paragraphs);
    }
    else
    {
        $outputsentence = "Following is/are a list of " .$num_paragraphs." Lorem Ipsum paragraph(s):<br />";

        //GENERATE THE LOREM IPSUM TEXT:
        $generator = new LoremIpsumGenerator();
        $paragraphs = $generator->getParagraphs($num_paragraphs);
    
        return View::make('LoremIpsum')
        ->with('outputsentence', $outputsentence)
        ->with('num_paragraphs', $num_paragraphs)
        ->with('paragraphs', $paragraphs);
    }
});

//RANDOM USERS GENERATOR
//**********************
// RandomUser Generator Page GET
Route::get('/RandomUser', function() {
    return View::make('RandomUser');
});

// RandomUser Generator Page POST
Route::post('/RandomUser', function() {
    $num_users=Input::get('num_users');
    
    if ($num_users > 100) {
        $outputsentence = "The maximum number of users is 100, please type in a number <=100.";
        return View::make('RandomUser')
        ->with('outputsentence', $outputsentence)
        ->with('num_users', $num_users);
    }
    else
    {
        $outputsentence = "Following is/are a list of " .$num_users." user(s):<br />";
        // GENERATE THE LIST OF USERS:
        $faker = Faker::create();

        return View::make('RandomUser')
            ->with('outputsentence', $outputsentence)
            ->with('num_users', $num_users)
            ->with('faker', $faker);;
    }
});