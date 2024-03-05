<?php

namespace App\Models;

use Core\Data\Eloquent\Contract\ModelContract;
use Illuminate\Database\Eloquent\Relations\Concerns\AsPivot;

class UserHasRole extends ModelContract
{
    use AsPivot;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'user_has_roles';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'user_id',
        'role_id'
    ];

    public function deleteable(): string
    {
        return "can_be_detach";
    }

    public function authorable(): string
    {
        return "attached_by";
    }
}
