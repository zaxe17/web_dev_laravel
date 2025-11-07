<?php

use App\Http\Controllers\ResourceController;
use App\Http\Controllers\RoutesController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/employee', [RoutesController::class, 'employee']);

Route::get('/admin/edit', [RoutesController::class, 'admin']);





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
    Route::get('/{id}', [RoutesController::class, 'userid'])->name('userEdit');
});





Route::get('/dashboard', [RoutesController::class, 'dashboard']);

Route::get('/responsive', [RoutesController::class, 'responsive']);





Route::get('/mockup', [StudentController::class, 'mockup'])->name('sample.mockup');

Route::get('/student', [StudentController::class, 'index'])->name('sample.student');

Route::post('/student', [StudentController::class, 'store'])->name('sample.submit');



// RESOURCE
Route::resource('resources', ResourceController::class);