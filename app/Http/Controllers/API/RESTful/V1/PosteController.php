<?php

declare(strict_types = 1);

namespace App\Http\Controllers\API\RESTful\V1;

use App\Http\Requests\Postes\v1\CreatePosteRequest;
use App\Http\Requests\Postes\v1\UpdatePosteRequest;
use Core\Utils\Controllers\RESTful\RESTfulResourceController;
use Domains\Postes\Services\RESTful\Contracts\PosteRESTfulQueryServiceContract;
use Domains\Postes\Services\RESTful\Contracts\PosteRESTfulReadWriteServiceContract;

/**
 * **`PosteController`**
 *
 * Controller for managing poste resources. This controller extends the RESTfulController
 * and provides CRUD operations for poste resources.
 *
 * @package **`\App\Http\Controllers\APIs\RESTful\V1`**
 */
class PosteController extends RESTfulResourceController
{
    /**
     * Create a new PosteController instance.
     *
     * @param \Domains\Postes\Services\RESTful\Contracts\PosteRESTfulQueryServiceContract $posteRESTfulQueryService
     *        The Poste RESTful Query Service instance.
     */
    public function __construct(PosteRESTfulReadWriteServiceContract $posteRESTfulReadWriteService, PosteRESTfulQueryServiceContract $posteRESTfulQueryService)
    {
        parent::__construct($posteRESTfulReadWriteService, $posteRESTfulQueryService);

        // Set specific request classes for store and update methods
        $this->setRequestClass('store', CreatePosteRequest::class);
        $this->setRequestClass('update', UpdatePosteRequest::class);
    }
}
