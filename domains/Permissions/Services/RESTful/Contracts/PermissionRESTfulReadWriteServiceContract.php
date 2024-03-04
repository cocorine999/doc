<?php

declare(strict_types=1);

namespace Domains\Permissions\Services\RESTful\Contracts;

use Core\Logic\Services\RestJson\Contracts\RestJsonReadWriteServiceContract;

/**
 * Interface ***`PermissionRESTfulReadWriteServiceContract`***
 *
 * The `PermissionRESTfulReadWriteServiceContract` interface defines the contract for a RESTful read-write service specific to the Permissions module.
 * This interface extends the RestJsonReadWriteServiceContract interface provided by the Core module.
 * It inherits the methods for both reading and writing resources in a RESTful manner.
 *
 * Implementing classes should provide the necessary functionality to perform `read` and `write` operations on Permission resources via RESTful API endpoints.
 *
 * @package ***`\Domains\Permissions\Services\RESTful\Contracts`***
 */
interface PermissionRESTfulReadWriteServiceContract extends RestJsonReadWriteServiceContract
{

}