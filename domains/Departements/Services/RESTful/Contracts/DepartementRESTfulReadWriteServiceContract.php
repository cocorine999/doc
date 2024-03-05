<?php

declare(strict_types=1);

namespace Domains\Departements\Services\RESTful\Contracts;

use Core\Logic\Services\RestJson\Contracts\RestJsonReadWriteServiceContract;
use Core\Utils\DataTransfertObjects\DTOInterface;

/**
 * Interface ***`DepartementRESTfulReadWriteServiceContract`***
 *
 * The `DepartementRESTfulReadWriteServiceContract` interface defines the contract for a RESTful read-write service specific to the Departements module.
 * This interface extends the RestJsonReadWriteServiceContract interface provided by the Core module.
 * It inherits the methods for both reading and writing resources in a RESTful manner.
 *
 * Implementing classes should provide the necessary functionality to perform `read` and `write` operations on Departement resources via RESTful API endpoints.
 *
 * @package ***`\Domains\Departements\Services\RESTful\Contracts`***
 */
interface DepartementRESTfulReadWriteServiceContract extends RestJsonReadWriteServiceContract
{
    
}