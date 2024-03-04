<?php

declare(strict_types=1);

namespace Domains\Users\People\Services\RESTful;

use Core\Logic\Services\Contracts\ReadWriteServiceContract;
use Core\Logic\Services\RestJson\RestJsonReadWriteService;
use Domains\Users\People\Services\RESTful\Contracts\PersonRESTfulReadWriteServiceContract;

/**
 * The ***`PersonRESTfulReadWriteService`*** class provides RESTful CRUD operations for the "Person" resource.
 *
 * This service class extends the `RestJsonReadWriteService` class to handle the read and write operations for the "Person" resource.
 * It implements the `PersonRESTfulReadWriteServiceContract` interface that defines the contract for this service.
 * The class leverages the `JsonResponseTrait` to create consistent JSON responses with `success`, `error`, and `validation` error structures.
 *
 * @package ***`\Domains\Users\People\Services\RESTful`***
 */
class PersonRESTfulReadWriteService extends RestJsonReadWriteService implements PersonRESTfulReadWriteServiceContract
{
    /**
     * Constructor for the PersonRESTfulReadWriteService class.
     *
     * @param ReadWriteServiceContract $readWriteService The query service instance to be used.
     */
    public function __construct(ReadWriteServiceContract $readWriteService)
    {
        parent::__construct($readWriteService);
    }
}