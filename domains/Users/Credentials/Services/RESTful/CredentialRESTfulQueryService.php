<?php

declare(strict_types=1);

namespace Domains\Users\Credentials\Services\RESTful;

use Core\Logic\Services\Contracts\QueryServiceContract;
use Core\Logic\Services\RestJson\RestJsonQueryService;
use Domains\Users\Credentials\Services\RESTful\Contracts\CredentialRESTfulQueryServiceContract;

/**
 * Class ***`CredentialRESTfulQueryService`***
 *
 * The `CredentialRESTfulQueryService` class is responsible for providing a RESTful implementation of the query service for the People module.
 * It extends the `RestJsonQueryService` class provided by the Core module and implements the `CredentialRESTfulQueryServiceContract` interface.
 *
 * The `CredentialRESTfulQueryService` class primarily serves as a wrapper around the underlying query service, providing RESTful capabilities for querying Credential resources.
 *
 * @package ***`\Domains\Users\Credentials\Services\RESTful`***
 */
class CredentialRESTfulQueryService extends RestJsonQueryService implements CredentialRESTfulQueryServiceContract
{
    /**
     * Constructor for the CredentialRESTfulQueryService class.
     *
     * @param QueryServiceContract $queryService The query service instance to be used.
     */
    public function __construct(QueryServiceContract $queryService)
    {
        parent::__construct($queryService);
    }
}