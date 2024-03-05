<?php

declare(strict_types=1);

namespace Domains\UniteTravailles\Repositories;

use App\Models\UniteTravaille;
use Core\Data\Repositories\Eloquent\EloquentReadOnlyRepository;


/**
 * ***`UniteTravailleReadOnlyRepository`***
 *
 * This class extends the EloquentReadOnlyRepository class, which suggests that it is responsible for providing read-only access to the UniteTravaille $instance data.
 *
 * @package ***`\Domains\UniteTravailles\Repositories`***
 */
class UniteTravailleReadOnlyRepository extends EloquentReadOnlyRepository
{
    /**
     * Create a new UniteTravailleReadOnlyRepository instance.
     *
     * @param  \App\Models\UniteTravaille $model
     * @return void
     */
    public function __construct(UniteTravaille $model)
    {
        parent::__construct($model);
    }
}