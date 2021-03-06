<?php

use App\Http\Controllers\ServiceController;
use App\Http\Controllers\TypeServiceController;
use App\Http\Controllers\UserController;
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
    return redirect('login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::middleware(['auth'])->group(function () {
    Route::resource('typeServices', TypeServiceController::class);
    Route::resource('services', ServiceController::class);


    Route::post('user/location', [UserController::class, 'updateLocation'])->name('user.location');
});

require __DIR__.'/auth.php';
