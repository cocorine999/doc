<?php

declare(strict_types=1);

namespace Core\Utils\Enums;

use Core\Utils\Enums\Contract\EnumContract;
use Core\Utils\Traits\IsEnum;

/**
 * Class ***`TypeEmployeeEnum`***
 *
 * This class represents the type that typeemployee can have
 *
 * The default typeemployee is set to `article`.
 *
 * @method static array labels()
 *     Get the labels for the type.
 *     Returns an array with the labels for the type, where the keys are the typeemployee constants and the values are the corresponding labels.
 * 
 * @method static array descriptions()
 *     Get the descriptions for the typeemployee.
 *     Returns an array with the available typeemployee descriptions.
 * 
 * @method string resolveGender()
 *     Returns the appropriate title based on the `typeemployee` enum instance.
 * 
 * @package ***`\Core\Utils\Enums\Users`***
 */
enum TypeEmployeeEnum: string implements EnumContract
{
    use IsEnum;

    /**
     * Represents the typeemployee "regulier".
     *
     * @var string
     */
    case REGULIER = 'regulier';

    /**
     * Represents the typeemployee "non_regulier".
     *
     * @var string
     */
    case NON_REGULIER = 'non_regulier';

    /**
     * The default typeemployee value.
     * 
     * @return string
     */
    public const DEFAULT          = self::REGULIER->value; //self::REGULIER;
    
    /**
     * The fallback typeemployee value.
     * 
     * @return string
     */
    public const FALLBACK         = self::REGULIER->value; //self::REGULIER;

    /**
     * Get the labels for the typeemployee.
     *
     * @return array The labels for the typeemployee.
     */
    public static function labels(): array
    {
        return [
            self::REGULIER->value     => 'regulier',
            self::NON_REGULIER->value   => 'non_regulier',
        ];
    }

    /**
     * Get all the typeemployee enum descriptions as an array.
     *
     * @return array An array containing all the descriptions for the enum values.
     */
    public static function descriptions(): array
    {
        return [
            self::REGULIER->value     => 'Represents the "regulier".',
            self::NON_REGULIER->value   => 'Represents the "non_regulier".',
        ];
        
    }

}