<?php

declare(strict_types=1);

namespace Domains\Users\Services\RESTful;

use Core\Logic\Services\Contracts\QueryServiceContract;
use Core\Logic\Services\RestJson\RestJsonQueryService;
use Domains\Users\Services\RESTful\Contracts\UserRESTfulQueryServiceContract;

/**
 * Class ***`UserRESTfulQueryService`***
 *
 * The `UserRESTfulQueryService` class is responsible for providing a RESTful implementation of the query service for the Users module.
 * It extends the `RestJsonQueryService` class provided by the Core module and implements the `UserRESTfulQueryServiceContract` interface.
 *
 * The `UserRESTfulQueryService` class primarily serves as a wrapper around the underlying query service, providing RESTful capabilities for querying User resources.
 *
 * @package ***`\Domains\Users\Services\RESTful`***
 */
class UserRESTfulQueryService extends RestJsonQueryService implements UserRESTfulQueryServiceContract
{
    /**
     * Constructor for the UserRESTfulQueryService class.
     *
     * @param QueryServiceContract $queryService The query service instance to be used.
     */
    public function __construct(QueryServiceContract $queryService)
    {
        parent::__construct($queryService);
    }
}