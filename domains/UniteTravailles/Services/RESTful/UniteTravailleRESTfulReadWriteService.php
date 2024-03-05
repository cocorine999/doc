<?php

declare(strict_types=1);

namespace Domains\UniteTravailles\Services\RESTful;

use Core\Logic\Services\Contracts\ReadWriteServiceContract;
use Core\Logic\Services\RestJson\RestJsonReadWriteService;
use Domains\UniteTravailles\Services\RESTful\Contracts\UniteTravailleRESTfulReadWriteServiceContract;

/**
 * The ***`UniteTravailleRESTfulReadWriteService`*** class provides RESTful CRUD operations for the "UniteTravaille" resource.
 *
 * This service class extends the `RestJsonReadWriteService` class to handle the read and write operations for the "UniteTravaille" resource.
 * It implements the `UniteTravailleRESTfulReadWriteServiceContract` interface that defines the contract for this service.
 * The class leverages the `JsonResponseTrait` to create consistent JSON responses with `success`, `error`, and `validation` error structures.
 *
 * @package ***`\Domains\UniteTravailles\Services\RESTful`***
 */
class UniteTravailleRESTfulReadWriteService extends RestJsonReadWriteService implements UniteTravailleRESTfulReadWriteServiceContract
{
    /**
     * Constructor for the UniteTravailleRESTfulReadWriteService class.
     *
     * @param ReadWriteServiceContract $readWriteService The query service instance to be used.
     */
    public function __construct(ReadWriteServiceContract $readWriteService)
    {
        parent::__construct($readWriteService);
    }

}