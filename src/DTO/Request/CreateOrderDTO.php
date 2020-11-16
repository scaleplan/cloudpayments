<?php
declare(strict_types=1);

namespace Scaleplan\CloudPayments\DTO\Request;

use Scaleplan\CloudPayments\DTO\Request\Traits\AccountIdDTOTrait;
use Scaleplan\CloudPayments\DTO\Request\Traits\AmountDTOTrait;
use Scaleplan\CloudPayments\DTO\Request\Traits\CultureNameDTOTrait;
use Scaleplan\CloudPayments\DTO\Request\Traits\CurrencyDTOTrait;
use Scaleplan\CloudPayments\DTO\Request\Traits\DescriptionDTOTrait;
use Scaleplan\CloudPayments\DTO\Request\Traits\EmailDTOTrait;
use Scaleplan\CloudPayments\DTO\Request\Traits\InvoiceIdDTOTrait;
use Scaleplan\CloudPayments\DTO\Request\Traits\JsonDataDTOTrait;
use Scaleplan\CloudPayments\DTO\Request\Traits\OfferUriDTOTrait;
use Scaleplan\CloudPayments\DTO\Request\Traits\OptionalRequireConfirmationDTOTrait;
use Scaleplan\CloudPayments\DTO\Request\Traits\PhoneDTOTrait;
use Scaleplan\CloudPayments\DTO\Request\Traits\SendEmailDTOTrait;
use Scaleplan\CloudPayments\DTO\Request\Traits\SendSmsDTOTrait;
use Scaleplan\CloudPayments\DTO\Request\Traits\SendViberDTOTrait;
use Scaleplan\CloudPayments\DTO\Request\Traits\SubscriptionBehaviorDTOTrait;

/**
 * Class CreateOrderDTO
 *
 * @package Scaleplan\CloudPayments\DTO\Request
 */
class CreateOrderDTO extends RequestDTO
{
    use
        AmountDTOTrait,
        CurrencyDTOTrait,
        DescriptionDTOTrait,
        EmailDTOTrait,
        OptionalRequireConfirmationDTOTrait,
        SendEmailDTOTrait,
        InvoiceIdDTOTrait,
        AccountIdDTOTrait,
        OfferUriDTOTrait,
        PhoneDTOTrait,
        SendSmsDTOTrait,
        SendViberDTOTrait,
        CultureNameDTOTrait,
        SubscriptionBehaviorDTOTrait,
        JsonDataDTOTrait;
}
