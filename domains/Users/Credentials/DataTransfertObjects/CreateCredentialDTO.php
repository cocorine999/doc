<?php

declare(strict_types=1);

namespace Domains\Users\Credentials\DataTransfertObjects;

use App\Models\Credential;
use Core\Utils\DataTransfertObjects\BaseDTO;

/**
 * Class ***`CreateCredentialDTO`***
 *
 * This class extends the ***`BaseDTO`*** class.
 * It represents the data transfer object for creating a new ***`Credential`*** model.
 *
 * @package ***`\Domains\Users\Credentials\DataTransfertObjects`***
 */
class CreateCredentialDTO extends BaseDTO
{

    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Get the class name of the model associated with the DTO.
     *
     * @return string The class name of the model.
     */
    protected function getModelClass(): string
    {
        return Credential::class;
    }

    /**
     * Get the validation rules for the DTO object.
     *
     * @return array The validation rules.
     */
    public function rules(array $rules = []): array
    {
        $rules = array_merge([
			"identifiant"           => [
                "required", "string", 'min:8', 'max:30', 'unique:credentials,identifier'],
        ], $rules);

        return $this->rules = parent::rules($rules);
    }

    /**
     * Get the validation error messages for the DTO object.
     *
     * @return array The validation error messages.
     */
    public function messages(array $messages = []): array
    {
        $default_messages = array_merge([
            'can_be_deleted.boolean' => 'Le champ can_be_deleted doit être un booléen.',
            'can_be_deleted.in'      => 'Le can_be_delete doit être "true" ou "false".'
        ], $messages);

        $messages = array_merge([], $default_messages);

        return $this->messages = parent::messages($messages);
    }
}