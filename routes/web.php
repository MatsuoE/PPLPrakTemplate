<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\cplprodiController;

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

Route::get('/', [cplprodiController::class, 'index']);
Route::resource('cplprodi', cplprodiController::class);



Route::get('/blank', function () {
    return view('blank');
});
Route::get('/tables', function () {
    return view('tables');
});
Route::get('/forms', function () {
    return view('forms');
});
Route::get('/tabs', function () {
    return view('tabs');
});
Route::get('/calendar', function () {
    return view('calendar');
});

