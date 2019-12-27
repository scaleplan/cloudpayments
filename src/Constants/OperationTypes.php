<?php
declare(strict_types=1);

namespace Scaleplan\CloudPayments\Constants;

/**
 * Class OperationTypes
 *
 * @package Scaleplan\CloudPayments\Constants
 */
final class OperationTypes
{
    public const PAYMENT     = 'Payment'; //Оплата
    public const REFUND      = 'Refund'; //Возврат
    public const CARD_PAYOUT = 'CardPayout'; //Выплата на карту

    public const ALL = [
        self::PAYMENT,
        self::REFUND,
        self::CARD_PAYOUT,
    ];
}
