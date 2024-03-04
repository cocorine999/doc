<?php

namespace App\Models;

use Core\Data\Eloquent\Contract\ModelContract;
use Illuminate\Database\Eloquent\Relations\Concerns\AsPivot;

class RoleHasPermission extends ModelContract
{
    use AsPivot;
}
