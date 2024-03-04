<?php

declare(strict_types=1);

namespace Domains\Users\Credentials\Services\RESTful;

use Core\Logic\Services\Contracts\ReadWriteServiceContract;
use Core\Logic\Services\RestJson\RestJsonReadWriteService;
use Domains\Users\Credentials\Services\RESTful\Contracts\CredentialRESTfulReadWriteServiceContract;

/**
 * The ***`CredentialRESTfulReadWriteService`*** class provides RESTful CRUD operations for the "Credential" resource.
 *
 * This service class extends the `RestJsonReadWriteService` class to handle the read and write operations for the "Credential" resource.
 * It implements the `CredentialRESTfulReadWriteServiceContract` interface that defines the contract for this service.
 * The class leverages the `JsonResponseTrait` to create consistent JSON responses with `success`, `error`, and `validation` error structures.
 *
 * @package ***`\Domains\Users\Credentials\Services\RESTful`***
 */
class CredentialRESTfulReadWriteService extends RestJsonReadWriteService implements CredentialRESTfulReadWriteServiceContract
{
    /**
     * Constructor for the CredentialRESTfulReadWriteService class.
     *
     * @param ReadWriteServiceContract $readWriteService The query service instance to be used.
     */
    public function __construct(ReadWriteServiceContract $readWriteService)
    {
        parent::__construct($readWriteService);
    }
}