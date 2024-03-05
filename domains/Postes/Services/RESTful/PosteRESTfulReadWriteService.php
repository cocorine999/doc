<?php

declare(strict_types=1);

namespace Domains\Postes\Services\RESTful;

use Core\Logic\Services\Contracts\ReadWriteServiceContract;
use Core\Logic\Services\RestJson\RestJsonReadWriteService;
use Domains\Postes\Services\RESTful\Contracts\PosteRESTfulReadWriteServiceContract;

/**
 * The ***`PosteRESTfulReadWriteService`*** class provides RESTful CRUD operations for the "Poste" resource.
 *
 * This service class extends the `RestJsonReadWriteService` class to handle the read and write operations for the "Poste" resource.
 * It implements the `PosteRESTfulReadWriteServiceContract` interface that defines the contract for this service.
 * The class leverages the `JsonResponseTrait` to create consistent JSON responses with `success`, `error`, and `validation` error structures.
 *
 * @package ***`\Domains\Postes\Services\RESTful`***
 */
class PosteRESTfulReadWriteService extends RestJsonReadWriteService implements PosteRESTfulReadWriteServiceContract
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