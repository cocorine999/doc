<?php

declare(strict_types=1);

namespace Domains\Roles\Services\RESTful\Contracts;

use Core\Logic\Services\RestJson\Contracts\RestJsonReadWriteServiceContract;
use Core\Utils\DataTransfertObjects\DTOInterface;

/**
 * Interface ***`RoleRESTfulReadWriteServiceContract`***
 *
 * The `RoleRESTfulReadWriteServiceContract` interface defines the contract for a RESTful read-write service specific to the Roles module.
 * This interface extends the RestJsonReadWriteServiceContract interface provided by the Core module.
 * It inherits the methods for both reading and writing resources in a RESTful manner.
 *
 * Implementing classes should provide the necessary functionality to perform `read` and `write` operations on Role resources via RESTful API endpoints.
 *
 * @package ***`\Domains\Roles\Services\RESTful\Contracts`***
 */
interface RoleRESTfulReadWriteServiceContract extends RestJsonReadWriteServiceContract
{
    /**
     * Grant access to a role.
     *
     * @param string $roleId                                           The identifier of the role to which access will be granted.
     * @param \Core\Utils\DataTransfertObjects\DTOInterface $accessIds The array of access identifiers to grant to the role.
     * 
     * @return \Illuminate\Http\JsonResponse                           The JSON response indicating the status of the access grant operation.
     * 
     * @throws \Core\Utils\Exceptions\ServiceException                 If there is an issue with the service operation.
     */
    public function grantAccess(string $roleId, DTOInterface $accessIds): \Illuminate\Http\JsonResponse;

    /**
     * Revoke access from a role.
     *
     * @param string $roleId                                           The identifier of the role from which access will be revoked.
     * @param \Core\Utils\DataTransfertObjects\DTOInterface $accessIds The array of access identifiers to revoke from the role.
     * 
     * @return \Illuminate\Http\JsonResponse                           The JSON response indicating the status of the access revocation operation.
     * 
     * @throws \Core\Utils\Exceptions\ServiceException                 If there is an issue with the service operation.
     */
    public function revokeAccess(string $roleId, DTOInterface $accessIds): \Illuminate\Http\JsonResponse;
}