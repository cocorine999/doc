<?php

namespace App\Http\Requests;

use App\Http\Requests\Contracts\BaseRequestInterface;
use Core\Utils\DataTransfertObjects\DTOInterface;
use Illuminate\Foundation\Http\FormRequest;

/**
 * Class BaseRequest
 *
 * This abstract class serves as the foundation for custom request classes in Laravel.
 * It extends the FormRequest class and implements the BaseRequestInterface.
 * Concrete classes extending BaseRequest must provide their implementation for isAuthorize.
 *
 * @package App\Http\Requests
 */
abstract class BaseRequest extends FormRequest implements BaseRequestInterface
{
    /**
     * The data transfer object (DTO) associated with this class.
     *
     * @var DTOInterface
     */
    private DTOInterface $dto;

    /**
     * BaseRequest constructor.
     *
     * @param DTOInterface $dto The Data Transfer Object (DTO) instance to associate with this request.
     */
    public function __construct(DTOInterface $dto)
    {
        $this->dto = $dto;
    }

    /**
     * Determine if the user is authorized to make this request.
     *
     * Concrete classes must implement this method to provide their authorization logic.
     *
     * @return bool
     */
    abstract protected function isAuthorize(): bool;


    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return $this->isAuthorize();
    }
    /**
     * Get the validation rules that apply to the request.
     *
     * Uses the DTO's rules() method to define the validation rules.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return $this->dto->rules();
    }

    /**
     * Get the validation error messages.
     *
     * Uses the DTO's messages() method to define the validation error messages.
     *
     * @return array<string, string|array>
     */
    public function messages()
    {
        return $this->dto->messages();
    }

    /**
     * Get the data transfer object (DTO) associated with this class.
     *
     * @return DTOInterface|null The data transfer object (DTO) instance, or null if not set.
     */
    public function getDto(): ?DTOInterface
    {
        return $this->dto;
    }

    /**
     * Set the Data Transfer Object (DTO) associated with this request.
     *
     * @param DTOInterface $dto The Data Transfer Object (DTO) instance to set.
     */
    public function setDto(DTOInterface $dto): void
    {
        $this->dto = $dto;
    }
}
