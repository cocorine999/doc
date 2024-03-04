<?php

declare(strict_types = 1);

namespace Core\Utils\Requests\Contracts;

/**
 * Interface **`ResourceRequestInterface`**
 * 
 * This interface serves as a contract for request classes that handle various resource operations.
 * Classes implementing this interface should provide methods for validation, authorization, and data retrieval
 * specific to the corresponding resource operation.
 * 
 * @package **`Core\Utils\Requests\Contracts`**
 */
interface ResourceRequestInterface
{
    /**
     * Get the data transfer object (DTO) associated with this request.
     *
     * @return \Core\Utils\DataTransfertObjects\DTOInterface|null The data transfer object (DTO) instance, or null if not set.
     */
    public function getDto(): ?\Core\Utils\DataTransfertObjects\DTOInterface;

    /**
     * Set the Data Transfer Object (DTO) associated with this request.
     *
     * @param \Core\Utils\DataTransfertObjects\DTOInterface $dto The Data Transfer Object (DTO) instance to set.
     */
    public function setDto(\Core\Utils\DataTransfertObjects\DTOInterface $dto): void;

    /**
     * Validate the request data and return the validated data.
     *
     * @return array The validated data.
     */
    public function validate(): array;

    /**
     * Authorize the user to perform the resource operation.
     *
     * @return bool Whether the user is authorized.
     */
    public function authorize(): bool;

    /**
     * Process the request data and return the data transfer object (DTO) for the resource operation.
     *
     * @return \Core\Utils\DataTransfertObjects\DTOInterface The data transfer object (DTO) for the resource operation.
     */
    public function process(): \Core\Utils\DataTransfertObjects\DTOInterface;

    /**
     * Get additional validation rules for the resource operation.
     *
     * @return array Additional validation rules.
     */
    public function additionalRules(): array;

    /**
     * Get additional validation messages for the resource operation.
     *
     * @return array Additional validation messages.
     */
    public function additionalMessages(): array;
}