<?php

declare(strict_types = 1);

namespace App\Http\Controllers\API\RESTful\V1;

use Core\Utils\Controllers\RESTful\RESTfulResourceController;
use Domains\Permissions\Services\RESTful\Contracts\PermissionRESTfulQueryServiceContract;
use Illuminate\Http\Request;

/**
 * **`PermissionController`**
 *
 * Controller for managing permission resources. This controller extends the RESTfulController
 * and provides CRUD operations for permission resources.
 *
 * @package **`\App\Http\Controllers\APIs\RESTful\V1`**
 */
class PermissionController extends RESTfulResourceController
{
    /**
     * Create a new PermissionController instance.
     *
     * @param \Domains\Permission\Services\RESTful\Contracts\PermissionRESTfulQueryServiceContract $permissionRESTfulQueryService
     *        The Permission RESTful Query Service instance.
     */
    public function __construct(PermissionRESTfulQueryServiceContract $permissionRESTfulQueryService)
    {
        parent::__construct(restJsonQueryService: $permissionRESTfulQueryService);
    }

    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse The JSON response containing the listing of resources.
     */
    public function __invoke(Request $request): \Illuminate\Http\JsonResponse
    {
        // Retrieve paginated data from the query service
        return parent::index($request);
    }
}
