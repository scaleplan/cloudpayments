<?php
declare(strict_types=1);

namespace Scaleplan\CloudPayments\Constants;

/**
 * Class SubscriptionStatuses
 *
 * @package Scaleplan\CloudPayments\Constants
 */
class SubscriptionStatuses
{
    public const ACTIVE    = 'Active'; //Подписка активна - После создания и очередной успешной оплаты
    public const PASTDUE   = 'PastDue'; //Просрочена - После одной или двух подряд неуспешных попыток оплаты
    public const CANCELLED = 'Cancelled'; //Отменена - В случае отмены по запросу
    public const REJECTED  = 'Rejected'; //Отклонена - В случае трех неудачных попыток оплаты, идущих подряд
    public const EXPIRED   = 'Expired'; //Завершена - В случае завершения максимального количества периодов (если были указаны)

    public const ALL = [
        self::ACTIVE,
        self::PASTDUE,
        self::CANCELLED,
        self::REJECTED,
        self::EXPIRED,
    ];
}
