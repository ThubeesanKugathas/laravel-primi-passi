<?php

use Illuminate\Support\Facades\Route;
use phpDocumentor\Reflection\PseudoTypes\LowercaseString;

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
    $data = [
        [
            "linkName" => "Chi Siamo",
            "link" => "/chi siamo",
        ],
        [
            "linkName" => "Documentazioni",
            "link" => "/documentazioni",
        ],
        [
            "linkName" => "Contatti",
            "link" => "/contatti",
        ],
        [
            "linkName" => "Sponsors",
            "link" => "/sponsors",
        ],
        [
            "linkName" => "Login",
            "link" => "/login",
        ],
    ];


    return view('homepage',["data" => $data]);
});

Route::get('/chi siamo', function () {
    return view('chisiamo');
});

Route::get('/documentazioni', function () {
    return view('documentazioni');
});

Route::get('/contatti', function () {
    return view('contatti');
});

Route::get('/sponsors', function () {
    return view('sponsor');
});

Route::get('/login', function () {
    return view('login');
});

