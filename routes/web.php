<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyController;
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


Route::get('/test/{param}', function ($param) {
	Log::debug("Web access with closure", array("param"=>$param));
    return "test for route : {$param}";
});

Route::get('/my/{param}', [MyController::class, 'show']);
