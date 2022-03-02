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
    $data = [
        [
            "linkName" => "Chi Siamo",
            "link" => "",
        ],
        [
            "linkName" => "Documentazioni",
            "link" => "",
        ],
        [
            "linkName" => "Contatti",
            "link" => "",
        ],
        [
            "linkName" => "Sponsors",
            "link" => "",
        ],
        [
            "linkName" => "Login",
            "link" => "",
        ],
    ];


    return view('homepage',["data" => $data]);
});
