<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware([])->group(function () {


    Route::name('v1.')->group(function () {

        /*
        |--------------------------------------------------------------------------
        | Role Routes
        |--------------------------------------------------------------------------
        |
        | This group contains the API resource routes for the 'roles' module.
        | These routes are handled by the 'RoleController' controller.
        | The route parameter 'roles' is aliased as 'role_id'.
        |
        */
        // Routes for 'roles' resource
        Route::name('roles.')->group(function () {
            Route::prefix('roles')->group(function () {
                // Get all roles
                Route::get(
                    '/',
                    [\App\Http\Controllers\APIs\RESTful\V1\RoleController::class, 'index']
                )->name('index');

                // Create a new role
                Route::post(
                    '/',
                    [\App\Http\Controllers\APIs\RESTful\V1\RoleController::class, 'storeRole']
                )->name('store');

                // Get a single role by ID
                Route::get(
                    '{role}',
                    [\App\Http\Controllers\APIs\RESTful\V1\RoleController::class, 'show']
                )->name('show');

                // Update an existing role or add to the data if not exist
                Route::put(
                    '{role}',
                    [\App\Http\Controllers\APIs\RESTful\V1\RoleController::class, 'updateRole']
                )->name('update');

                // Update an existing role
                Route::patch(
                    '{role}',
                    [\App\Http\Controllers\APIs\RESTful\V1\RoleController::class, 'updateRole']
                )->name('update');

                // Soft delete an role
                Route::delete(
                    '{role}',
                    [\App\Http\Controllers\APIs\RESTful\V1\RoleController::class, 'softDelete']
                )->name('soft-delete');
            });
        });
    });
});
