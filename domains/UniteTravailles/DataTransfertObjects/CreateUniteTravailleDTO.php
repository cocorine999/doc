<?php

declare(strict_types=1);

namespace Domains\UniteTravailles\DataTransfertObjects;

use App\Models\UniteTravaille;
use Core\Utils\Rules\ExistsForAuthUserAndUUID;
use Core\Utils\DataTransfertObjects\BaseDTO;
use Core\Utils\Enums\TypeUniteTravailleEnum;
use Illuminate\Validation\Rules\Enum;

/**
 * Class ***`CreateUniteTravailleDTO`***
 *
 * This class extends the ***`BaseDTO`*** class.
 * It represents the data transfer object for creating a new ***`UniteTravaille`*** model.
 *
 * @package ***`\Domains\UniteTravailles\DataTransfertObjects`***
 */
class CreateUniteTravailleDTO extends BaseDTO
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
        return UniteTravaille::class;
    }

    /**
     * Get the validation rules for the DTO object.
     *
     * @return array The validation rules.
     */
    public function rules(array $rules = []): array
    {
        $rules = array_merge([
            "name"            		=> ["string", "required", 'min:2', 'max:25' ,'unique:unite_travailles,name'],
            "hint"                  => ["required","decimal"],
            "rate"                  => ["required","decimal"],
            "symbol"                => ["required","string"],
            "unite_mesure_id"       => ["required",'exists:unite_mesures,id'],
            "article_id"            => ["sometimes",'exists:articles,id'],
            "type_of_unite_travaille" => ['required', "string", new Enum(TypeUniteTravailleEnum::class)],
            'can_be_deleted'        => ['sometimes', 'boolean', 'in:'.true.','.false],
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