<?php

declare(strict_types=1);

namespace Domains\Departements\Repositories;

use App\Models\Departement;
use Core\Data\Repositories\Eloquent\EloquentReadOnlyRepository;


/**
 * ***`DepartementReadOnlyRepository`***
 *
 * This class extends the EloquentReadOnlyRepository class, which suggests that it is responsible for providing read-only access to the Departement $instance data.
 *
 * @package ***`\Domains\Departements\Repositories`***
 */
class DepartementReadOnlyRepository extends EloquentReadOnlyRepository
{
    /**
     * Create a new DepartementReadOnlyRepository instance.
     *
     * @param  \App\Models\Departement $model
     * @return void
     */
    public function __construct(Departement $model)
    {
        parent::__construct($model);
    }
}