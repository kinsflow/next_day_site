<?php

use App\Http\Controllers\AdvertController;
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
    return view('advert');
});


Route::post('/upload-banner', [AdvertController::class, 'upload'])->name('upload_banner');
