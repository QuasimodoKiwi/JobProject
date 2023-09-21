<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\JobsControllerAPI;
use App\Http\Controllers\secondpage;
use App\Models\Jobs;

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

 Route::post('/store_application',
 'secondpage@store')
 ->name('store_application');

Route::get('/secondPage', function () {
    $data = Jobs::all();
    return view('secondPage', ['emp' => $data]);
});
