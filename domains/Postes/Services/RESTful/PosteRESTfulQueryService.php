<?php

declare(strict_types=1);

namespace Domains\Postes\Services\RESTful;

use Core\Logic\Services\Contracts\QueryServiceContract;
use Core\Logic\Services\RestJson\RestJsonQueryService;
use Core\Utils\Exceptions\ServiceException;
use Core\Utils\Helpers\Responses\Json\JsonResponseTrait;
use Domains\Postes\Services\RESTful\Contracts\PosteRESTfulQueryServiceContract;
use Illuminate\Http\Response;
use Throwable;

/**
 * Class ***`PosteRESTfulQueryService`***
 *
 * The `PosteRESTfulQueryService` class is responsible for providing a RESTful implementation of the query service for the Postes module.
 * It extends the `RestJsonQueryService` class provided by the Core module and implements the `PosteRESTfulQueryServiceContract` interface.
 *
 * The `PosteRESTfulQueryService` class primarily serves as a wrapper around the underlying query service, providing RESTful capabilities for querying Poste resources.
 *
 * @package ***`\Domains\Postes\Services\RESTful`***
 */
class PosteRESTfulQueryService extends RestJsonQueryService implements PosteRESTfulQueryServiceContract
{
    /**
     * Constructor for the PosteRESTfulQueryService class.
     *
     * @param QueryServiceContract $queryService The query service instance to be used.
     */
    public function __construct(QueryServiceContract $queryService)
    {
        parent::__construct($queryService);
    }

}