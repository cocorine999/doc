<?php

namespace App\Http\Requests;

use Core\Utils\Requests\CreateResourceRequest;
use Domains\Roles\DataTransfertObjects\CreateRoleDTO;

class RoleRequest extends CreateResourceRequest
{

    public function __construct(){
        parent::__construct(new CreateRoleDTO);
    }

    /**
     * Determine if the user is authorized to make this request.
     */
    public function isAuthorize(): bool
    {
        return true;
    }
}
