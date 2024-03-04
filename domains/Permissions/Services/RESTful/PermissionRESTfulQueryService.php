<?php

declare(strict_types=1);

namespace Domains\Permissions\Services\RESTful;

use Core\Logic\Services\Contracts\QueryServiceContract;
use Core\Logic\Services\RestJson\RestJsonQueryService;
use Domains\Permissions\Services\RESTful\Contracts\PermissionRESTfulQueryServiceContract;

/**
 * Class ***`PermissionRESTfulQueryService`***
 *
 * The `PermissionRESTfulQueryService` class is responsible for providing a RESTful implementation of the query service for the Permissions module.
 * It extends the `RestJsonQueryService` class provided by the Core module and implements the `PermissionRESTfulQueryServiceContract` interface.
 *
 * The `PermissionRESTfulQueryService` class primarily serves as a wrapper around the underlying query service, providing RESTful capabilities for querying Permission resources.
 *
 * @package ***`\Domains\Permissions\Services\RESTful`***
 */
class PermissionRESTfulQueryService extends RestJsonQueryService implements PermissionRESTfulQueryServiceContract
{
    /**
     * Constructor for the PermissionRESTfulQueryService class.
     *
     * @param QueryServiceContract $queryService The query service instance to be used.
     */
    public function __construct(QueryServiceContract $queryService)
    {
        parent::__construct($queryService);
    }
}