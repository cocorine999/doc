<?php

declare(strict_types = 1);

namespace App\Http\Requests\Permissions\v1;

use Illuminate\Foundation\Http\FormRequest;
use Domains\Permissions\DataTransfertObjects\CreatePermissionDTO;

/**
 * Class **`CreatePermissionDTO`**
 *
 * Represents a form request for creating a permission. This class extends the base `FormRequest` class provided by Laravel.
 * It handles the validation and authorization of the request data.
 *
 *
 * @property private \Domains\Permissions\DataTransfertObjects\CreatePermissionDTO|null $dto
 *      The data transfer object (DTO) associated with this class.
 *
 * @method bool authorize()
 *      This method determines if the permission is authorized to make the request. In this case, it sets the DTO
 *      by calling the static `fromArray()` method of the ***`CreatePermissionDTO`*** class and returns true to
 *      indicate authorization.
 * @method array rules()
 *      This method defines the validation rules for the request.
 *      It retrieves the validation rules from the DTO's **`rules()`** method and returns them.
 * @method array messages()
 *      This method defines the custom error messages for validation failures.
 *      It retrieves the error messages from the DTO's **`messages()`** method and returns them.
 * @method CreatePermissionDTO|null getDto()
 *      Get the data transfer object (DTO) associated with this class.
 * @method void setDto()
 *      This method sets the data transfer object (DTO) associated with this class.
 *
 * @package **`\App\Http\Requests\Permissions\v1`**
 */
class CreatePermissionRequest extends FormRequest
{

    /**
     * The data transfer object (DTO) associated with this class.
     *
     * @var \Domains\Permissions\DataTransfertObjects\CreatePermissionDTO|null
     */
    private CreatePermissionDTO $dto;

    /**
     * Determine if the permission is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        $this->dto = CreatePermissionDTO::fromRequest($this);
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        // Use the DTO's rules() method to define the validation rules
        return $this->dto->rules();
    }

    /**
     * Get the validation error messages.
     *
     * @return array
     */
    public function messages()
    {
        // Use the DTO's messages() method to define the validation error messages
        return $this->dto->messages();
    }

    /**
     * Get the data transfer object (DTO) associated with this class.
     *
     * @return \Domains\Permissions\DataTransfertObjects\CreatePermissionDTO|null The data transfer object (DTO) instance.
     */
    public function getDto(): ?CreatePermissionDTO
    {
        return $this->dto;
    }

    /**
     * Set the data transfer object (DTO) associated with this class.
     *
     * @param  \Domains\Permissions\DataTransfertObjects\CreatePermissionDTO $dto The data transfer object (DTO) instance to set.
     * @return void
     */
    public function setDto(CreatePermissionDTO $dto): void
    {
        $this->dto = $dto;
    }
}
