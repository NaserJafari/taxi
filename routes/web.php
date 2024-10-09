<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\User\RideController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth.login');
});

Route::get('thankyou', function () {
    return view('partial.thankyou');
})->name('thankyou');

Route::middleware(['auth'])->group(function () {
    Route::get('ride/taxi', [RideController::class, 'searchTaxi'])->name('ride.taxi');
    Route::resource('ride', RideController::class)->middleware(['auth']);
    Route::post('ride/location', [RideController::class, 'location'])->name('ride.location');
    Route::post('ride/acceptTaxi', [RideController::class, 'acceptTaxi'])->name('ride.accepttaxi');
    Route::get('endpoint/{taxi}', [RideController::class, 'endPoint'])->name('ride.endpoint');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
