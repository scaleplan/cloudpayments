<?php
declare(strict_types=1);

namespace Scaleplan\CloudPayments\DTO\Response\Notifications;

use Scaleplan\CloudPayments\DTO\Response\Traits\AccountIdDTOTrait;
use Scaleplan\CloudPayments\DTO\Response\Traits\AmountDTOTrait;
use Scaleplan\CloudPayments\DTO\Response\Traits\CurrencyDTOTrait;
use Scaleplan\CloudPayments\DTO\Response\Traits\DescriptionDTOTrait;
use Scaleplan\CloudPayments\DTO\Response\Traits\EmailDTOTrait;
use Scaleplan\CloudPayments\DTO\Response\Traits\FailedTransactionsNumberDTOTrait;
use Scaleplan\CloudPayments\DTO\Response\Traits\IdDTOTrait;
use Scaleplan\CloudPayments\DTO\Response\Traits\IntervalDTOTrait;
use Scaleplan\CloudPayments\DTO\Response\Traits\LastTransactionDateDTOTrait;
use Scaleplan\CloudPayments\DTO\Response\Traits\MaxPeriodsDTOTrait;
use Scaleplan\CloudPayments\DTO\Response\Traits\NextTransactionDateDTOTrait;
use Scaleplan\CloudPayments\DTO\Response\Traits\PeriodDTOTrait;
use Scaleplan\CloudPayments\DTO\Response\Traits\StartDateDTOTrait;
use Scaleplan\CloudPayments\DTO\Response\Traits\SubscriptionStatusDTOTrait;
use Scaleplan\CloudPayments\DTO\Response\Traits\SuccessfulTransactionsNumberDTOTrait;

/**
 * Class RecurrentDTO
 *
 * @package Scaleplan\CloudPayments\DTO\Response
 */
class RecurrentDTO extends CloudPaymentsNotificationDTO
{
    use
        IdDTOTrait,
        AccountIdDTOTrait,
        DescriptionDTOTrait,
        EmailDTOTrait,
        AmountDTOTrait,
        CurrencyDTOTrait,
        StartDateDTOTrait,
        IntervalDTOTrait,
        PeriodDTOTrait,
        SubscriptionStatusDTOTrait,
        SuccessfulTransactionsNumberDTOTrait,
        FailedTransactionsNumberDTOTrait,
        MaxPeriodsDTOTrait,
        LastTransactionDateDTOTrait,
        NextTransactionDateDTOTrait;
}
