<?php

declare(strict_types=1);

namespace Domains\UniteTravailles\Services\RESTful\Contracts;

use Core\Logic\Services\RestJson\Contracts\RestJsonReadWriteServiceContract;
use Core\Utils\DataTransfertObjects\DTOInterface;

/**
 * Interface ***`UniteTravailleRESTfulReadWriteServiceContract`***
 *
 * The `UniteTravailleRESTfulReadWriteServiceContract` interface defines the contract for a RESTful read-write service specific to the UniteTravailles module.
 * This interface extends the RestJsonReadWriteServiceContract interface provided by the Core module.
 * It inherits the methods for both reading and writing resources in a RESTful manner.
 *
 * Implementing classes should provide the necessary functionality to perform `read` and `write` operations on UniteTravaille resources via RESTful API endpoints.
 *
 * @package ***`\Domains\UniteTravailles\Services\RESTful\Contracts`***
 */
interface UniteTravailleRESTfulReadWriteServiceContract extends RestJsonReadWriteServiceContract
{
    
}