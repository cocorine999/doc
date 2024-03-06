<?php

declare(strict_types=1);

namespace App\Models;

use Core\Data\Eloquent\Contract\ModelContract;
use Core\Utils\Enums\TypeUniteTravailleEnum;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * Class ***`UniteTravaille`***
 *
 * This model represents the `unite_travailles` table in the database.
 * It extends the ModelContract class and provides access to the database table associated with the model.
 *
 * @property  string    $name;
 *
 * @package ***`\App\Models`***
 */
class UniteTravaille extends ModelContract
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
    protected $table = 'unite_travailles';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'hint',
        'rate',
        'unite_mesure_id',
        'article_id',
        'type_of_unite_travaille'
    ];

    /**
     * The attributes that should be visible in arrays.
     *
     * @var array<int, string>
     */
    protected $visible = [
        'name', 'hint','rate',
        'type_of_unite_travaille',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'name'                      => 'string',
        'hint'                      => 'decimal:2',
        'rate'                      => 'decimal:2',
        'unite_mesure_id'           => 'string',
        'article_id'                => 'string',
        'type_of_unite_travaille'   => TypeUniteTravailleEnum::class,
    ];

    /**
     * The relationships that should always be loaded.
     *
     * @var array<int, string>
     */
    protected $with = [
        
    ];
    
    /**
     * The accessors to append to the model's array and JSON representation.
     *
     * @var array<int, string>
     */
    protected $appends = [
        'unite_mesure_symbol'
    ];

    /**
     * Get the Unit mesure of the unitTravaille.
     *
     * @return BelongsTo
     */
    public function uniteMesure(): BelongsTo
    {
        return $this->belongsTo(UniteMesure::class, 'unite_mesure_id');
    }

    /**
     * Get the user's full name attribute.
     *
     * @return string The user's full name.
     */
    public function getUniteMesureSymbolAttribute(): string
    {
        return $this->uniteMesure->symbol ;
    }

    /**
     * Get the Unit mesure of the unitTravaille.
     *
     * @return BelongsTo
     */
    public function article(): BelongsTo
    {
        return $this->belongsTo(Article::class, 'article_id');
    }

    /**
     * Interact with the UniteTravaille's name.
     */
    protected function name(): Attribute
    {
        return Attribute::make(
            get: function (string|null $value) {
                return ucfirst($value);
                if($this->type_of_unite_travaille->value === 'article'){
                    return ucfirst($this->article->name);
                }
                else return ucfirst($value);
            },
            set: fn (string $value) => strtolower($value)
        );
    }
}