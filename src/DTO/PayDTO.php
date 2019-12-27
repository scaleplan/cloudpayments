<?php
declare(strict_types=1);

namespace Scaleplan\CloudPayments\DTO;

use Scaleplan\CloudPayments\DTO\Traits\AccountIdDTOTrait;
use Scaleplan\CloudPayments\DTO\Traits\AmountDTOTrait;
use Scaleplan\CloudPayments\DTO\Traits\CardExpDateDTOTrait;
use Scaleplan\CloudPayments\DTO\Traits\CardFirstSixDTOTrait;
use Scaleplan\CloudPayments\DTO\Traits\CardLastFourDTOTrait;
use Scaleplan\CloudPayments\DTO\Traits\CardTypeDTOTrait;
use Scaleplan\CloudPayments\DTO\Traits\CurrencyDTOTrait;
use Scaleplan\CloudPayments\DTO\Traits\DataDTOTrait;
use Scaleplan\CloudPayments\DTO\Traits\DateTimeDTOTrait;
use Scaleplan\CloudPayments\DTO\Traits\DescriptionDTOTrait;
use Scaleplan\CloudPayments\DTO\Traits\EmailDTOTrait;
use Scaleplan\CloudPayments\DTO\Traits\GatewayNameDTOTrait;
use Scaleplan\CloudPayments\DTO\Traits\InvoiceIdDTOTrait;
use Scaleplan\CloudPayments\DTO\Traits\IpAddressDTOTrait;
use Scaleplan\CloudPayments\DTO\Traits\IpCityDTOTrait;
use Scaleplan\CloudPayments\DTO\Traits\IpCountryDTOTrait;
use Scaleplan\CloudPayments\DTO\Traits\IpDistrictDTOTrait;
use Scaleplan\CloudPayments\DTO\Traits\IpRegionDTOTrait;
use Scaleplan\CloudPayments\DTO\Traits\IssuerBankCountryDTOTrait;
use Scaleplan\CloudPayments\DTO\Traits\IssuerDTOTrait;
use Scaleplan\CloudPayments\DTO\Traits\NameDTOTrait;
use Scaleplan\CloudPayments\DTO\Traits\OperationTypeDTOTrait;
use Scaleplan\CloudPayments\DTO\Traits\StatusDTOTrait;
use Scaleplan\CloudPayments\DTO\Traits\SubscriptionIdDTOTrait;
use Scaleplan\CloudPayments\DTO\Traits\TestModeDTOTrait;
use Scaleplan\CloudPayments\DTO\Traits\TokenDTOTrait;
use Scaleplan\CloudPayments\DTO\Traits\TotalFeeDTOTrait;
use Scaleplan\CloudPayments\DTO\Traits\TransactionIdDTOTrait;

/**
 * Class PayDTO
 *
 * @package Scaleplan\CloudPayments\DTO
 */
class PayDTO extends CloudPaymentsNotificationDTO
{
    /**
     * @var bool
     */
    private $allowMagicSet = false;

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
