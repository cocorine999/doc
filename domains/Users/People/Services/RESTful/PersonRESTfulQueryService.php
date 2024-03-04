<?php

declare(strict_types=1);

namespace Domains\Users\People\Services\RESTful;

use Core\Logic\Services\Contracts\QueryServiceContract;
use Core\Logic\Services\RestJson\RestJsonQueryService;
use Domains\Users\Companies\Services\RESTful\Contracts\PersonRESTfulQueryServiceContract;

/**
 * Class ***`PersonRESTfulQueryService`***
 *
 * The `PersonRESTfulQueryService` class is responsible for providing a RESTful implementation of the query service for the People module.
 * It extends the `RestJsonQueryService` class provided by the Core module and implements the `PersonRESTfulQueryServiceContract` interface.
 *
 * The `PersonRESTfulQueryService` class primarily serves as a wrapper around the underlying query service, providing RESTful capabilities for querying Person resources.
 *
 * @package ***`\Domains\Users\People\Services\RESTful`***
 */
class PersonRESTfulQueryService extends RestJsonQueryService implements PersonRESTfulQueryServiceContract
{
    /**
     * Constructor for the PersonRESTfulQueryService class.
     *
     * @param QueryServiceContract $queryService The query service instance to be used.
     */
    public function __construct(QueryServiceContract $queryService)
    {
        parent::__construct($queryService);
    }
}