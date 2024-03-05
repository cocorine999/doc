<?php

declare(strict_types=1);

namespace Domains\Postes\Services\RESTful\Contracts;

use Core\Logic\Services\RestJson\Contracts\RestJsonReadWriteServiceContract;
use Core\Utils\DataTransfertObjects\DTOInterface;

/**
 * Interface ***`PosteRESTfulReadWriteServiceContract`***
 *
 * The `PosteRESTfulReadWriteServiceContract` interface defines the contract for a RESTful read-write service specific to the Postes module.
 * This interface extends the RestJsonReadWriteServiceContract interface provided by the Core module.
 * It inherits the methods for both reading and writing resources in a RESTful manner.
 *
 * Implementing classes should provide the necessary functionality to perform `read` and `write` operations on Poste resources via RESTful API endpoints.
 *
 * @package ***`\Domains\Postes\Services\RESTful\Contracts`***
 */
interface PosteRESTfulReadWriteServiceContract extends RestJsonReadWriteServiceContract
{
    
}