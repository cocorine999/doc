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
//Route::apiResource('apiRoles', 'App\Http\Controllers\RoleController');

Route::namespace("App\Http\Controllers\API\RESTful")->middleware([])->group(function () {

    // public routes
    ///Route::post('/login', 'Auth\ApiAuthController@login')->name('login.api');

    Route::middleware([])->group(function () {

    });

    Route::middleware([/* 'auth:api' */])->group(function () {
        Route::group(['namespace' => 'V1', 'as' => 'v1.'], function () {

            /*
            |--------------------------------------------------------------------------
            | User Routes
            |--------------------------------------------------------------------------
            |
            | This group contains the API resource routes for the 'users' module.
            | These routes are handled by the 'UserController' controller.
            | The route parameter 'users' is aliased as 'id_user'.
            |
            */

            /*
            |--------------------------------------------------------------------------
            | Permission Routes
            |--------------------------------------------------------------------------
            |
            | This group contains the API resource routes for the 'users' module.
            | These routes are handled by the 'PermissionController' controller.
            | The route parameter 'users' is aliased as 'id_user'.
            |
            */
            // Routes for 'permissions' resource
            Route::group(['as' => 'permissions.'], function () {

                // Get all permissions
                Route::get('/permissions', 'PermissionController');
            });


            /*
            |--------------------------------------------------------------------------
            | Role Routes
            |--------------------------------------------------------------------------
            |
            | This group contains the API resource routes for the 'roles' module.
            | These routes are handled by the 'RoleController' controller.
            | The route parameter 'users' is aliased as 'id_user'.
            |
            */
            Route::group([], function () {

                Route::apiResource('roles', 'RoleController', ["parameters" => ['role' => 'role_id']])->parameters(['role' => 'role_id']);

                Route::group(['prefix'=> 'roles'], function () {
                    // Get all roles
                    Route::put('{role}/grant-access', 'RoleController@grantAccess')->name('roles.grantAccess');
                    Route::put('{role}/revoke-access', 'RoleController@revokeAccess')->name('roles.revokeAccess');
                    Route::get('{role}/access', 'RoleController@fetchRoleAccess')->name('roles.fetchRoleAccess');
                });
            });


            /*
            |--------------------------------------------------------------------------
            | User Routes
            |--------------------------------------------------------------------------
            |
            | This group contains the API resource routes for the 'users' module.
            | These routes are handled by the 'UserController' controller.
            | The route parameter 'users' is aliased as 'id_user'.
            |
            */
            Route::group([], function () {

                Route::apiResource('users', 'UserController', ["parameters" => ['user' => 'user_id']])->parameters(['user' => 'user_id']);


                Route::group(['prefix'=> 'users'], function () {
                    // Get user privileges
                    Route::put('{user}/assign-roles', 'UserController@assignRolePrivileges')->name('users.assignRolePrivileges');
                    Route::put('{user}/revoke-roles', 'UserController@revokeRolePrivileges')->name('users.revokeRolePrivileges');
                    Route::get('{user}/roles', 'UserController@fetchUserRoles')->name('users.fetchUserRoles');
                });


                // User Status Management
                /* Route::group([], function () {

                        Route::put('/{user}/activate',    'AccountController@activateAccount')->name('users.activateAccount');
                        Route::put('/{user}/deactivate',  'AccountController@deactivateAccount')->name('users.activateAccount');
                        Route::put('/{user}/suspend',     'AccountController@suspendAccount')->name('users.suspendAccount');
                        Route::put('/{user}/unsuspend',   'AccountController@unsuspendAccount')->name('users.unsuspendAccountr');
                });

                Route::group(['prefix'=> ''], function () {
                    Route::get('/{user}/profile', 'ProfileController@profile')->name('profile');
                    Route::put('/{user}/change-password', 'ProfileController@changePassword')->name('profile.changePassword');

                }); */
            });




            /*
            |--------------------------------------------------------------------------
            | Departement Routes
            |--------------------------------------------------------------------------
            |
            | This group contains the API resource routes for the 'departements' module.
            | These routes are handled by the 'DepartementController' controller.
            | The route parameter 'users' is aliased as 'id_user'.
            |
            */
            Route::group([], function () {

                Route::apiResource('departements', 'DepartementController');

                Route::apiResource('postes', 'PosteController');

                Route::apiResource('unite_mesures', 'UniteMesureController');

                Route::apiResource('unite_travailles', 'UniteTravailleController');

                Route::apiResource('categories_of_employees', 'CategoryOfEmployeController');

            });

        });
    });
});

/* Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
}); */
