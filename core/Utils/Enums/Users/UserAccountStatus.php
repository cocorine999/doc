<?php

declare(strict_types=1);

namespace Core\Utils\Enums\Users;

use Core\Utils\Enums\Contract\EnumContract;
use Core\Utils\Traits\IsEnum;

/**
 * Class UserAccountStatus
 *
 * This class represents the enumeration of user account statuses in the application.
 * It defines the available account statuses as constants, including `PENDING_ACTIVATION`,
 * `PENDING_VERIFICATION`, `PENDING_PASSWORD_RESET`, `ACTIVE`, `SUSPENDED`, `DISABLED`,
 * `CLOSED`, `INACTIVE`, `BANNED`, and `LOCKED`.
 *
 * The default user account status is set to `PENDING_ACTIVATION`.
 *
 * @method static array labels()
 *     Get the labels for the user account statuses.
 *     Returns an array with the labels for the user account statuses, where the keys are the user account status constants and the values are the corresponding labels.
 *
 * @method static array descriptions()
 *     Get the descriptions for the user account statuses.
 *     Returns an array with the descriptions for the user account statuses, where the keys are the user account status constants and the values are the corresponding descriptions.
 *
 * @method string resolveStatus()
 *     Returns the appropriate title based on the `user account status` enum instance.
 *
 *
 * @package ***`\Core\Utils\Enums\Users`***
 */
enum UserAccountStatus: string implements EnumContract
{
    use IsEnum;
    
    /**
     * Represents the user account status "pending_activation".
     *
     * @var string
     */
    case PENDING_ACTIVATION = 'pending_activation';

    /**
     * Represents the user account status "pending_verification".
     *
     * @var string
     */
    case PENDING_VERIFICATION = 'pending_verification';

    /**
     * Represents the user account status "pending_password_reset".
     *
     * @var string
     */
    case PENDING_PASSWORD_RESET = 'pending_password_reset';

    /**
     * Represents the user account status "active".
     *
     * @var string
     */
    case ACTIVE = 'active';

    /**
     * Represents the user account status "suspended".
     *
     * @var string
     */
    case SUSPENDED = 'suspended';

    /**
     * Represents the user account status "disabled".
     *
     * @var string
     */
    case DISABLED = 'disabled';

    /**
     * Represents the user account status "closed".
     *
     * @var string
     */
    case CLOSED = 'closed';

    /**
     * Represents the user account status "inactive".
     *
     * @var string
     */
    case INACTIVE = 'inactive';

    /**
     * Represents the user account status "banned".
     *
     * @var string
     */
    case BANNED = 'banned';

    /**
     * Represents the user account status "locked".
     *
     * @var string
     */
    case LOCKED = 'locked';

    /**
     * The default user account status value.
     * 
     * @return self
     */
    public const DEFAULT = 'pending_activation'; //self::PENDING_ACTIVATION;

    /**
     * The fallback user account status value.
     * 
     * @return self
     */
    public const FALLBACK = 'pending_activation'; //self::PENDING_ACTIVATION;

    /**
     * Get the labels for the user account statuses.
     *
     * @return array<string, string> An array containing the labels for the user account statuses.
     */
    public static function labels(): array
    {
        return [
            self::PENDING_ACTIVATION->value      => 'Pending Activation',
            self::PENDING_VERIFICATION->value    => 'Pending Verification',
            self::PENDING_PASSWORD_RESET->value  => 'Pending Password Reset',
            self::ACTIVE->value                  => 'Active',
            self::SUSPENDED->value               => 'Suspended',
            self::DISABLED->value                => 'Disabled',
            self::CLOSED->value                  => 'Closed/Terminated',
            self::INACTIVE->value                => 'Inactive',
            self::BANNED->value                  => 'Banned',
            self::LOCKED->value                  => 'Locked'
        ];
    }

    /**
     * Get all the user account status enum descriptions as an array.
     *
     * @return array<string, string> An array containing all the descriptions for the enum values.
     */
    public static function descriptions(): array
    {
        return [
            self::PENDING_ACTIVATION->value      => 'Account is pending activation.',
            self::PENDING_VERIFICATION->value    => 'Account is pending verification.',
            self::PENDING_PASSWORD_RESET->value  => 'Account is pending password reset.',
            self::ACTIVE->value                  => 'Account is active.',
            self::SUSPENDED->value               => 'Account is suspended.',
            self::DISABLED->value                => 'Account is disabled.',
            self::CLOSED->value                  => 'Account is closed.',
            self::INACTIVE->value                => 'Account is inactive.',
            self::BANNED->value                  => 'Account is banned.',
            self::LOCKED->value                  => 'Account is locked.'
        ];
    }

    /**
     * Get the appropriate title based on the `user account status` enum instance.
     *
     * @return string The resolved title.
     * @return string The appropriate title based on the user account status.
     */
    public function resolveStatus(): string
    {
        return match ($this) {
            self::PENDING_ACTIVATION      => 'Pending Activation',
            self::PENDING_VERIFICATION    => 'Pending Verification',
            self::PENDING_PASSWORD_RESET  => 'Pending Password Reset',
            self::ACTIVE                  => 'Active',
            self::SUSPENDED               => 'Suspended',
            self::DISABLED                => 'Disabled',
            self::CLOSED                  => 'Closed',
            self::INACTIVE                => 'Inactive',
            self::BANNED                  => 'Banned',
            self::LOCKED                  => 'Locked',
            default                       => 'Unknown',
        };
    }
}