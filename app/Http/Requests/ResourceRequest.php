<?php

declare(strict_types = 1);

namespace App\Http\Requests;

use Core\Utils\Requests\UpdateResourceRequest;

/**
 * Class **`ResourceRequest`**
 *
 * Represents a form request for creating a role. This class extends the base `FormRequest` class provided by Laravel.
 * It handles the validation and authorization of the request data.
 *
 * @package **`\App\Http\Requests`**
 */
class ResourceRequest extends UpdateResourceRequest
{

    /**
     * ResourceRequest constructor.
     *
     * @param \Core\Utils\DataTransfertObjects\DTOInterface $dto The Data Transfer Object (DTO) instance to associate with this request.
     */
    public function __construct(\Core\Utils\DataTransfertObjects\DTOInterface $dto, string $resouce = null)
    {
        parent::__construct($dto, $resouce);
    }

    /**
     * Determine if the user is authorized to make this request.
     */
    public function isAuthorize(): bool
    {
        return true;
    }

}
