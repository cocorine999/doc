<?php

namespace App\Models;

use Core\Data\Eloquent\Contract\ModelContract;
use Illuminate\Database\Eloquent\Relations\Concerns\AsPivot;

class RoleHasPermission extends ModelContract
{
    use AsPivot;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'role_has_permissions';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'role_id',
        'permission_id'
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
