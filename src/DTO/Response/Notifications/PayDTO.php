<?php
declare(strict_types=1);

namespace Scaleplan\CloudPayments\DTO\Response\Notifications;

use Scaleplan\CloudPayments\DTO\Response\Traits\AccountIdDTOTrait;
use Scaleplan\CloudPayments\DTO\Response\Traits\AmountDTOTrait;
use Scaleplan\CloudPayments\DTO\Response\Traits\CardExpDateDTOTrait;
use Scaleplan\CloudPayments\DTO\Response\Traits\CardFirstSixDTOTrait;
use Scaleplan\CloudPayments\DTO\Response\Traits\CardLastFourDTOTrait;
use Scaleplan\CloudPayments\DTO\Response\Traits\CardTypeDTOTrait;
use Scaleplan\CloudPayments\DTO\Response\Traits\CurrencyDTOTrait;
use Scaleplan\CloudPayments\DTO\Response\Traits\DataDTOTrait;
use Scaleplan\CloudPayments\DTO\Response\Traits\DateTimeDTOTrait;
use Scaleplan\CloudPayments\DTO\Response\Traits\DescriptionDTOTrait;
use Scaleplan\CloudPayments\DTO\Response\Traits\EmailDTOTrait;
use Scaleplan\CloudPayments\DTO\Response\Traits\GatewayNameDTOTrait;
use Scaleplan\CloudPayments\DTO\Response\Traits\InvoiceIdDTOTrait;
use Scaleplan\CloudPayments\DTO\Response\Traits\IpAddressDTOTrait;
use Scaleplan\CloudPayments\DTO\Response\Traits\IpCityDTOTrait;
use Scaleplan\CloudPayments\DTO\Response\Traits\IpCountryDTOTrait;
use Scaleplan\CloudPayments\DTO\Response\Traits\IpDistrictDTOTrait;
use Scaleplan\CloudPayments\DTO\Response\Traits\IpRegionDTOTrait;
use Scaleplan\CloudPayments\DTO\Response\Traits\IssuerBankCountryDTOTrait;
use Scaleplan\CloudPayments\DTO\Response\Traits\IssuerDTOTrait;
use Scaleplan\CloudPayments\DTO\Response\Traits\NameDTOTrait;
use Scaleplan\CloudPayments\DTO\Response\Traits\OperationTypeDTOTrait;
use Scaleplan\CloudPayments\DTO\Response\Traits\StatusDTOTrait;
use Scaleplan\CloudPayments\DTO\Response\Traits\SubscriptionIdDTOTrait;
use Scaleplan\CloudPayments\DTO\Response\Traits\TestModeDTOTrait;
use Scaleplan\CloudPayments\DTO\Response\Traits\TokenDTOTrait;
use Scaleplan\CloudPayments\DTO\Response\Traits\TotalFeeDTOTrait;
use Scaleplan\CloudPayments\DTO\Response\Traits\TransactionIdDTOTrait;

/**
 * Class PayDTO
 *
 * @package Scaleplan\CloudPayments\DTO\Response
 */
class PayDTO extends CloudPaymentsNotificationDTO
{
    use
        AccountIdDTOTrait,
        AmountDTOTrait,
        CardExpDateDTOTrait,
        CardFirstSixDTOTrait,
        CardLastFourDTOTrait,
        CardTypeDTOTrait,
        CurrencyDTOTrait,
        DataDTOTrait,
        DateTimeDTOTrait,
        DescriptionDTOTrait,
        EmailDTOTrait,
        GatewayNameDTOTrait,
        InvoiceIdDTOTrait,
        IpAddressDTOTrait,
        IpCityDTOTrait,
        IpCountryDTOTrait,
        IpDistrictDTOTrait,
        IpRegionDTOTrait,
        IssuerBankCountryDTOTrait,
        IssuerDTOTrait,
        NameDTOTrait,
        OperationTypeDTOTrait,
        StatusDTOTrait,
        SubscriptionIdDTOTrait,
        TestModeDTOTrait,
        TokenDTOTrait,
        TotalFeeDTOTrait,
        TransactionIdDTOTrait;
}
