<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class RepositoriesServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        // Bind ReadWriteRepositoryInterface to PermissionReadWriteRepository
        $this->app->when(\Domains\Permissions\Services\RESTful\PermissionRESTfulReadWriteService::class)
            ->needs(
                \Core\Data\Repositories\Contracts\ReadWriteRepositoryInterface::class
            )
            ->give(\Domains\Permissions\Repositories\PermissionReadWriteRepository::class);

        // Bind ReadWriteRepositoryInterface to PermissionReadOnlyRepository
        $this->app->when(\Domains\Permissions\Services\RESTful\PermissionRESTfulQueryService::class)
            ->needs(
                \Core\Data\Repositories\Contracts\ReadWriteRepositoryInterface::class
            )
            ->give(\Domains\Permissions\Repositories\PermissionReadOnlyRepository::class);

    
        // Bind ReadWriteRepositoryInterface to RoleReadWriteRepository
        $this->app->when(\Domains\Roles\Services\RESTful\RoleRESTfulReadWriteService::class)
            ->needs(
                \Core\Data\Repositories\Contracts\ReadWriteRepositoryInterface::class
            )
            ->give(\Domains\Roles\Repositories\RoleReadWriteRepository::class);

        // Bind ReadWriteRepositoryInterface to RoleReadOnlyRepository
        $this->app->when(\Domains\Roles\Services\RESTful\RoleRESTfulQueryService::class)
            ->needs(
                \Core\Data\Repositories\Contracts\ReadWriteRepositoryInterface::class
            )
            ->give(\Domains\Roles\Repositories\RoleReadOnlyRepository::class);

    
        // Bind ReadWriteRepositoryInterface to PersonReadWriteRepository
        $this->app->when(\Domains\Users\People\Services\RESTful\PersonRESTfulReadWriteService::class)
            ->needs(
                \Core\Data\Repositories\Contracts\ReadWriteRepositoryInterface::class
            )
            ->give(\Domains\Users\People\Repositories\PersonReadWriteRepository::class);

        // Bind ReadWriteRepositoryInterface to PersonReadOnlyRepository
        $this->app->when(\Domains\Users\People\Services\RESTful\PersonRESTfulQueryService::class)
            ->needs(
                \Core\Data\Repositories\Contracts\ReadWriteRepositoryInterface::class
            )
            ->give(\Domains\Users\People\Repositories\PersonReadOnlyRepository::class);

    
        // Bind ReadWriteRepositoryInterface to CompanyReadWriteRepository
        $this->app->when(\Domains\Users\Companies\Services\RESTful\CompanyRESTfulReadWriteService::class)
            ->needs(
                \Core\Data\Repositories\Contracts\ReadWriteRepositoryInterface::class
            )
            ->give(\Domains\Users\Companies\Repositories\CompanyReadWriteRepository::class);

        // Bind ReadWriteRepositoryInterface to CompanyReadOnlyRepository
        $this->app->when(\Domains\Users\Companies\Services\RESTful\CompanyRESTfulQueryService::class)
            ->needs(
                \Core\Data\Repositories\Contracts\ReadWriteRepositoryInterface::class
            )
            ->give(\Domains\Users\Companies\Repositories\CompanyReadOnlyRepository::class);

    
        // Bind ReadWriteRepositoryInterface to UserReadWriteRepository
        $this->app->when(\Domains\Users\Services\RESTful\UserRESTfulReadWriteService::class)
            ->needs(
                \Core\Data\Repositories\Contracts\ReadWriteRepositoryInterface::class
            )
            ->give(\Domains\Users\Repositories\UserReadWriteRepository::class);

        // Bind ReadWriteRepositoryInterface to UserReadOnlyRepository
        $this->app->when(\Domains\Users\Services\RESTful\UserRESTfulQueryService::class)
            ->needs(
                \Core\Data\Repositories\Contracts\ReadWriteRepositoryInterface::class
            )
            ->give(\Domains\Users\Repositories\UserReadOnlyRepository::class);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
