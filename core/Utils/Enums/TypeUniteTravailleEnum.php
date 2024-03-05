<?php

declare(strict_types=1);

namespace Core\Utils\Enums;

use Core\Utils\Enums\Contract\EnumContract;
use Core\Utils\Traits\IsEnum;

/**
 * Class ***`TypeUniteTravailleEnum`***
 *
 * This class represents the type that typeunitetravaille can have
 *
 * The default typeUniteTravaille is set to `article`.
 *
 * @method static array labels()
 *     Get the labels for the type.
 *     Returns an array with the labels for the type, where the keys are the typeunitetravaille constants and the values are the corresponding labels.
 * 
 * @method static array descriptions()
 *     Get the descriptions for the typeunitetravaille.
 *     Returns an array with the available typeunitetravaille descriptions.
 * 
 * @method string resolveGender()
 *     Returns the appropriate title based on the `typeunitetravaille` enum instance.
 * 
 * @package ***`\Core\Utils\Enums\Users`***
 */
enum TypeUniteTravailleEnum: string implements EnumContract
{
    use IsEnum;

    /**
     * Represents the typeunitetravaille "male".
     *
     * @var string
     */
    case ARTICLE = 'article';

    /**
     * Represents the typeunitetravaille "temps".
     *
     * @var string
     */
    case TEMPS = 'temps';

    /**
     * The default typeunitetravaille value.
     * 
     * @return string
     */
    public const DEFAULT          = self::ARTICLE->value; //self::ARTICLE;
    
    /**
     * The fallback typeunitetravaille value.
     * 
     * @return string
     */
    public const FALLBACK         = self::ARTICLE->value; //self::ARTICLE;

    /**
     * Get the labels for the TypeUnieTravaille.
     *
     * @return array The labels for the typeunitetravaille.
     */
    public static function labels(): array
    {
        return [
            self::ARTICLE->value     => 'Article',
            self::TEMPS->value   => 'Temps',
        ];
    }

    /**
     * Get all the TypeUnieTravaille enum descriptions as an array.
     *
     * @return array An array containing all the descriptions for the enum values.
     */
    public static function descriptions(): array
    {
        return [
            self::ARTICLE->value     => 'Represents the "article".',
            self::TEMPS->value   => 'Represents the "temps".',
        ];
        
    }

}