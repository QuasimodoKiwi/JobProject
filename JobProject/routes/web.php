<?php

use Illuminate\Support\Facades\Route; //CHANGE AS NEEDED !!!
use App\Http\Controllers\JobsControllerAPI;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('application_form');
});

Route::get(
    '/application_form',
    'secondpage@index'
);

Route::post(
    '/store_application',
    'secondpage@store'
)
    ->name('store_application');



Route::get('/homepage', function () {
    return view('secondPage');
});



Route::get('/show', [JobsControllerAPI::class, 'customerpage']);
