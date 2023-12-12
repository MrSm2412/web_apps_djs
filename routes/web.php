<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Web_apps_Controller;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::any('/', [Web_apps_Controller::class, 'index']);
Route::post('/generate-pdf', [Web_apps_Controller::class, 'generatePdf']);