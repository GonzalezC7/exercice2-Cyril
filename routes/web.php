<?php

use App\Http\Controllers\GiftCardController;
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
    return view('welcome');
});

Route::get('/gift-card', [GiftCardController::class, 'show'])->name('home.show');

Route::post('/gift-card', [GiftCardController::class, 'recup'])->name('gift-card.recup');
