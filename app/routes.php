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

    Route::get('/', function()
    {
        return View::make('default');
    });
    Route::get('/cr', function()
    {
        return View::make('create');
    });

    // route to show the login form
    Route::get('login', array('uses' => 'HomeController@showLogin'));

// route to process the form
    Route::post('login', array('uses' => 'HomeController@doLogin'));

    Route::get('logout', array('uses' => 'HomeController@doLogout'));

    Route::get('/log', function()
    {
        return View::make('users.log');
    });
    Route::get('/MailTest', function()
    {
        $data['name'] = 'Ranjan Dalai';
        Mail::send('emails.welcome', $data, function($message)
        {
            $message->to('rcc.cif@gmail.com')->subject('Welcome!!!');
            echo 'success';
        });
    });