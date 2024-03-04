<?php

declare(strict_types=1);

namespace Domains\Permissions\Repositories;

use App\Models\Permission;
use Core\Data\Repositories\Eloquent\EloquentReadOnlyRepository;


/**
 * ***`PermissionReadOnlyRepository`***
 *
 * This class extends the EloquentReadOnlyRepository class, which suggests that it is responsible for providing read-only access to the Permission $instance data.
 *
 * @package ***`\Domains\Permissions\Repositories`***
 */
class PermissionReadOnlyRepository extends EloquentReadOnlyRepository
{
    /**
     * Create a new PermissionReadOnlyRepository instance.
     *
     * @param  \App\Models\Permission $model
     * @return void
     */
    public function __construct(Permission $model)
    {
        parent::__construct($model);
    }
}