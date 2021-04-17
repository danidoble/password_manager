<?php

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

Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::prefix('admin/password')->group(function(){
        Route::get('show/site/{site_name}',[\App\Http\Controllers\PasswordController::class,'site_name'])->name('admin.password.site_name');
        Route::get('show/id/{id}',[\App\Http\Controllers\PasswordController::class,'show'])->name('admin.password.id');
    });
});

