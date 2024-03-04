<?php

namespace App\Models;

use Core\Data\Eloquent\Contract\ModelContract;
use Illuminate\Database\Eloquent\Relations\Concerns\AsPivot;

class UserHasRole extends ModelContract
{
    use AsPivot;
}
