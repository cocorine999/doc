<?php

declare(strict_types=1);

namespace Core\Utils\Enums;

use Core\Utils\Enums\Contract\EnumContract;
use Core\Utils\Traits\IsEnum;

/**
 * Class ***`StatutEmployeeEnum`***
 *
 * This class represents the type that statutemployee can have
 *
 * The default statutemployee is set to `article`.
 *
 * @method static array labels()
 *     Get the labels for the type.
 *     Returns an array with the labels for the type, where the keys are the statutemployee constants and the values are the corresponding labels.
 * 
 * @method static array descriptions()
 *     Get the descriptions for the statutemployee.
 *     Returns an array with the available statutemployee descriptions.
 * 
 * @method string resolveGender()
 *     Returns the appropriate title based on the `statutemployee` enum instance.
 * 
 * @package ***`\Core\Utils\Enums\Users`***
 */
enum StatutEmployeeEnum: string implements EnumContract
{
    use IsEnum;

    /**
     * Represents the statutemployee "en_service".
     *
     * @var string
     */
    case EN_SERVICE = 'en_service';

    /**
     * Represents the statutemployee "suspendu".
     *
     * @var string
     */
    case SUSPENDU = 'suspendu';

    /**
     * Represents the statutemployee "en_conge".
     *
     * @var string
     */
    case EN_CONGE = 'en_conge';

    /**
     * The default statutemployee value.
     * 
     * @return string
     */
    public const DEFAULT          = self::EN_SERVICE->value; //self::EN_SERVICE;
    
    /**
     * The fallback statutemployee value.
     * 
     * @return string
     */
    public const FALLBACK         = self::EN_SERVICE->value; //self::EN_SERVICE;

    /**
     * Get the labels for the StatutEmployee.
     *
     * @return array The labels for the statutemployee.
     */
    public static function labels(): array
    {
        return [
            self::EN_SERVICE->value     => 'en_service',
            self::SUSPENDU->value   => 'suspendu',
            self::EN_CONGE->value   => 'en_conge',
        ];
    }

    /**
     * Get all the StatutEmployee enum descriptions as an array.
     *
     * @return array An array containing all the descriptions for the enum values.
     */
    public static function descriptions(): array
    {
        return [
            self::EN_SERVICE->value     => 'Represents the "en_service".',
            self::SUSPENDU->value   => 'Represents the "suspendu".',
            self::EN_CONGE->value   => 'Represents the "en_conge".',
        ];
        
    }

}