<?php

declare(strict_types = 1);

namespace App\Http\Controllers\API\RESTful\V1;

use App\Http\Requests\UniteMesures\v1\CreateUniteMesureRequest;
use App\Http\Requests\UniteMesures\v1\UpdateUniteMesureRequest;
use Core\Utils\Controllers\RESTful\RESTfulResourceController;
use Domains\UniteMesures\Services\RESTful\Contracts\UniteMesureRESTfulQueryServiceContract;
use Domains\UniteMesures\Services\RESTful\Contracts\UniteMesureRESTfulReadWriteServiceContract;

/**
 * **`UniteMesureController`**
 *
 * Controller for managing unite_mesure resources. This controller extends the RESTfulController
 * and provides CRUD operations for unite_mesure resources.
 *
 * @package **`\App\Http\Controllers\APIs\RESTful\V1`**
 */
class UniteMesureController extends RESTfulResourceController
{
    /**
     * Create a new UniteMesureController instance.
     *
     * @param \Domains\UniteMesures\Services\RESTful\Contracts\UniteMesureRESTfulQueryServiceContract $posteRESTfulQueryService
     *        The UniteMesure RESTful Query Service instance.
     */
    public function __construct(UniteMesureRESTfulReadWriteServiceContract $uniteMesureRESTfulReadWriteService, UniteMesureRESTfulQueryServiceContract $uniteMesureRESTfulQueryService)
    {
        parent::__construct($uniteMesureRESTfulReadWriteService, $uniteMesureRESTfulQueryService);

        // Set specific request classes for store and update methods
        $this->setRequestClass('store', CreateUniteMesureRequest::class);
        $this->setRequestClass('update', UpdateUniteMesureRequest::class);
    }
}
