<?php

declare(strict_types=1);

namespace App\Models;

use Core\Data\Eloquent\Contract\ModelContract;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * Class ***`Credential`***
 *
 * This model represents the `credentials` table in the database, storing user credentials such as identifiers and passwords.
 * It extends the base `ModelContract` class, providing access to the underlying database table associated with the model.
 *
 * @property string $identifier - The identifier associated with the credential.
 * @property string $password   - The hashed password stored in the credential.
 *
 * @package ***`App\Models`***
 */
class Credential extends ModelContract
{

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'credentials';

    /**
     * The attributes that aren't mass assignable.
     *
     * @var array<int, string>
     */
    public $guarded = [
        'password', 'identifier'
    ];

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'identifier',
        'password'
    ];

    /**
     * The model's default attribute values.
     *
     * @var array<string, mixed>
     */
    protected $attributes = [
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password'
    ];

    /**
     * The attributes that should be visible in arrays.
     *
     * @var array<int, string>
     */
    protected $visible = [
        'identifier'
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'identifier'       => 'string',
        'password'         => 'hashed',
    ];

    /**
     * The accessors to append to the model's array and JSON representation.
     *
     * @var array<int, string>
     */
    protected $appends = [

    ];

    /**
     * The relationships that should always be loaded.
     *
     * @var array<int, string>
     */
    protected $with = [

    ];

    /**
     * Get the user who created the credential.
     *
     * @return BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    /**
     * Set the user of the credential.
     *
     * @param User|null $user
     * @return void
     */
    public function setCreator(?User $user): void
    {
        if ($user){
            $this->user()->associate($user);
        }
    }
}