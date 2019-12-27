<?php
declare(strict_types=1);

namespace Scaleplan\CloudPayments\DTO;

use Scaleplan\CloudPayments\DTO\Traits\AccountIdDTOTrait;
use Scaleplan\CloudPayments\DTO\Traits\AmountDTOTrait;
use Scaleplan\CloudPayments\DTO\Traits\CurrencyDTOTrait;
use Scaleplan\CloudPayments\DTO\Traits\DescriptionDTOTrait;
use Scaleplan\CloudPayments\DTO\Traits\EmailDTOTrait;
use Scaleplan\CloudPayments\DTO\Traits\FailedTransactionsNumberDTOTrait;
use Scaleplan\CloudPayments\DTO\Traits\IdDTOTrait;
use Scaleplan\CloudPayments\DTO\Traits\IntervalDTOTrait;
use Scaleplan\CloudPayments\DTO\Traits\LastTransactionDateDTOTrait;
use Scaleplan\CloudPayments\DTO\Traits\MaxPeriodsDTOTrait;
use Scaleplan\CloudPayments\DTO\Traits\NextTransactionDateDTOTrait;
use Scaleplan\CloudPayments\DTO\Traits\PeriodDTOTrait;
use Scaleplan\CloudPayments\DTO\Traits\StartDateDTOTrait;
use Scaleplan\CloudPayments\DTO\Traits\SubscriptionStatusDTOTrait;
use Scaleplan\CloudPayments\DTO\Traits\SuccessfulTransactionsNumberDTOTrait;

/**
 * Class RecurrentDTO
 *
 * @package Scaleplan\CloudPayments\DTO
 */
class RecurrentDTO extends CloudPaymentsNotificationDTO
{
    /**
     * @var bool
     */
    private $allowMagicSet = false;

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
