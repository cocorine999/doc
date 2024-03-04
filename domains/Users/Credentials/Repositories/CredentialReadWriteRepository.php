<?php

declare(strict_types=1);

namespace Domains\Users\Credentials\Repositories;

use App\Models\Credential;
use Core\Data\Repositories\Eloquent\EloquentReadWriteRepository;

/**
 * ***`CredentialReadWriteRepository`***
 *
 * This class extends the EloquentReadWriteRepository class, which suggests that it is responsible for providing read-only access to the Credential $instance data.
 *
 * @package ***`Domains\Users\Credentials\Repositories`***
 */
class CredentialReadWriteRepository extends EloquentReadWriteRepository
{
    /**
     * Create a new CredentialReadWriteRepository instance.
     *
     * @param  \App\Models\Credential $model
     * @return void
     */
    public function __construct(Credential $model)
    {
        parent::__construct($model);
    }
}