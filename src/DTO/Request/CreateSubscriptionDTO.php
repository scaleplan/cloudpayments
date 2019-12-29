<?php
declare(strict_types=1);

namespace Scaleplan\CloudPayments\DTO\Request;

use Scaleplan\CloudPayments\DTO\Request\Traits\AccountIdDTOTrait;
use Scaleplan\CloudPayments\DTO\Request\Traits\AmountDTOTrait;
use Scaleplan\CloudPayments\DTO\Request\Traits\CurrencyDTOTrait;
use Scaleplan\CloudPayments\DTO\Request\Traits\CustomerReceiptDTOTrait;
use Scaleplan\CloudPayments\DTO\Request\Traits\DescriptionDTOTrait;
use Scaleplan\CloudPayments\DTO\Request\Traits\EmailDTOTrait;
use Scaleplan\CloudPayments\DTO\Request\Traits\IntervalDTOTrait;
use Scaleplan\CloudPayments\DTO\Request\Traits\MaxPeriodsDTOTrait;
use Scaleplan\CloudPayments\DTO\Request\Traits\PeriodDTOTrait;
use Scaleplan\CloudPayments\DTO\Request\Traits\RequireConfirmationDTOTrait;
use Scaleplan\CloudPayments\DTO\Request\Traits\StartDateDTOTrait;
use Scaleplan\CloudPayments\DTO\Request\Traits\TokenDTOTrait;

/**
 * Class CreateSubscriptionDTO
 *
 * @package Scaleplan\CloudPayments\DTO\Request
 */
class CreateSubscriptionDTO extends RequestDTO
{
    use
        TokenDTOTrait,
        AccountIdDTOTrait,
        DescriptionDTOTrait,
        EmailDTOTrait,
        AmountDTOTrait,
        CurrencyDTOTrait,
        RequireConfirmationDTOTrait,
        StartDateDTOTrait,
        IntervalDTOTrait,
        PeriodDTOTrait,
        MaxPeriodsDTOTrait,
        CustomerReceiptDTOTrait;
}
