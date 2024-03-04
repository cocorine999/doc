<?php

declare(strict_types=1);

namespace Domains\Permissions\Repositories;

use App\Models\Permission;
use Core\Data\Repositories\Eloquent\EloquentReadWriteRepository;


/**
 * ***`PermissionReadWriteRepository`***
 *
 * This class extends the EloquentReadWriteRepository class, which suggests that it is responsible for providing read-only access to the Permission $instance data.
 *
 * @package ***`Domains\Permissions\Repositories`***
 */
class PermissionReadWriteRepository extends EloquentReadWriteRepository
{
    /**
     * Create a new PermissionReadWriteRepository instance.
     *
     * @param  \App\Models\Permission $model
     * @return void
     */
    public function __construct(Permission $model)
    {
        parent::__construct($model);
    }
}