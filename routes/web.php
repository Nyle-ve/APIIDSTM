<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ReservationController;

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

Route::get('login/', function () {
    return view('auth.login');
})->name('login');

Route::get('prueba/', function () {
    return ('hola');
})->middleware('auth');

Route::get('users/', [UserController::class, 'index']);

Route::get('users/create', [UserController::class, 'create']);

Route::get('users/{id}', [UserController::class, 'show']);

Route::post('users/', [UserController::class, 'store']);


Route::get('clients/', [ClientController::class, 'index']);

Route::get('clients/create', [ClientController::class, 'create']);

Route::get('clients/{id}', [ClientController::class, 'show']);

Route::post('clients/', [ClientController::class, 'store']);

Route::get('clients/edit/{id}', [ClientController::class, 'edit']);

Route::put('clients/', [ClientController::class, 'update']);


Route::get('reservations/', [ReservationController::class, 'index']);

Route::get('reservations/{id}', [ReservationController::class, 'show']);

// Route::get('saludo', function () {
//     echo "Hola ";
// });

// Route::get('saludo/{name}', function ($name) {
//     echo "Hola " .$name;
// });

// Route::get('suma/{no1}/{no2}', function ($no1,$no2) {
//     echo $no1 + $no2;
// });

// Route::get('suma/{no1}/{no2}/{no3}', function ($no1,$no2,$no3=0) {
//     echo $no1 + $no2 + $no3;
// })->where(['no1'=>'[0-9]+','no2'=>'[0-9]+']);

// Route::get('suma/', function (Request $request) {
    
// });