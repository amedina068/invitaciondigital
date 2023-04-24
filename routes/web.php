<?php

use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DemoController;
use App\Http\Controllers\GuestGroupController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ WelcomeController::class, 'index' ]);

Route::get('/demos/{demoId}', [ DemoController::class, 'show' ]);

Route::get('/checkout', [ CheckoutController::class, 'create' ]);
Route::post('/checkout', [ CheckoutController::class, 'store' ]);

Route::middleware('auth')->group(function () {
    Route::get('dashboard', [ DashboardController::class, 'index' ]);
    Route::post('invitados', [ GuestGroupController::class, 'store']);
    Route::get('invitados/crear', [ GuestGroupController::class, 'create']);
});


require __DIR__.'/auth.php';
