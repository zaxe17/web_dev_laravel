<?php

use App\Http\Controllers\RoutesController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/employee', function() {
    return "<h1 style='font-size: 10rem; text-align: center;'>Employee Page</h1>";
});

Route::get('/admin/edit', function() {
    //return "ID: " . $id;
    return "<h1>Employee</h1>";
});





Route::get('/edit/{id}', [RoutesController::class, 'edit'])->name('editUser');





Route::group(['prefix' => 'home'], function() {
    Route::get('/{name}', [RoutesController::class, 'home'])->name('homePage');
});





Route::get('/error', function() {
    return view('fallback');
})->name('fallbackPage');

Route::fallback(function() {
    return redirect()->route('fallbackPage');
});





Route::group(['prefix' => 'user'], function () {
    Route::get('/', [RoutesController::class, 'user'])->name('userPage');
    Route::get('/{id}', [RoutesController::class, 'user'])->name('userEdit');
});





Route::get('/dashboard', [RoutesController::class, 'dashboard']);

Route::get('/responsive', [RoutesController::class, 'responsive']);





Route::get('/mockup', [StudentController::class, 'mockup'])->name('sample.mockup');

Route::get('/student', [StudentController::class, 'index'])->name('sample.student');

Route::post('/student', [StudentController::class, 'store'])->name('sample.submit');