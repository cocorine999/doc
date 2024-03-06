<?php

declare(strict_types = 1);

namespace App\Http\Controllers\API\RESTful\V1;

use App\Http\Requests\UniteTravailles\v1\CreateUniteTravailleRequest;
use App\Http\Requests\UniteTravailles\v1\UpdateUniteTravailleRequest;
use Core\Utils\Controllers\RESTful\RESTfulResourceController;
use Domains\UniteTravailles\Services\RESTful\Contracts\UniteTravailleRESTfulQueryServiceContract;
use Domains\UniteTravailles\Services\RESTful\Contracts\UniteTravailleRESTfulReadWriteServiceContract;

/**
 * **`UniteTravailleController`**
 *
 * Controller for managing poste resources. This controller extends the RESTfulController
 * and provides CRUD operations for poste resources.
 *
 * @package **`\App\Http\Controllers\APIs\RESTful\V1`**
 */
class UniteTravailleController extends RESTfulResourceController
{
    /**
     * Create a new UniteTravailleController instance.
     *
     * @param \Domains\UniteTravailles\Services\RESTful\Contracts\UniteTravailleRESTfulQueryServiceContract $posteRESTfulQueryService
     *        The UniteTravaille RESTful Query Service instance.
     */
    public function __construct(UniteTravailleRESTfulReadWriteServiceContract $uniteTravailleRESTfulReadWriteService, UniteTravailleRESTfulQueryServiceContract $uniteTravailleRESTfulQueryService)
    {
        parent::__construct($uniteTravailleRESTfulReadWriteService, $uniteTravailleRESTfulQueryService);


        // Set specific request classes for store and update methods
        $this->setRequestClass('store', CreateUniteTravailleRequest::class);
        $this->setRequestClass('update', UpdateUniteTravailleRequest::class);
    }
}
