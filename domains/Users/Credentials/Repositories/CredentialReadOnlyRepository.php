<?php

declare(strict_types=1);

namespace Domains\Users\Credentials\Repositories;

use App\Models\Credential;
use Core\Data\Repositories\Eloquent\EloquentReadOnlyRepository;


/**
 * ***`CredentialReadOnlyRepository`***
 *
 * This class extends the EloquentReadOnlyRepository class, which suggests that it is responsible for providing read-only access to the Credential $instance data.
 *
 * @package ***`\Domains\Users\Credentials\Repositories`***
 */
class CredentialReadOnlyRepository extends EloquentReadOnlyRepository
{
    /**
     * Create a new CredentialReadOnlyRepository instance.
     *
     * @param  \App\Models\Credential $model
     * @return void
     */
    public function __construct(Credential $model)
    {
        parent::__construct($model);
    }
}