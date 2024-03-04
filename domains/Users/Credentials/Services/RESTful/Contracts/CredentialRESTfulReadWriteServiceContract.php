<?php

declare(strict_types=1);

namespace Domains\Users\Credentials\Services\RESTful\Contracts;

use Core\Logic\Services\RestJson\Contracts\RestJsonReadWriteServiceContract;

/**
 * Interface ***`CredentialRESTfulReadWriteServiceContract`***
 *
 * The `CredentialRESTfulReadWriteServiceContract` interface defines the contract for a RESTful read-write service specific to the Credential module.
 * This interface extends the RestJsonReadWriteServiceContract interface provided by the Core module.
 * It inherits the methods for both reading and writing resources in a RESTful manner.
 *
 * Implementing classes should provide the necessary functionality to perform `read` and `write` operations on Credential resources via RESTful API endpoints.
 *
 * @package ***`\Domains\Users\Credentials\Services\RESTful\Contracts`***
 */
interface CredentialRESTfulReadWriteServiceContract extends RestJsonReadWriteServiceContract
{

}