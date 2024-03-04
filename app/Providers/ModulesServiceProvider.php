<?php

namespace App\Providers;

use App\Http\Requests\Roles\v1\CreateRoleRequest;
use App\Http\Requests\Roles\v1\UpdateRoleRequest;
use App\Http\Requests\Users\v1\CreateUserRequest;
use App\Http\Requests\Users\v1\UpdateUserRequest;
use Core\Utils\Requests\CreateResourceRequest;
use Core\Utils\Requests\UpdateResourceRequest;
use Illuminate\Support\ServiceProvider;

class ModulesServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {

        // Binds the implementation of PermissionRESTfulReadWriteServiceContract to the PermissionRESTfulReadWriteService class.
        $this->app->bind(
            \Domains\Permissions\Services\RESTful\Contracts\PermissionRESTfulReadWriteServiceContract::class,
            function ($app) {
                // Resolve the dependencies required by \Domains\Permissions\Services\RESTful\PermissionRESTfulReadWriteService$
                $permissionReadWriteRepository = $app->make(\Domains\Permissions\Repositories\PermissionReadWriteRepository::class);
 
                $writeService = $app->make(
                    \Core\Logic\Services\Contracts\ReadWriteServiceContract::class,
                    [$permissionReadWriteRepository]
                );
 
                // Create and return an instance of PermissionRESTfulReadWriteService
                return new \Domains\Permissions\Services\RESTful\PermissionRESTfulReadWriteService($writeService);
            }
        );

        // Binds the implementation of PermissionRESTfulQueryServiceContract to the PermissionRESTfulQueryService class.
        $this->app->bind(
            \Domains\Permissions\Services\RESTful\Contracts\PermissionRESTfulQueryServiceContract::class,
            function ($app) {
                // Resolve the dependencies required by \Domains\Permissions\Services\RESTful\PermissionRESTfulQueryService$
                $permissionReadOnlyRepository = $app->make(\Domains\Permissions\Repositories\PermissionReadOnlyRepository::class);
 
                $queryService = $app->make(
                    \Core\Logic\Services\Contracts\QueryServiceContract::class,
                    [$permissionReadOnlyRepository]
                );
 
                // Create and return an instance of PermissionRESTfulQueryService
                return new \Domains\Permissions\Services\RESTful\PermissionRESTfulQueryService($queryService);
            }
        );

        // Binds the implementation of RoleRESTfulReadWriteServiceContract to the RoleRESTfulReadWriteService class.
        $this->app->bind(
            \Domains\Roles\Services\RESTful\Contracts\RoleRESTfulReadWriteServiceContract::class,
            function ($app) {
                // Resolve the dependencies required by \Domains\Roles\Services\RESTful\RoleRESTfulReadWriteService$
                $roleReadWriteRepository = $app->make(\Domains\Roles\Repositories\RoleReadWriteRepository::class);
 
                $writeService = $app->make(
                    \Core\Logic\Services\Contracts\ReadWriteServiceContract::class,
                    [$roleReadWriteRepository]
                );
 
                // Create and return an instance of RoleRESTfulReadWriteService
                return new \Domains\Roles\Services\RESTful\RoleRESTfulReadWriteService($writeService);
            }
        );

        // Binds the implementation of RoleRESTfulQueryServiceContract to the RoleRESTfulQueryService class.
        $this->app->bind(
            \Domains\Roles\Services\RESTful\Contracts\RoleRESTfulQueryServiceContract::class,
            function ($app) {
                // Resolve the dependencies required by \Domains\Roles\Services\RESTful\RoleRESTfulQueryService$
                $roleReadOnlyRepository = $app->make(\Domains\Roles\Repositories\RoleReadOnlyRepository::class);
 
                $queryService = $app->make(
                    \Core\Logic\Services\Contracts\QueryServiceContract::class,
                    [$roleReadOnlyRepository]
                );
 
                // Create and return an instance of RoleRESTfulQueryService
                return new \Domains\Roles\Services\RESTful\RoleRESTfulQueryService($queryService);
            }
        );

        $this->app->bind(CreateResourceRequest::class, CreateRoleRequest::class);
        $this->app->bind(UpdateResourceRequest::class, UpdateRoleRequest::class);

        // Binds the implementation of UserRESTfulReadWriteServiceContract to the UserRESTfulReadWriteService class.
        $this->app->bind(
            \Domains\Users\Services\RESTful\Contracts\UserRESTfulReadWriteServiceContract::class,
            function ($app) {
                // Resolve the dependencies required by \Domains\Users\Services\RESTful\UserRESTfulReadWriteService$
                $roleReadWriteRepository = $app->make(\Domains\Users\Repositories\UserReadWriteRepository::class);
 
                $writeService = $app->make(
                    \Core\Logic\Services\Contracts\ReadWriteServiceContract::class,
                    [$roleReadWriteRepository]
                );
 
                // Create and return an instance of UserRESTfulReadWriteService
                return new \Domains\Users\Services\RESTful\UserRESTfulReadWriteService($writeService);
            }
        );

