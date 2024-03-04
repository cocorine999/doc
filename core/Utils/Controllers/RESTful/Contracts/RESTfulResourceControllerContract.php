<?php

declare(strict_types = 1);

namespace Core\Utils\Controllers\RESTful\Contracts;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

/**
 * Interface RESTfulResourceControllerContract
 *
 * This contract defines the methods expected in a class that serves as a RESTful base controller
 * for managing resources.
 *
 * @package **`Core\Utils\Controllers\RESTful\Contracts`**
 */
interface RESTfulResourceControllerContract
{
    /**
     * Get the RESTful service contract responsible for handling CRUD operations.
     *
     * @return \Core\Logic\Services\RestJson\Contracts\RestJsonReadWriteServiceContract|null The RESTful service contract, or null if not set.
     */
    public function getService(): ?\Core\Logic\Services\RestJson\Contracts\RestJsonReadWriteServiceContract;

    /**
     * Set the RESTful service contract for managing resources.
     *
     * @param \Core\Logic\Services\RestJson\Contracts\RestJsonReadWriteServiceContract $service The RESTful service contract to set.
     */
    public function setService(\Core\Logic\Services\RestJson\Contracts\RestJsonReadWriteServiceContract $service): void;

    /**
     * Display a listing of the resource.
     *
     * @param  Request $request              The request object containing the filter parameters.
     * 
     * @return JsonResponse The JSON response containing the listing of resources.
     */
    public function index(Request $request): JsonResponse;

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Core\Utils\Requests\CreateResourceRequest $request The request object containing the data for creating the resource.
     * @return JsonResponse     The JSON response indicating the status of the operation.
     */
    public function store(\Core\Utils\Requests\CreateResourceRequest $request): JsonResponse;

    /**
     * Display the specified resource.
     *
     * @param  Request $request              The request object containing the filter parameters.
     * @param  string $id                    The identifier of the resource to be displayed.
     * @return JsonResponse                  The JSON response containing the specified resource.
     */
    public function show(Request $request, string $id): JsonResponse;

    /**
     * Update the specified resource in storage.
     *
     * @param  \Core\Utils\Requests\UpdateResourceRequest $request The request object containing the data for updating the resource.
     * @param  string  $id      The identifier of the resource to be updated.
     * @return JsonResponse     The JSON response indicating the status of the operation.
     */
    public function update(\Core\Utils\Requests\UpdateResourceRequest $request, string $id): JsonResponse;

    /**
     * Remove the specified resource from storage.
     *
     * @param  string $id                    The identifier of the resource to be removed.
     * @return JsonResponse                  The JSON response indicating the status of the operation.
     */
    public function softDelete(string $id): JsonResponse;

    /**
     * Permanently delete the specified soft deleted resource.
     *
     * @param  string $id                    The identifier of the soft deleted resource to be permanently deleted.
     * @return JsonResponse                  The JSON response indicating the status of the operation.
     */
    public function permanentDelete(string $id): JsonResponse;

    // Other methods...

    /**
     * Filter all resources.
     *
     * @param  Request $request              The request object containing the filter parameters.
     * @return JsonResponse                  The JSON response containing the filtered resources.
     */
    public function search(Request $request): JsonResponse;
}