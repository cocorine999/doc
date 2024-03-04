<?php

declare(strict_types = 1);

namespace App\Http\Requests\Contracts;

/**
 * Interface BaseRequestInterface
 * 
 * This interface serves as a contract for custom request classes, defining methods related to handling Data Transfer Objects (DTOs).
 * 
 * A Data Transfer Object (DTO) is an object that carries data between processes, acting as a container for data and allowing for cleaner and more organized code.
 *
 * By implementing this interface, custom request classes can provide a consistent way to interact with and manage associated DTOs.
 *
 * @package App\Http\Requests\Contracts
 */
interface BaseRequestInterface
{
    /**
     * Get the data transfer object (DTO) associated with this class.
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
}