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
                // Resolve the necessary dependencies for PermissionRESTfulReadWriteService
                $readWriteService = $app->make(\Core\Logic\Services\Contracts\ReadWriteServiceContract::class);
                
                // Create and return an instance of PermissionRESTfulReadWriteService
                return new \Domains\Permissions\Services\RESTful\PermissionRESTfulReadWriteService($readWriteService);
            }
        );

        // Binds the implementation of PermissionRESTfulQueryServiceContract to the PermissionRESTfulQueryService class.
        $this->app->bind(
            \Domains\Permissions\Services\RESTful\Contracts\PermissionRESTfulQueryServiceContract::class,
            function ($app) {
                // Resolve the dependencies required by PermissionRESTfulQueryService
                $queryService = $app->make(\Core\Logic\Services\Contracts\QueryServiceContract::class);
 
                // Create and return an instance of PermissionRESTfulQueryService
                return new \Domains\Permissions\Services\RESTful\PermissionRESTfulQueryService($queryService);
            }
        );

        // Binds the implementation of RoleRESTfulReadWriteServiceContract to the RoleRESTfulReadWriteService class.
        $this->app->bind(
            \Domains\Roles\Services\RESTful\Contracts\RoleRESTfulReadWriteServiceContract::class,
            function ($app) {
                // Resolve the necessary dependencies for RoleRESTfulReadWriteService
                $readWriteService = $app->make(\Core\Logic\Services\Contracts\ReadWriteServiceContract::class);
                
                // Create and return an instance of RoleRESTfulReadWriteService
                return new \Domains\Roles\Services\RESTful\RoleRESTfulReadWriteService($readWriteService);
            }
        );

        // Binds the implementation of RoleRESTfulQueryServiceContract to the RoleRESTfulQueryService class.
        $this->app->bind(
            \Domains\Roles\Services\RESTful\Contracts\RoleRESTfulQueryServiceContract::class,
            function ($app) {
                // Resolve the dependencies required by RoleRESTfulQueryService
                $queryService = $app->make(\Core\Logic\Services\Contracts\QueryServiceContract::class);
 
                // Create and return an instance of RoleRESTfulQueryService
                return new \Domains\Roles\Services\RESTful\RoleRESTfulQueryService($queryService);
            }
        );

        // Binds the implementation of PersonRESTfulReadWriteServiceContract to the PersonRESTfulReadWriteService class.
        $this->app->bind(
            \Domains\Users\People\Services\RESTful\Contracts\PersonRESTfulReadWriteServiceContract::class,
            function ($app) {
                // Resolve the necessary dependencies for PersonRESTfulReadWriteService
                $readWriteService = $app->make(\Core\Logic\Services\Contracts\ReadWriteServiceContract::class);
                
                // Create and return an instance of PersonRESTfulReadWriteService
                return new \Domains\Users\People\Services\RESTful\PersonRESTfulReadWriteService($readWriteService);
            }
        );

        // Binds the implementation of PersonRESTfulQueryServiceContract to the PersonRESTfulQueryService class.
        $this->app->bind(
            \Domains\Users\People\Services\RESTful\Contracts\PersonRESTfulQueryServiceContract::class,
            function ($app) {

                $queryService = $app->make(\Core\Logic\Services\Contracts\QueryServiceContract::class);
 
                // Create and return an instance of PersonRESTfulQueryService
                return new \Domains\Users\People\Services\RESTful\PersonRESTfulQueryService($queryService);
            }
        );

        // Binds the implementation of CompanyRESTfulReadWriteServiceContract to the CompanyRESTfulReadWriteService class.
        $this->app->bind(
            \Domains\Users\Companies\Services\RESTful\Contracts\CompanyRESTfulReadWriteServiceContract::class,
            function ($app) {
                // Resolve the necessary dependencies for CompanyRESTfulReadWriteService
                $readWriteService = $app->make(\Core\Logic\Services\Contracts\ReadWriteServiceContract::class);
                
                // Create and return an instance of CompanyRESTfulReadWriteService
                return new \Domains\Users\Companies\Services\RESTful\CompanyRESTfulReadWriteService($readWriteService);
            }
        );

        // Binds the implementation of CompanyRESTfulQueryServiceContract to the CompanyRESTfulQueryService class.
        $this->app->bind(
            \Domains\Users\Companies\Services\RESTful\Contracts\CompanyRESTfulQueryServiceContract::class,
            function ($app) {
                // Resolve the necessary dependencies for CompanyRESTfulQueryService
                $queryService = $app->make(\Core\Logic\Services\Contracts\QueryServiceContract::class);
 
                // Create and return an instance of CompanyRESTfulQueryService
                return new \Domains\Users\Companies\Services\RESTful\CompanyRESTfulQueryService($queryService);
            }
        );

        // Binds the implementation of UserRESTfulReadWriteServiceContract to the UserRESTfulReadWriteService class.
        $this->app->bind(
            \Domains\Users\Services\RESTful\Contracts\UserRESTfulReadWriteServiceContract::class,
            function ($app) {
                // Resolve the necessary dependencies for UserRESTfulReadWriteService
                $readWriteService = $app->make(\Core\Logic\Services\Contracts\ReadWriteServiceContract::class);

                // Create and return an instance of UserRESTfulReadWriteService
                return new \Domains\Users\Services\RESTful\UserRESTfulReadWriteService($readWriteService);
            }
        );

        // Binds the implementation of UserRESTfulQueryServiceContract to the UserRESTfulQueryService class.
        $this->app->bind(
            \Domains\Users\Services\RESTful\Contracts\UserRESTfulQueryServiceContract::class,
            function ($app) {
                // Resolve the necessary dependencies for UserRESTfulQueryService
                $queryService = $app->make(\Core\Logic\Services\Contracts\QueryServiceContract::class);

                // Create and return an instance of UserRESTfulQueryService
                return new \Domains\Users\Services\RESTful\UserRESTfulQueryService($queryService);
            }
        );
        
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
