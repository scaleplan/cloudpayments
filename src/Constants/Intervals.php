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
    public const WEEK = 'Week';
    public const MONTH = 'Month';

    public const ALL = [
        self::WEEK,
        self::MONTH,
    ];
}
