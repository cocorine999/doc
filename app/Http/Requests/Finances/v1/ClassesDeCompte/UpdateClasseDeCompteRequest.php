<?php

declare(strict_types = 1);

namespace App\Http\Requests\Finances\v1\ClassesDeCompte;

use Core\Utils\Requests\UpdateResourceRequest;
use Domains\Finances\ClassesDeCompte\DataTransfertObjects\UpdateClasseDeCompteDTO;

/**
 * Class **`UpdateClasseDeCompteRequest`**
 *
 * Represents a form request for creating a departement. This class extends the base `FormRequest` class provided by Laravel.
 * It handles the validation and authorization of the request data.
 *
 * @package **`\App\Http\Requests\Finances\v1\ClassesDeCompte`**
 */
class UpdateClasseDeCompteRequest extends UpdateResourceRequest
{

    public function __construct(){
        parent::__construct(UpdateClasseDeCompteDTO::fromRequest(request()), 'classe_de_compte');
    }

    /**
     * Determine if the user is authorized to make this request.
     */
    public function isAuthorize(): bool
    {
        return true;
    }
    
    public function authorize(): bool
    {
        return parent::authorize();
    }

}
