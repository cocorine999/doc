<?php

declare(strict_types=1);

namespace Domains\Users\Services\RESTful\Contracts;

use Core\Logic\Services\RestJson\Contracts\RestJsonQueryServiceContract;

/**
 * Interface ***`UserRESTfulQueryServiceContract`***
 *
 * The `UserRESTfulQueryServiceContract` interface is a contract that defines the methods
 * for a RESTful query service specific to User resources.
 *
 * This interface extends the RestJsonQueryServiceContract interface, which provides
 * a set of common methods for performing RESTful queries on JSON-based resources.
 *
 * Implementing classes should provide the necessary implementation for each method
 * defined in this interface, which includes `querying`, `filtering`, `sorting`, `pagination`,
 * and other operations specific to User resources.
 *
 * @package ***`\Domains\Users\Services\RESTful\Contracts`***
 */
interface UserRESTfulQueryServiceContract extends RestJsonQueryServiceContract
{
    /**
     * Fetch user granted role.
     *
     * @param string $userId The identifier of the user for which role will be fetched.
     * 
     * @return \Illuminate\Http\JsonResponse The JSON response containing the role granted to a user.
     * 
     * @throws \Core\Utils\Exceptions\ServiceException If there is an issue with the service operation.
     */
    public function fetchUserRoles(string $userId): \Illuminate\Http\JsonResponse;

}