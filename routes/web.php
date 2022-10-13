<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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
    return view('welcome');
});

Route::get('saludo', function () {
    echo "Hola ";
});

Route::get('saludo/{name}', function ($name) {
    echo "Hola " .$name;
});

Route::get('suma/{no1}/{no2}', function ($no1,$no2) {
    echo $no1 + $no2;
});

Route::get('suma/{no1}/{no2}/{no3}', function ($no1,$no2,$no3=0) {
    echo $no1 + $no2 + $no3;
})->where(['no1'=>'[0-9]+','no2'=>'[0-9]+']);

Route::get('suma/', function (Request $request) {
    
});