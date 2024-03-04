<?php

declare(strict_types=1);

namespace Domains\Roles\Services\RESTful\Contracts;

use Core\Logic\Services\RestJson\Contracts\RestJsonQueryServiceContract;

/**
 * Interface ***`RoleRESTfulQueryServiceContract`***
 *
 * The `RoleRESTfulQueryServiceContract` interface is a contract that defines the methods
 * for a RESTful query service specific to Role resources.
 *
 * This interface extends the RestJsonQueryServiceContract interface, which provides
 * a set of common methods for performing RESTful queries on JSON-based resources.
 *
 * Implementing classes should provide the necessary implementation for each method
 * defined in this interface, which includes `querying`, `filtering`, `sorting`, `pagination`,
 * and other operations specific to Role resources.
 *
 * @package ***`\Domains\Roles\Services\RESTful\Contracts`***
 */
interface RoleRESTfulQueryServiceContract extends RestJsonQueryServiceContract
{
    /**
     * Fetch access granted to a role.
     *
     * @param string $roleId The identifier of the role for which access will be fetched.
     * 
     * @return \Illuminate\Http\JsonResponse The JSON response containing the access granted to the role.
     * 
     * @throws \Core\Utils\Exceptions\ServiceException If there is an issue with the service operation.
     */
    public function fetchRoleAccess(string $roleId): \Illuminate\Http\JsonResponse;
}