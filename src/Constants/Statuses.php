<?php
declare(strict_types=1);

namespace Scaleplan\CloudPayments\Constants;

/**
 * Class Statuses
 *
 * @package Scaleplan\CloudPayments\Constants
 */
final class Statuses
{
    public const COMPLETED  = 'Completed';
    public const AUTHORIZED = 'Authorized';

    public const ALL = [
        self::COMPLETED,
        self::AUTHORIZED,
    ];
}
