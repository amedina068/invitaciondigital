<?php

use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DemoController;
use App\Http\Controllers\GuestsGroupController;
use App\Http\Controllers\GuestsGroupInvitationController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ WelcomeController::class, 'index' ]);

Route::get('/demos/{demoId}', [ DemoController::class, 'show' ]);

Route::post('/planes/{planId}/checkout', [ CheckoutController::class, 'create' ]);
Route::get('/orden-completada', [ CheckoutController::class, 'store']);

Route::middleware('auth')->group(function () {
    Route::get('dashboard', [ DashboardController::class, 'index' ]);
    Route::get('invitados', [ GuestsGroupController::class, 'index']);
    Route::post('invitados', [ GuestsGroupController::class, 'store']);
    Route::get('invitados/crear', [ GuestsGroupController::class, 'create']);
    Route::get('mi-invitacion', function () {
        return ' mi inivtacin';
    });
});

Route::get('{orderSlug}/{guestsGroupUuid?}', [ OrderInvitationController::class, 'show' ]);
Route::patch('{orderSlug}', [ GuestsGroupInvitationController::class, 'update' ]);

require __DIR__.'/auth.php';