        // Binds the implementation of UserRESTfulQueryServiceContract to the UserRESTfulQueryService class.
        $this->app->bind(
            \Domains\Users\Services\RESTful\Contracts\UserRESTfulQueryServiceContract::class,
            function ($app) {
                // Resolve the dependencies required by \Domains\Users\Services\RESTful\UserRESTfulQueryService$
                $userReadOnlyRepository = $app->make(\Domains\Users\Repositories\UserReadOnlyRepository::class);
 
                $queryService = $app->make(
                    \Core\Logic\Services\Contracts\QueryServiceContract::class,
                    [$userReadOnlyRepository]
                );
 
                // Create and return an instance of UserRESTfulQueryService
                return new \Domains\Users\Services\RESTful\UserRESTfulQueryService($queryService);
            }
        );

        // Binds the implementation of PersonRESTfulReadWriteServiceContract to the PersonRESTfulReadWriteService class.
        $this->app->bind(
            \Domains\Users\People\Services\RESTful\Contracts\PersonRESTfulReadWriteServiceContract::class,
            function ($app) {
                // Resolve the dependencies required by \Domains\Users\People\Services\RESTful\PersonRESTfulReadWriteService$
                $personReadWriteRepository = $app->make(\Domains\Users\People\Repositories\PersonReadWriteRepository::class);
 
                $writeService = $app->make(
                    \Core\Logic\Services\Contracts\ReadWriteServiceContract::class,
                    [$personReadWriteRepository]
                );
 
                // Create and return an instance of PersonRESTfulReadWriteService
                return new \Domains\Users\People\Services\RESTful\PersonRESTfulReadWriteService($writeService);
            }
        );

        // Binds the implementation of PersonRESTfulQueryServiceContract to the PersonRESTfulQueryService class.
        $this->app->bind(
            \Domains\Users\People\Services\RESTful\Contracts\PersonRESTfulQueryServiceContract::class,
            function ($app) {
                // Resolve the dependencies required by \Domains\Users\People\Services\RESTful\PersonRESTfulQueryService$
                $personReadOnlyRepository = $app->make(\Domains\Users\People\Repositories\PersonReadOnlyRepository::class);
 
                $queryService = $app->make(
                    \Core\Logic\Services\Contracts\QueryServiceContract::class,
                    [$personReadOnlyRepository]
                );
 
                // Create and return an instance of PersonRESTfulQueryService
                return new \Domains\Users\People\Services\RESTful\PersonRESTfulQueryService($queryService);
            }
        );

        // Binds the implementation of CompanyRESTfulReadWriteServiceContract to the CompanyRESTfulReadWriteService class.
        $this->app->bind(
            \Domains\Users\Companies\Services\RESTful\Contracts\CompanyRESTfulReadWriteServiceContract::class,
            function ($app) {
                // Resolve the dependencies required by \Domains\Users\Companies\Services\RESTful\CompanyRESTfulReadWriteService$
                $companyReadWriteRepository = $app->make(\Domains\Users\Companies\Repositories\CompanyReadWriteRepository::class);
 
                $writeService = $app->make(
                    \Core\Logic\Services\Contracts\ReadWriteServiceContract::class,
                    [$companyReadWriteRepository]
                );
 
                // Create and return an instance of CompanyRESTfulReadWriteService
                return new \Domains\Users\Companies\Services\RESTful\CompanyRESTfulReadWriteService($writeService);
            }
        );

        // Binds the implementation of CompanyRESTfulQueryServiceContract to the CompanyRESTfulQueryService class.
        $this->app->bind(
            \Domains\Users\Companies\Services\RESTful\Contracts\CompanyRESTfulQueryServiceContract::class,
            function ($app) {
                // Resolve the dependencies required by \Domains\Companies\Services\RESTful\CompanyRESTfulQueryService$
                $companyReadOnlyRepository = $app->make(\Domains\Users\Companies\Repositories\CompanyReadOnlyRepository::class);
 
                $queryService = $app->make(
                    \Core\Logic\Services\Contracts\QueryServiceContract::class,
                    [$companyReadOnlyRepository]
                );
 
                // Create and return an instance of CompanyRESTfulQueryService
                return new \Domains\Users\Companies\Services\RESTful\CompanyRESTfulQueryService($queryService);
            }
        );

        $this->app->bind(CreateResourceRequest::class, CreateUserRequest::class);
        $this->app->bind(UpdateResourceRequest::class, UpdateUserRequest::class);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
