<?php

declare(strict_types=1);

namespace Domains\CategoriesOfEmployees\Repositories;

use App\Models\CategoryOfEmploye;
use Core\Data\Repositories\Eloquent\EloquentReadOnlyRepository;


/**
 * ***`CategoryOfEmployeReadOnlyRepository`***
 *
 * This class extends the EloquentReadOnlyRepository class, which suggests that it is responsible for providing read-only access to the CategoryOfEmploye $instance data.
 *
 * @package ***`\Domains\CategoriesOfEmployees\Repositories`***
 */
class CategoryOfEmployeReadOnlyRepository extends EloquentReadOnlyRepository
{
    /**
     * Create a new CategoryOfEmployeReadOnlyRepository instance.
     *
     * @param  \App\Models\CategoryOfEmploye $model
     * @return void
     */
    public function __construct(CategoryOfEmploye $model)
    {
        parent::__construct($model);
    }
}