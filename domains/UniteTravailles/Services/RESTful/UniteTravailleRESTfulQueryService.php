<?php

declare(strict_types=1);

namespace Domains\UniteTravailles\Services\RESTful;

use Core\Logic\Services\Contracts\QueryServiceContract;
use Core\Logic\Services\RestJson\RestJsonQueryService;
use Core\Utils\Exceptions\ServiceException;
use Core\Utils\Helpers\Responses\Json\JsonResponseTrait;
use Domains\UniteTravailles\Services\RESTful\Contracts\UniteTravailleRESTfulQueryServiceContract;
use Illuminate\Http\Response;
use Throwable;

/**
 * Class ***`UniteTravailleRESTfulQueryService`***
 *
 * The `UniteTravailleRESTfulQueryService` class is responsible for providing a RESTful implementation of the query service for the UniteTravailles module.
 * It extends the `RestJsonQueryService` class provided by the Core module and implements the `UniteTravailleRESTfulQueryServiceContract` interface.
 *
 * The `UniteTravailleRESTfulQueryService` class primarily serves as a wrapper around the underlying query service, providing RESTful capabilities for querying UniteTravaille resources.
 *
 * @package ***`\Domains\UniteTravailles\Services\RESTful`***
 */
class UniteTravailleRESTfulQueryService extends RestJsonQueryService implements UniteTravailleRESTfulQueryServiceContract
{
    /**
     * Constructor for the UniteTravailleRESTfulQueryService class.
     *
     * @param QueryServiceContract $queryService The query service instance to be used.
     */
    public function __construct(QueryServiceContract $queryService)
    {
        parent::__construct($queryService);
    }

}