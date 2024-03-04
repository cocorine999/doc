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
        | Permission Routes
        |--------------------------------------------------------------------------
        |
        | This group contains the API resource routes for the 'permissions' module.
        | These routes are handled by the 'PermissionController' controller.
        | The route parameter 'permissions' is aliased as 'permission_id'.
        |
        */
        // Routes for 'permissions' resource
        Route::name('permissions.')->group(function () {
            Route::prefix('permissions')->group(function () {
                // Get all permissions
                Route::get(
                    '/',
                    [\App\Http\Controllers\APIs\RESTful\V1\PermissionController::class, 'index']
                )->name('index');

                // Create a new permission
                Route::post(
                    '/',
                    [\App\Http\Controllers\APIs\RESTful\V1\PermissionController::class, 'storePermission']
                )->name('store');

                // Get a single permission by ID
                Route::get(
                    '{permission}',
                    [\App\Http\Controllers\APIs\RESTful\V1\PermissionController::class, 'show']
                )->name('show');

                // Update an existing permission or add to the data if not exist
                Route::put(
                    '{permission}',
                    [\App\Http\Controllers\APIs\RESTful\V1\PermissionController::class, 'updatePermission']
                )->name('update');

                // Update an existing permission
                Route::patch(
                    '{permission}',
                    [\App\Http\Controllers\APIs\RESTful\V1\PermissionController::class, 'updatePermission']
                )->name('update');

                // Soft delete an permission
                Route::delete(
                    '{permission}',
                    [\App\Http\Controllers\APIs\RESTful\V1\PermissionController::class, 'softDelete']
                )->name('soft-delete');
            });
        });
    });
});
