<?php

declare(strict_types = 1);

namespace App\Http\Controllers\API\RESTful\V1;

use App\Http\Requests\Departements\v1\CreateDepartementRequest;
use App\Http\Requests\Departements\v1\UpdateDepartementRequest;
use Core\Utils\Controllers\RESTful\RESTfulResourceController;
use Domains\Departements\Services\RESTful\Contracts\DepartementRESTfulQueryServiceContract;
use Domains\Departements\Services\RESTful\Contracts\DepartementRESTfulReadWriteServiceContract;

/**
 * **`DepartementController`**
 *
 * Controller for managing departement resources. This controller extends the RESTfulController
 * and provides CRUD operations for departement resources.
 *
 * @package **`\App\Http\Controllers\APIs\RESTful\V1`**
 */
class DepartementController extends RESTfulResourceController
{
    /**
     * Create a new DepartementController instance.
     *
     * @param \Domains\Departements\Services\RESTful\Contracts\DepartementRESTfulQueryServiceContract $departementRESTfulQueryService
     *        The Departement RESTful Query Service instance.
     */
    public function __construct(DepartementRESTfulReadWriteServiceContract $departementRESTfulReadWriteService, DepartementRESTfulQueryServiceContract $departementRESTfulQueryService)
    {
        parent::__construct($departementRESTfulReadWriteService, $departementRESTfulQueryService);

        // Set specific request classes for store and update methods
        $this->setRequestClass('store', CreateDepartementRequest::class);
        $this->setRequestClass('update', UpdateDepartementRequest::class);
    }
}
