<?php

declare(strict_types=1);

namespace Domains\UniteMesures\Repositories;

use App\Models\UniteMesure;
use Core\Data\Repositories\Eloquent\EloquentReadOnlyRepository;


/**
 * ***`UniteMesureReadOnlyRepository`***
 *
 * This class extends the EloquentReadOnlyRepository class, which suggests that it is responsible for providing read-only access to the UniteMesure $instance data.
 *
 * @package ***`\Domains\UniteMesures\Repositories`***
 */
class UniteMesureReadOnlyRepository extends EloquentReadOnlyRepository
{
    /**
     * Create a new UniteMesureReadOnlyRepository instance.
     *
     * @param  \App\Models\UniteMesure $model
     * @return void
     */
    public function __construct(UniteMesure $model)
    {
        parent::__construct($model);
    }
}