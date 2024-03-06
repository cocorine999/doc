<?php

declare(strict_types=1);

namespace Domains\CategoriesOfEmployees\Services\RESTful;

use Core\Logic\Services\Contracts\ReadWriteServiceContract;
use Core\Logic\Services\RestJson\RestJsonReadWriteService;
use Domains\CategoriesOfEmployees\Services\RESTful\Contracts\CategoryOfEmployeRESTfulReadWriteServiceContract;

/**
 * The ***`CategoryOfEmployeRESTfulReadWriteService`*** class provides RESTful CRUD operations for the "CategoryOfEmploye" resource.
 *
 * This service class extends the `RestJsonReadWriteService` class to handle the read and write operations for the "CategoryOfEmploye" resource.
 * It implements the `CategoryOfEmployeRESTfulReadWriteServiceContract` interface that defines the contract for this service.
 * The class leverages the `JsonResponseTrait` to create consistent JSON responses with `success`, `error`, and `validation` error structures.
 *
 * @package ***`\Domains\CategoryOfEmployes\Services\RESTful`***
 */
class CategoryOfEmployeRESTfulReadWriteService extends RestJsonReadWriteService implements CategoryOfEmployeRESTfulReadWriteServiceContract
{
    /**
     * Constructor for the PosteRESTfulReadWriteService class.
     *
     * @param ReadWriteServiceContract $readWriteService The query service instance to be used.
     */
    public function __construct(ReadWriteServiceContract $readWriteService)
    {
        parent::__construct($readWriteService);
    }

}