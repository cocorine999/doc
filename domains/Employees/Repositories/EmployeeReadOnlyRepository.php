<?php

declare(strict_types=1);

namespace Domains\Employees\Repositories;

use App\Models\Employee;
use Core\Data\Repositories\Eloquent\EloquentReadOnlyRepository;


/**
 * ***`EmployeeReadOnlyRepository`***
 *
 * This class extends the EloquentReadOnlyRepository class, which suggests that it is responsible for providing read-only access to the Employee $instance data.
 *
 * @package ***`\Domains\Employees\Repositories`***
 */
class EmployeeReadOnlyRepository extends EloquentReadOnlyRepository
{
    /**
     * Create a new EmployeeReadOnlyRepository instance.
     *
     * @param  \App\Models\Employee $model
     * @return void
     */
    public function __construct(Employee $model)
    {
        parent::__construct($model);
    }
}