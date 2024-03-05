<?php

declare(strict_types=1);

namespace Domains\UniteMesures\Services\RESTful;

use Core\Logic\Services\Contracts\ReadWriteServiceContract;
use Core\Logic\Services\RestJson\RestJsonReadWriteService;
use Domains\UniteMesures\Services\RESTful\Contracts\UniteMesureRESTfulReadWriteServiceContract;

/**
 * The ***`UniteMesureRESTfulReadWriteService`*** class provides RESTful CRUD operations for the "UniteMesure" resource.
 *
 * This service class extends the `RestJsonReadWriteService` class to handle the read and write operations for the "UniteMesure" resource.
 * It implements the `UniteMesureRESTfulReadWriteServiceContract` interface that defines the contract for this service.
 * The class leverages the `JsonResponseTrait` to create consistent JSON responses with `success`, `error`, and `validation` error structures.
 *
 * @package ***`\Domains\UniteMesures\Services\RESTful`***
 */
class UniteMesureRESTfulReadWriteService extends RestJsonReadWriteService implements UniteMesureRESTfulReadWriteServiceContract
{
    /**
     * Constructor for the UniteMesureRESTfulReadWriteService class.
     *
     * @param ReadWriteServiceContract $readWriteService The query service instance to be used.
     */
    public function __construct(ReadWriteServiceContract $readWriteService)
    {
        parent::__construct($readWriteService);
    }

}