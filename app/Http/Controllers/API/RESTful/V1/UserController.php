<?php

declare(strict_types = 1);

namespace App\Http\Controllers\API\RESTful\V1;

use Core\Utils\Controllers\RESTful\RESTfulResourceController;
use Domains\Users\Services\RESTful\Contracts\UserRESTfulQueryServiceContract;
use Illuminate\Http\JsonResponse;
use Domains\Users\Services\RESTful\Contracts\UserRESTfulReadWriteServiceContract;

/**
 * **`UserController`**
 *
 * Controller for managing user resources. This controller extends the RESTfulController
 * and provides CRUD operations for user resources.
 *
 * @package **`\App\Http\Controllers\APIs\RESTful\V1`**
 */
class UserController extends RESTfulResourceController
{
    /**
     * Create a new UserController instance.
     *
     * @param \Domains\User\Services\RESTful\Contracts\UserRESTfulReadWriteServiceContract $userRESTfulReadWriteService
     *        The User RESTful Read-Write Service instance.
     */
    public function __construct(UserRESTfulReadWriteServiceContract $userRESTfulReadWriteService, UserRESTfulQueryServiceContract $userRESTfulQueryService)
    {
        parent::__construct($userRESTfulReadWriteService, $userRESTfulQueryService);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Core\Utils\Requests\CreateResourceRequest $request The request object containing the data for creating the resource.
     * @return \Illuminate\Http\JsonResponse     The JSON response indicating the status of the operation.
     */
    public function store(\Core\Utils\Requests\CreateResourceRequest $request): JsonResponse
    {
        // Use the userRESTfulReadWriteService to create the user.
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
        // Update the user using the userRESTfulReadWriteService and pass the DTO instance
        return parent::update($request, $id);
    }

    /**
     * Grant access to a user.
     *
     * @param  \Core\Utils\Requests\UpdateResourceRequest $request The request object containing the data for updating the resource.
     * @param  string                                     $id      The identifier of the resource to be updated.
     * @return \Illuminate\Http\JsonResponse                       The JSON response indicating the status of the access grant operation.
     */
    public function assignRole(\Core\Utils\Requests\UpdateResourceRequest $request, string $id): JsonResponse
    {
        return parent::index();
        //return $this->restJsonReadWriteService->grantAccess($id, $request->getDto());
    }

    /**
     * Revoke access to a user.
     *
     * @param  \Core\Utils\Requests\UpdateResourceRequest $request The request object containing the data for updating the resource.
     * @param  string                                     $id      The identifier of the resource to be updated.
     * @return \Illuminate\Http\JsonResponse                       The JSON response indicating the status of the access grant operation.
     */
    public function revokeRole(\Core\Utils\Requests\UpdateResourceRequest $request, string $id): JsonResponse
    {
        return parent::index();
        //return $this->restJsonReadWriteService->revokeAccess($id, $request->getDto());
    }

}
