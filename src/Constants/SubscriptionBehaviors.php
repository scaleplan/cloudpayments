<?php
declare(strict_types=1);

namespace Scaleplan\CloudPayments\Constants;

/**
 * Class SubscriptionBehaviors
 *
 * @package Scaleplan\CloudPayments\Constants
 */
class SubscriptionBehaviors
{
    public const CREATE_DAILY   = 'CreateDaily';
    public const CREATE_WEEKLY  = 'CreateWeekly';
    public const CREATE_MONTHLY = 'CreateMonthly';

    public const ALL = [
        self::CREATE_DAILY,
        self::CREATE_WEEKLY,
        self::CREATE_MONTHLY,
    ];
}
