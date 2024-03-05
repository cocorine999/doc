<?php

declare(strict_types=1);

namespace Domains\Departements\Repositories;

use App\Models\Departement;
use Core\Data\Repositories\Eloquent\EloquentReadWriteRepository;
use Core\Utils\Exceptions\QueryException;
use Core\Utils\Exceptions\RepositoryException;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Throwable;

/**
 * ***`DepartementReadWriteRepository`***
 *
 * This class extends the EloquentReadWriteRepository class, which suggests that it is responsible for providing read-only access to the Departement $instance data.
 *
 * @package ***`Domains\Departements\Repositories`***
 */
class DepartementReadWriteRepository extends EloquentReadWriteRepository
{
    /**
     * Create a new DepartementReadWriteRepository instance.
     *
     * @param  \App\Models\Departement $model
     * @return void
     */
    public function __construct(Departement $model)
    {
        parent::__construct($model);
    }
    
}