<?php

declare(strict_types=1);

namespace Domains\Users\People\Repositories;

use App\Models\Person;
use Core\Data\Repositories\Eloquent\EloquentReadOnlyRepository;


/**
 * ***`PersonReadOnlyRepository`***
 *
 * This class extends the EloquentReadOnlyRepository class, which suggests that it is responsible for providing read-only access to the Person $instance data.
 *
 * @package ***`\Domains\Users\People\Repositories`***
 */
class PersonReadOnlyRepository extends EloquentReadOnlyRepository
{
    /**
     * Create a new PersonReadOnlyRepository instance.
     *
     * @param  \App\Models\Person $model
     * @return void
     */
    public function __construct(Person $model)
    {
        parent::__construct($model);
    }
}