<?php

declare(strict_types=1);

namespace Domains\UniteMesures\Repositories;

use App\Models\UniteMesure;
use Core\Data\Repositories\Eloquent\EloquentReadWriteRepository;
use Core\Utils\Exceptions\QueryException;
use Core\Utils\Exceptions\RepositoryException;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Throwable;

/**
 * ***`UniteMesureReadWriteRepository`***
 *
 * This class extends the EloquentReadWriteRepository class, which suggests that it is responsible for providing read-only access to the UniteMesure $instance data.
 *
 * @package ***`Domains\UniteMesures\Repositories`***
 */
class UniteMesureReadWriteRepository extends EloquentReadWriteRepository
{
    /**
     * Create a new UniteMesureReadWriteRepository instance.
     *
     * @param  \App\Models\UniteMesure $model
     * @return void
     */
    public function __construct(UniteMesure $model)
    {
        parent::__construct($model);
    }
    
}