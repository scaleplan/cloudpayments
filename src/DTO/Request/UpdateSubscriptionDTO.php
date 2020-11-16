<?php
declare(strict_types=1);

namespace Scaleplan\CloudPayments\DTO\Request;

use Scaleplan\CloudPayments\DTO\Request\Traits\CustomerReceiptDTOTrait;
use Scaleplan\CloudPayments\DTO\Request\Traits\IdDTOTrait;
use Scaleplan\CloudPayments\DTO\Request\Traits\MaxPeriodsDTOTrait;
use Scaleplan\CloudPayments\DTO\Request\Traits\OptionalAmountDTOTrait;
use Scaleplan\CloudPayments\DTO\Request\Traits\OptionalCurrencyDTOTrait;
use Scaleplan\CloudPayments\DTO\Request\Traits\OptionalDescriptionDTOTrait;
use Scaleplan\CloudPayments\DTO\Request\Traits\OptionalIntervalDTOTrait;
use Scaleplan\CloudPayments\DTO\Request\Traits\OptionalPeriodDTOTrait;
use Scaleplan\CloudPayments\DTO\Request\Traits\OptionalRequireConfirmationDTOTrait;
use Scaleplan\CloudPayments\DTO\Request\Traits\OptionalStartDateDTOTrait;

/**
 * Class CreateSubscriptionDTO
 *
 * @package Scaleplan\CloudPayments\DTO\Request
 */
class UpdateSubscriptionDTO extends RequestDTO
{
    use
        IdDTOTrait,
        OptionalDescriptionDTOTrait,
        OptionalAmountDTOTrait,
        OptionalCurrencyDTOTrait,
        OptionalRequireConfirmationDTOTrait,
        OptionalStartDateDTOTrait,
        OptionalIntervalDTOTrait,
        OptionalPeriodDTOTrait,
        MaxPeriodsDTOTrait,
        CustomerReceiptDTOTrait;
}
