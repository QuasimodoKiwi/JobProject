<?php

use Illuminate\Support\Facades\Route; //CHANGE AS NEEDED !!!
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\JobsControllerAPI;
use App\Http\Controllers\secondpage;

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


Route::get('/secondPage', function () {
    $jobTable = DB::table('jobs')->get();
    return view('secondPage', ['jobTable' => $jobTable]);
});

Route::post('/', [JobsControllerAPI::class, 'store']);