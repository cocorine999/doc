<?php

namespace App\Providers;

use App\Http\Requests\Roles\v1\CreateRoleRequest;
use App\Http\Requests\Roles\v1\UpdateRoleRequest;
use App\Http\Requests\Users\v1\CreateUserRequest;
use App\Http\Requests\Users\v1\UpdateUserRequest;
use Core\Utils\Requests\CreateResourceRequest;
use Core\Utils\Requests\UpdateResourceRequest;
use Illuminate\Support\ServiceProvider;

class ResourcesServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        // Bind ReadOnlyRepositoryInterface to PermissionReadOnlyRepository
        $this->app->when(\App\Http\Controllers\API\RESTful\V1\PermissionController::class)
            ->needs(
                \Core\Data\Repositories\Contracts\ReadOnlyRepositoryInterface::class
            )
            ->give(\Domains\Permissions\Repositories\PermissionReadOnlyRepository::class);

        
        // Bind ReadOnlyRepositoryInterface to RoleReadOnlyRepository
        $this->app->when(\App\Http\Controllers\API\RESTful\V1\RoleController::class)
            ->needs(
                \Core\Data\Repositories\Contracts\ReadOnlyRepositoryInterface::class
            )
            ->give(\Domains\Roles\Repositories\RoleReadOnlyRepository::class);

        // Bind ReadWriteRepositoryInterface to RoleReadWriteRepository
        $this->app->when(\App\Http\Controllers\API\RESTful\V1\RoleController::class)
            ->needs(
                \Core\Data\Repositories\Contracts\ReadWriteRepositoryInterface::class
            )
            ->give(\Domains\Roles\Repositories\RoleReadWriteRepository::class);

        // Bind ReadOnlyRepositoryInterface to UserReadOnlyRepository
        $this->app->when(\App\Http\Controllers\API\RESTful\V1\UserController::class)
            ->needs(
                \Core\Data\Repositories\Contracts\ReadOnlyRepositoryInterface::class
            )
            ->give(\Domains\Users\Repositories\UserReadOnlyRepository::class);

        // Bind ReadWriteRepositoryInterface to UserReadWriteRepository
        $this->app->when(\App\Http\Controllers\API\RESTful\V1\UserController::class)
            ->needs(
                \Core\Data\Repositories\Contracts\ReadWriteRepositoryInterface::class
            )
            ->give(\Domains\Users\Repositories\UserReadWriteRepository::class);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
