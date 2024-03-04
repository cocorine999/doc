<?php

declare(strict_types=1);

namespace Domains\Users\Repositories;

use App\Models\User;
use Core\Data\Repositories\Eloquent\EloquentReadOnlyRepository;

/**
 * ***`UserReadOnlyRepository`***
 *
 * This class extends the EloquentReadOnlyRepository class, which suggests that it is responsible for providing read-only access to the User $instance data.
 *
 * @package ***`\Domains\Users\Repositories`***
 */
class UserReadOnlyRepository extends EloquentReadOnlyRepository
{
    /**
     * Create a new UserReadOnlyRepository instance.
     *
     * @param  \App\Models\User $model
     * @return void
     */
    public function __construct(User $model)
    {
        parent::__construct($model);
    }
}