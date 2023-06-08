<?php

use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DemoController;
use App\Http\Controllers\GuestsGroupController;
use App\Http\Controllers\GuestsGroupInvitationController;
use App\Http\Controllers\UserPlanInvitationController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ WelcomeController::class, 'index' ]);

Route::get('/demos/{demoId}', [ DemoController::class, 'show' ]);

Route::get('/planes/{planId}/checkout', [ CheckoutController::class, 'create' ]);
Route::get('/orden-completada', [ CheckoutController::class, 'store']);
Route::get('invitaciones/{userPlanSlug}/{guestsGroupUuid?}', [ UserPlanInvitationController::class, 'show' ]);
Route::patch('invitaciones/{userPlanSlug}', [ GuestsGroupInvitationController::class, 'update' ]);

Route::middleware('auth')->group(function () {
    Route::get('dashboard', [ DashboardController::class, 'index' ]);
    Route::get('invitados', [ GuestsGroupController::class, 'index']);
    Route::post('invitados', [ GuestsGroupController::class, 'store']);
    Route::get('invitados/crear', [ GuestsGroupController::class, 'create']);
});


require __DIR__.'/auth.php';
