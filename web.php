<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SchoolController;
use App\Http\Controllers\SiswaController;
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
route::get('home',[AdminController::class,'home']);
Route::resource('school', SchoolController::class);
Route::resource('bukus', SchoolController::class);
Route::get('/siswa',[SiswaController::class,'indexsiswa'])
