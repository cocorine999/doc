<?php

namespace Core\Utils\Requests;

/**
 * Class **`UpdateResourceRequest`**
 *
 * This abstract class extends the base ResourceRequest class and provides a structure for handling the authorization logic specific to resource creation.
 * Concrete classes extending UpdateResourceRequest must implement the isAuthorize method to define their authorization logic.
 *
 * @package **`Core\Utils\Requests`**
 */
abstract class UpdateResourceRequest extends ResourceRequest
{
    /**
     * @var string|null
     */
    protected $resource;

    /**
     * UpdateResourceRequest constructor.
     *
     * @param \Core\Utils\DataTransfertObjects\DTOInterface $dto The Data Transfer Object (DTO) instance to associate with this request.
     * @param string $resource_name
     */
    public function __construct(\Core\Utils\DataTransfertObjects\DTOInterface $dto, string $resource_name = null)
    {
        $this->resource = $resource_name;
        parent::__construct($dto);
    }

    /**
     * Determine if the user is authorized to create the resource.
     *
     * Concrete classes must implement this method to provide their specific authorization logic for resource creation.
     *
     * @return bool Whether the user is authorized.
     */
    abstract protected function isAuthorize(): bool;

    /**
     * Authorize the user to perform the resource creation operation.
     *
     * This method is called during the authorization phase of the request lifecycle.
     * It sets the Data Transfer Object (DTO) associated with this request and then checks the concrete class's authorization.
     *
     * @return bool Whether the user is authorized.
     */
    public function authorize(): bool
    {
        // Set the Data Transfer Object (DTO) associated with this request.
        //$this->setDto($this->getDto()->fromRequest($this));
        //$this->dto = UpdateRoleDTO::fromRequest($this);
        
        $this->dto = $this->getDto()->fromRequest($this);

        // Set the "role" property of the DTO to the current role
        $this->dto->setIgnoreValue("{$this->resource}", $this->{$this->resource});

        //dd(" {$this->resource} " . $this->{$this->resource});

        // Check the concrete class's authorization.
        return $this->isAuthorize();
        // Check the concrete class's authorization.
        return parent::authorize();
    }
}