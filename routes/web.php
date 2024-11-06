<?php

use Illuminate\Support\Facades\Route;
use App\Models\Orden;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');

Route::get('/', function () {
    $orden = Orden::find(1);
    return view('landingpage', compact('orden'));
})->name('landingpage');
