<?php

declare(strict_types=1);

namespace Domains\UniteTravailles\Repositories;

use App\Models\UniteTravaille;
use Core\Data\Repositories\Eloquent\EloquentReadWriteRepository;
use Core\Utils\Exceptions\QueryException;
use Core\Utils\Exceptions\RepositoryException;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Throwable;

/**
 * ***`UniteTravailleReadWriteRepository`***
 *
 * This class extends the EloquentReadWriteRepository class, which suggests that it is responsible for providing read-only access to the UniteTravaille $instance data.
 *
 * @package ***`Domains\UniteTravailles\Repositories`***
 */
class UniteTravailleReadWriteRepository extends EloquentReadWriteRepository
{
    /**
     * Create a new UniteTravailleReadWriteRepository instance.
     *
     * @param  \App\Models\UniteTravaille $model
     * @return void
     */
    public function __construct(UniteTravaille $model)
    {
        parent::__construct($model);
    }
    
}