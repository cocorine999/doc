<?php

declare(strict_types=1);

namespace Domains\CategoriesOfEmployees\Services\RESTful\Contracts;

use Core\Logic\Services\RestJson\Contracts\RestJsonReadWriteServiceContract;

/**
 * Interface ***`CategoryOfEmployeRESTfulReadWriteServiceContract`***
 *
 * The `CategoryOfEmployeRESTfulReadWriteServiceContract` interface defines the contract for a RESTful read-write service specific to the CategoriesOfEmployees module.
 * This interface extends the RestJsonReadWriteServiceContract interface provided by the Core module.
 * It inherits the methods for both reading and writing resources in a RESTful manner.
 *
 * Implementing classes should provide the necessary functionality to perform `read` and `write` operations on CategoryOfEmploye resources via RESTful API endpoints.
 *
 * @package ***`\Domains\CategoriesOfEmployees\Services\RESTful\Contracts`***
 */
interface CategoryOfEmployeRESTfulReadWriteServiceContract extends RestJsonReadWriteServiceContract
{
    
}