<?php

declare(strict_types=1);

namespace App\Models;

use Core\Data\Eloquent\Casts\PhoneNumberCast;
use Core\Data\Eloquent\Contract\ModelContract;
use Core\Utils\Enums\Users\MaritalStatusEnum;
use Core\Utils\Enums\Users\SexEnum;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Relations\MorphOne;

/**
 * Class ***`Person`***
 *
 * The `Person` class represents individuals in the system, providing a comprehensive model for personal information.
 * It extends the `ModelContract` class, mapping to the `people` table in the PostgreSQL database.
 * This class encompasses attributes such as name, contact details, gender, marital status, and more, making it a versatile entity
 * for managing personal information within the application.
 *
 * @package ***`App\Models`***
 *
 * @property string                 $last_name      - The last name of the person.
 * @property string                 $first_name     - The first name of the person.
 * @property string                 $middle_name    - The middle name of the person.
 * @property string                 $birth_date     - The birth date of the person.
 * @property SexEnum                $sex            - The gender of the person, using the `SexEnum` enumeration.
 * @property MaritalStatusEnum      $marital_status - The marital status of the person, using the `MaritalStatusEnum` enumeration.
 * @property int                    $nip            - The National Identification Number of the person.
 * @property int                    $ifu            - The Individual Tax Identification Number of the person.
 * @property string                 $nationality    - The nationality of the person.
 *
 * @property-read string            $full_name      - A computed attribute representing the full name of the person.
 * @property-read string            $gender         - A computed attribute representing the gender title of the person.
 *
 * @method Attribute first_name()                   - An Eloquent attribute casting method for interacting with the first name.
 * @method Attribute last_name()                    - An Eloquent attribute casting method for interacting with the last name.
 * @method Attribute middle_name()                  - An Eloquent attribute casting method for interacting with the middle name.
 *
 * @method MorphOne user()                          - Eloquent relationship method to define the morphOne relationship with the `User` model.
 */
class Person extends ModelContract
{
    /**
     * The database connection that should be used by the model.
     *
     * @var string
     */
    protected $connection = 'pgsql';

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'people';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'last_name',
        'first_name',
        'middle_name',
        'birth_date',
        'sex',
        'marital_status',
        'nip',
        'ifu',
        'nationality'
    ];

    /**
     * The attributes that should be treated as dates.
     *
     * @var array<int, string>
     */
    protected $dates = [
        'birth_date',        
    ];

    /**
     * The model's default attribute values.
     *
     * @var array<string, mixed>
     */
    protected $attributes = [
        'sex'                       => SexEnum::DEFAULT,  // Default value for 'sex' attribute
        'marital_status'            => MaritalStatusEnum::DEFAULT,  // Default value for 'marital_status' attribute
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'email'
    ];

    /**
     * The attributes that should be visible in arrays.
     *
     * @var array<int, string>
     */
    protected $visible = [
        'last_name',
        'first_name',
        'middle_name',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'last_name'                 => 'string',
        'first_name'                => 'string',
        'middle_name'               => 'json',
        'sex'                       => SexEnum::class,
        'marital_status'            => MaritalStatusEnum::class,
        'birth_date'                => 'datetime:Y-m-d',
        'nip'                       => 'integer:11',
        'ifu'                       => 'integer:11',
        'nationality'               => 'string',
    ];

    /**
     * The accessors to append to the model's array and JSON representation.
     *
     * @var array<int, string>
     */
    protected $appends = [
        'full_name'
    ];


    /**
     * Get the user's full name attribute.
     *
     * @return string The user's full name.
     */
    public function getFullNameAttribute(): string
    {
        return "{$this->getGenderAttribute()} {$this->first_name} {$this->last_name}";
    }

    /**
     * Get the user's gender attribute.
     *
     * This method retrieves the gender of the user.
     *
     * @return string The user's gender.
     */
    public function getGenderAttribute(): string
    {
        return $this->sex->value === 'male' ?  'Mr.' : $this->marital_status->resolveTitle();
    }

    /**
     * Interact with the user's first name.
     * 
     * @return Attribute
     */
    protected function first_name(): Attribute
    {
        return Attribute::make(
            get: fn (string $value) => ucfirst($value),
            set: fn (string $value) => strtolower($value)
        );
    }

    /**
     * Interact with the user's last name.
     * 
     * @return Attribute
     */
    protected function last_name(): Attribute
    {
        return Attribute::make(
            get: fn (string $value) => strtoupper($value),
            set: fn (string $value) => strtoupper($value)
        );
    }

    /**
     * Interact with the user's middle name.
     * 
     * @return Attribute
     */
    protected function middle_name(): Attribute
    {
        return Attribute::make(
            get: fn (string $value) => implode(', ', json_decode($value)),
            set: function (string|array $value) {
                if (is_array($value)) {
                    $value = json_encode($value);
                }
                $this->attributes['middle_name'] = $value;
            }
        );
    }

    /**
     * Get the user's morphed relation.
     *
     * @return MorphOne
     */
    public function user(): MorphOne
    {
        return $this->morphOne(User::class, 'userable');
    }
}