<?php

declare(strict_types=1);

namespace Domains\Roles\Repositories;

use App\Models\Role;
use Core\Data\Repositories\Eloquent\EloquentReadOnlyRepository;


/**
 * ***`RoleReadOnlyRepository`***
 *
 * This class extends the EloquentReadOnlyRepository class, which suggests that it is responsible for providing read-only access to the Role $instance data.
 *
 * @package ***`\Domains\Roles\Repositories`***
 */
class RoleReadOnlyRepository extends EloquentReadOnlyRepository
{
    /**
     * Create a new RoleReadOnlyRepository instance.
     *
     * @param  \App\Models\Role $model
     * @return void
     */
    public function __construct(Role $model)
    {
        parent::__construct($model);
    }
}