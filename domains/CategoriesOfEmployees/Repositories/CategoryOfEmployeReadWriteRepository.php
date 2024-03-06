<?php

declare(strict_types=1);

namespace Domains\CategoriesOfEmployees\Repositories;

use App\Models\CategoryOfEmploye;
use Core\Data\Repositories\Eloquent\EloquentReadWriteRepository;

/**
 * ***`CategoryOfEmployeReadWriteRepository`***
 *
 * This class extends the EloquentReadWriteRepository class, which suggests that it is responsible for providing read-only access to the CategoryOfEmploye $instance data.
 *
 * @package ***`Domains\CategoriesOfEmployees\Repositories`***
 */
class CategoryOfEmployeReadWriteRepository extends EloquentReadWriteRepository
{
    /**
     * Create a new CategoryOfEmployeReadWriteRepository instance.
     *
     * @param  \App\Models\CategoryOfEmploye $model
     * @return void
     */
    public function __construct(CategoryOfEmploye $model)
    {
        parent::__construct($model);
    }
    
}