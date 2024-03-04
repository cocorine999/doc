<?php

declare(strict_types = 1);

namespace App\Http\Controllers\API\RESTful\V1;

use Core\Utils\Controllers\RESTful\RESTfulResourceController;
use Domains\Roles\Services\RESTful\Contracts\RoleRESTfulQueryServiceContract;
use Illuminate\Http\JsonResponse;
use Domains\Roles\Services\RESTful\Contracts\RoleRESTfulReadWriteServiceContract;

/**
 * **`RoleController`**
 *
 * Controller for managing role resources. This controller extends the RESTfulController
 * and provides CRUD operations for role resources.
 *
 * @package **`\App\Http\Controllers\APIs\RESTful\V1`**
 */
class RoleController extends RESTfulResourceController
{
    /**
     * Create a new RoleController instance.
     *
     * @param \Domains\Role\Services\RESTful\Contracts\RoleRESTfulReadWriteServiceContract $roleRESTfulReadWriteService
     *        The Role RESTful Read-Write Service instance.
     */
    public function __construct(RoleRESTfulReadWriteServiceContract $roleRESTfulReadWriteService, RoleRESTfulQueryServiceContract $roleRESTfulQueryService)
    {
        parent::__construct($roleRESTfulReadWriteService, $roleRESTfulQueryService);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Core\Utils\Requests\CreateResourceRequest $request The request object containing the data for creating the resource.
     * @return \Illuminate\Http\JsonResponse     The JSON response indicating the status of the operation.
     */
    public function store(\Core\Utils\Requests\CreateResourceRequest $request): JsonResponse
    {
        // Use the roleRESTfulReadWriteService to create the role.
        return parent::store($request);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Core\Utils\Requests\UpdateResourceRequest $request The request object containing the data for updating the resource.
     * @param  string                   $id      The identifier of the resource to be updated.
     * @return \Illuminate\Http\JsonResponse     The JSON response indicating the status of the operation.
     */
    public function update(\Core\Utils\Requests\UpdateResourceRequest $request, string $id): JsonResponse
    {
        // Update the role using the roleRESTfulReadWriteService and pass the DTO instance
        return parent::update($request, $id);
    }

    /**
     * Grant access to a role.
     *
     * @param  \Core\Utils\Requests\UpdateResourceRequest $request The request object containing the data for updating the resource.
     * @param  string                                     $id      The identifier of the resource to be updated.
     * @return \Illuminate\Http\JsonResponse                       The JSON response indicating the status of the access grant operation.
     */
    public function grantAccess(\Core\Utils\Requests\UpdateResourceRequest $request, string $id): JsonResponse
    {
        return $this->restJsonReadWriteService->grantAccess($id, $request->getDto());
    }

    /**
     * Revoke access to a role.
     *
     * @param  \Core\Utils\Requests\UpdateResourceRequest $request The request object containing the data for updating the resource.
     * @param  string                                     $id      The identifier of the resource to be updated.
     * @return \Illuminate\Http\JsonResponse                       The JSON response indicating the status of the access grant operation.
     */
    public function revokeAccess(\Core\Utils\Requests\UpdateResourceRequest $request, string $id): JsonResponse
    {
        return $this->restJsonReadWriteService->revokeAccess($id, $request->getDto());
    }

    /**
     * Revoke access to a role.
     *
     * @param  string                                     $id      The identifier of the resource to be updated.
     * @return \Illuminate\Http\JsonResponse                       The JSON response indicating the status of the access grant operation.
     */
    public function fetchRoleAccess(string $id): JsonResponse
    {
        return $this->restJsonQueryService->fetchRoleAccess($id);
    }

}
