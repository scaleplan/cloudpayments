<?php
declare(strict_types=1);

namespace Scaleplan\CloudPayments\Constants;

/**
 * Class Intervals
 *
 * @package Scaleplan\CloudPayments\Constants
 */
final class Intervals
{
    public const DAY   = 'Day';
    public const WEEK  = 'Week';
    public const MONTH = 'Month';

    public const ALL = [
        self::DAY,
        self::WEEK,
        self::MONTH,
    ];
}
