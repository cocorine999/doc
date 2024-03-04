<?php

declare(strict_types=1);

namespace Domains\Users\Repositories;

use App\Models\User;
use Core\Data\Repositories\Eloquent\EloquentReadWriteRepository;

/**
 * ***`UserReadWriteRepository`***
 *
 * This class extends the EloquentReadWriteRepository class, which suggests that it is responsible for providing read-only access to the User $instance data.
 *
 * @package ***`Domains\Users\Repositories`***
 */
class UserReadWriteRepository extends EloquentReadWriteRepository
{
    /**
     * Create a new UserReadWriteRepository instance.
     *
     * @param  \App\Models\User $model
     * @return void
     */
    public function __construct(User $model)
    {
        parent::__construct($model);
    }
}