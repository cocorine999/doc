<?php

declare(strict_types=1);

namespace App\Models;

use Core\Data\Eloquent\Contract\ModelContract;
use Core\Data\Eloquent\ORMs\HasPermissions;
use Core\Utils\Helpers\Sluggable\HasSlug;
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
    use HasSlug, HasPermissions;

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
        'symbol',
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
        'unite_mesure','article_name'
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
    public function getUniteMesureAttribute(): string
    {
        return $this->uniteMesure->name ;
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
     * Get the user's full name attribute.
     *
     * @return string The user's full name.
     */
    public function getArticleNameAttribute(): string
    {
        return $this->article->name ;
    }

    /**
     * Interact with the UniteTravaille's name.
     */
    protected function name(): Attribute
    {
        return Attribute::make(
            get: fn (string $value) => ucfirst($value),
            set: fn (string $value) => strtolower($value)
        );
    }
}