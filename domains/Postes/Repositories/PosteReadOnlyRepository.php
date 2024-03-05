<?php

declare(strict_types=1);

namespace Domains\Postes\Repositories;

use App\Models\Poste;
use Core\Data\Repositories\Eloquent\EloquentReadOnlyRepository;


/**
 * ***`PosteReadOnlyRepository`***
 *
 * This class extends the EloquentReadOnlyRepository class, which suggests that it is responsible for providing read-only access to the Poste $instance data.
 *
 * @package ***`\Domains\Postes\Repositories`***
 */
class PosteReadOnlyRepository extends EloquentReadOnlyRepository
{
    /**
     * Create a new PosteReadOnlyRepository instance.
     *
     * @param  \App\Models\Poste $model
     * @return void
     */
    public function __construct(Poste $model)
    {
        parent::__construct($model);
    }
}