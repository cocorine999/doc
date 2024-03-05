<?php

declare(strict_types=1);

namespace Domains\Postes\Repositories;

use App\Models\Poste;
use Core\Data\Repositories\Eloquent\EloquentReadWriteRepository;
use Core\Utils\Exceptions\QueryException;
use Core\Utils\Exceptions\RepositoryException;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Throwable;

/**
 * ***`PosteReadWriteRepository`***
 *
 * This class extends the EloquentReadWriteRepository class, which suggests that it is responsible for providing read-only access to the Poste $instance data.
 *
 * @package ***`Domains\Postes\Repositories`***
 */
class PosteReadWriteRepository extends EloquentReadWriteRepository
{
    /**
     * Create a new PosteReadWriteRepository instance.
     *
     * @param  \App\Models\Poste $model
     * @return void
     */
    public function __construct(Poste $model)
    {
        parent::__construct($model);
    }
    
}