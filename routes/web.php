<?php

use App\Http\Controllers\PortalController;
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

// Route::get('/', 'PortalController@index');
// // Route::get('predict', 'PortalController@predict');

Route::controller(PortalController::class)->group(function () {
    Route::get('/', 'index');
    Route::get('/predict', 'predict');
    Route::post('/predict', 'postPredict');
    Route::get('/result', 'result');
});
