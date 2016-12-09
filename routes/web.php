<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/


Route::get('/home', 'HomeController@index');
Route::get('/', 'HomeController@index');

Route::get('/pronunciations', 'PronunciationController@index')->name('pronunciations.index');
Route::get('/pronunciations/create', 'PronunciationController@create')->name('pronunciations.create');
Route::post('/pronunciations/create', 'PronunciationController@store')->name('pronunciations.store');
Route::get('/pronunciations/{pronunciation}', 'PronunciationController@show')->name('pronunciations.show');
Route::get('/pronunciations/{pronunciation}/edit', 'PronunciationController@edit')->name('pronunciations.edit');
Route::post('/pronunciations/{pronunciation}/edit', 'PronunciationController@update')->name('pronunciations.update');
Route::post('/pronunciations/{pronunciation}', 'PronunciationController@destroy')->name('pronunciations.destroy');

Route::get('/voices', 'VoiceController@index')->name('voices.index');
Route::get('/voices/create', 'VoiceController@create')->name('voices.create');
Route::post('/voices/create', 'VoiceController@store')->name('voices.store');
Route::get('/voices/{voice}', 'VoiceController@show')->name('voices.show');
Route::get('/voices/{voice}/edit', 'VoiceController@edit')->name('voices.edit');
Route::post('/voices/{voice}/edit', 'VoiceController@update')->name('voices.update');

Auth::routes();
Route::get('/logout','Auth\LoginController@logout')->name('logout');


// TODO(ben): Delete temporary route
Route::get('/debug', function() {

    echo '<pre>';

    echo '<h1>Environment</h1>';
    echo App::environment().'</h1>';

    echo '<h1>Debugging?</h1>';
    if(config('app.debug')) echo "Yes"; else echo "No";

    echo '<h1>Database Config</h1>';
    /*
    The following line will output your MySQL credentials.
    Uncomment it only if you're having a hard time connecting to the database and you
    need to confirm your credentials.
    When you're done debugging, comment it back out so you don't accidentally leave it
    running on your live server, making your credentials public.
    */
    //print_r(config('database.connections.mysql'));

    echo '<h1>Test Database Connection</h1>';
    try {
        $results = DB::select('SHOW DATABASES;');
        echo '<strong style="background-color:green; padding:5px;">Connection confirmed</strong>';
        echo "<br><br>Your Databases:<br><br>";
        print_r($results);
    }
    catch (Exception $e) {
        echo '<strong style="background-color:crimson; padding:5px;">Caught exception: ', $e->getMessage(), "</strong>\n";
    }

    echo '</pre>';

});

// TODO(ben): Delete temporary route
Route::get('/show-login-status', function() {

    # You may access the authenticated user via the Auth facade
    $user = Auth::user();

    if($user)
        dump($user->toArray());
    else
        dump('You are not logged in.');

    return;
});