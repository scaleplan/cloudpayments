<?php
declare(strict_types=1);

namespace Scaleplan\CloudPayments\Constants;

/**
 * Class CardTypes
 *
 * @package Scaleplan\CloudPayments\Constants
 */
final class CardTypes
{
    public const VISA       = 'Visa';
    public const MASTERCARD = 'MasterCard';
    public const MAESTRO    = 'Maestro';
    public const MIR        = 'МИР';

    public const ALL = [
        self::VISA,
        self::MASTERCARD,
        self::MAESTRO,
        self::MIR,
    ];
}
