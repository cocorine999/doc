<?php

declare(strict_types = 1);

namespace App\Http\Controllers\API\RESTful\V1;

use App\Http\Requests\CategoriesOfEmployees\v1\CreateCategoryOfEmployeRequest;
use App\Http\Requests\CategoriesOfEmployees\v1\UpdateCategoryOfEmployeRequest;
use Core\Utils\Controllers\RESTful\RESTfulResourceController;
use Domains\CategoriesOfEmployees\Services\RESTful\Contracts\CategoryOfEmployeRESTfulQueryServiceContract;
use Domains\CategoriesOfEmployees\Services\RESTful\Contracts\CategoryOfEmployeRESTfulReadWriteServiceContract;

/**
 * **`CategoryOfEmployeController`**
 *
 * Controller for managing poste resources. This controller extends the RESTfulController
 * and provides CRUD operations for poste resources.
 *
 * @package **`\App\Http\Controllers\APIs\RESTful\V1`**
 */
class CategoryOfEmployeController extends RESTfulResourceController
{
    /**
     * Create a new CategoryOfEmployeController instance.
     *
     * @param \Domains\CategoriesOfEmployees\Services\RESTful\Contracts\CategoryOfEmployeRESTfulQueryServiceContract $posteRESTfulQueryService
     *        The CategoryOfEmploye RESTful Query Service instance.
     */
    public function __construct(CategoryOfEmployeRESTfulReadWriteServiceContract $posteRESTfulReadWriteService, CategoryOfEmployeRESTfulQueryServiceContract $posteRESTfulQueryService)
    {
        parent::__construct($posteRESTfulReadWriteService, $posteRESTfulQueryService);

        // Set specific request classes for store and update methods
        $this->setRequestClass('store', CreateCategoryOfEmployeRequest::class);
        $this->setRequestClass('update', UpdateCategoryOfEmployeRequest::class);
    }
}
