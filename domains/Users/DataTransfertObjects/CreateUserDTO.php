<?php

declare(strict_types=1);

namespace Domains\Users\DataTransfertObjects;

use App\Models\User;
use Core\Utils\DataTransfertObjects\BaseDTO;
use Core\Utils\Rules\PhoneNumberRule;

/**
 * Class ***`CreateUserDTO`***
 *
 * This class extends the ***`BaseDTO`*** class.
 * It represents the data transfer object for creating a new ***`User`*** model.
 *
 * @package ***`\Domains\Users\DataTransfertObjects`***
 */
class CreateUserDTO extends BaseDTO
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
        return User::class;
    }

    /**
     * Get the validation rules for the DTO object.
     *
     * @return array The validation rules.
     */
    public function rules(array $rules = []): array
    {
        $rules = array_merge([
            'type_of_account'       => ['required', 'in:personal,moral'],
            'username'              => ['sometimes', 'string', 'min:6', 'max:30', 'unique:users,username'],
            'email'                 => ['sometimes', 'email', 'max:120', 'unique:users,email'],
			"address"     		    => ["string", "sometimes"],
            'phone_number'          => ['required', new PhoneNumberRule()],
            'role_id'               => 'required|exists:roles,id'

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