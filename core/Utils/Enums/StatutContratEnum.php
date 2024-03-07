<?php

declare(strict_types=1);

namespace Core\Utils\Enums;

use Core\Utils\Enums\Contract\EnumContract;
use Core\Utils\Traits\IsEnum;

/**
 * Class ***`StatutContratEnum`***
 *
 * This class represents the type that statutcontrat can have
 *
 * The default statutcontrat is set to `article`.
 *
 * @method static array labels()
 *     Get the labels for the type.
 *     Returns an array with the labels for the type, where the keys are the statutcontrat constants and the values are the corresponding labels.
 * 
 * @method static array descriptions()
 *     Get the descriptions for the statutcontrat.
 *     Returns an array with the available statutcontrat descriptions.
 * 
 * @method string resolveGender()
 *     Returns the appropriate title based on the `statutcontrat` enum instance.
 * 
 * @package ***`\Core\Utils\Enums\Users`***
 */
enum StatutContratEnum: string implements EnumContract
{
    use IsEnum;

    /**
     * Represents the statutcontrat "en_attente".
     *
     * @var string
     */
    case EN_ATTENTE = 'en_attente';

    /**
     * Represents the statutcontrat "en_cours".
     *
     * @var string
     */
    case EN_COURS = 'en_cours';

    /**
     * Represents the statutcontrat "terminer".
     *
     * @var string
     */
    case TERMINER = 'terminer';

    /**
     * Represents the statutcontrat "suspendu".
     *
     * @var string
     */
    case SUSPENDU = 'suspendu';

    /**
     * Represents the statutcontrat "resilier".
     *
     * @var string
     */
    case RESILIER = 'resilier';
     
    /**
     * The default statutcontrat value.
     * 
     * @return string
     */
    public const DEFAULT          = self::EN_COURS->value; //self::EN_COURS;
    
    /**
     * The fallback statutcontrat value.
     * 
     * @return string
     */
    public const FALLBACK         = self::EN_COURS->value; //self::EN_SERVICE;

    /**
     * Get the labels for the StatutContrat.
     *
     * @return array The labels for the statutcontrat.
     */
    public static function labels(): array
    {
        return [
            self::EN_ATTENTE->value => 'en_attente',
            self::SUSPENDU->value   => 'suspendu',
            self::EN_COURS->value   => 'en_cours',
            self::TERMINER->value   => 'terminer',
            self::RESILIER->value   => 'resilier',
        ];
    }

    /**
     * Get all the StatutContrat enum descriptions as an array.
     *
     * @return array An array containing all the descriptions for the enum values.
     */
    public static function descriptions(): array
    {
        return [
            self::EN_ATTENTE->value => 'Represents the "en_attente".',
            self::SUSPENDU->value   => 'Represents the "suspendu".',
            self::EN_COURS->value   => 'Represents the "en_cours".',
            self::TERMINER->value   => 'Represents the "terminer".',
            self::RESILIER->value   => 'Represents the "resilier".',
        ];
        
    }

}