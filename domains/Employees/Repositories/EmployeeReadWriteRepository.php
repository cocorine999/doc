<?php

declare(strict_types=1);

namespace Domains\Employees\Repositories;

use App\Models\Employee;
use Core\Data\Repositories\Eloquent\EloquentReadWriteRepository;
use Core\Utils\Exceptions\QueryException;
use Core\Utils\Exceptions\RepositoryException;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Throwable;

/**
 * ***`EmployeeReadWriteRepository`***
 *
 * This class extends the EloquentReadWriteRepository class, which suggests that it is responsible for providing read-only access to the Employee $instance data.
 *
 * @package ***`Domains\Employees\Repositories`***
 */
class EmployeeReadWriteRepository extends EloquentReadWriteRepository
{
    /**
     * Create a new EmployeeReadWriteRepository instance.
     *
     * @param  \App\Models\Employee $model
     * @return void
     */
    public function __construct(Employee $model)
    {
        parent::__construct($model);
    }
    
}