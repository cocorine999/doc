<?php

declare(strict_types=1);

namespace Domains\Users\Services\RESTful\Contracts;

use Core\Logic\Services\RestJson\Contracts\RestJsonReadWriteServiceContract;
use Core\Utils\DataTransfertObjects\DTOInterface;

/**
 * Interface ***`UserRESTfulReadWriteServiceContract`***
 *
 * The `UserRESTfulReadWriteServiceContract` interface defines the contract for a RESTful read-write service specific to the Users module.
 * This interface extends the RestJsonReadWriteServiceContract interface provided by the Core module.
 * It inherits the methods for both reading and writing resources in a RESTful manner.
 *
 * Implementing classes should provide the necessary functionality to perform `read` and `write` operations on User resources via RESTful API endpoints.
 *
 * @package ***`\Domains\Users\Services\RESTful\Contracts`***
 */
interface UserRESTfulReadWriteServiceContract extends RestJsonReadWriteServiceContract
{
    /**
     * Assign role to a user.
     *
     * @param string $userId                                           The identifier of the user to which role will be granted.
     * @param \Core\Utils\DataTransfertObjects\DTOInterface $roleIds   The array of role identifiers to grant to a user.
     * 
     * @return \Illuminate\Http\JsonResponse                           The JSON response indicating the status of the roles granting operation.
     * 
     * @throws \Core\Utils\Exceptions\ServiceException                 If there is an issue with the service operation.
     */
    public function assignRolePrivileges(string $userId, DTOInterface $roleIds): \Illuminate\Http\JsonResponse;

    /**
     * Revoke role from a user.
     *
     * @param string $userId                                           The identifier of the user from which role will be revoked.
     * @param \Core\Utils\DataTransfertObjects\DTOInterface $roleIds   The array of roles identifiers to revoke from a user.
     * 
     * @return \Illuminate\Http\JsonResponse                           The JSON response indicating the status of the user granted roles revocation operation.
     * 
     * @throws \Core\Utils\Exceptions\ServiceException                 If there is an issue with the service operation.
     */
    public function revokeRolePrivileges(string $userId, DTOInterface $roleIds): \Illuminate\Http\JsonResponse;

}