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
use Scaleplan\CloudPayments\DTO\Traits\ReasonCodeDTOTrait;
use Scaleplan\CloudPayments\DTO\Traits\ReasonDTOTrait;
use Scaleplan\CloudPayments\DTO\Traits\SubscriptionIdDTOTrait;
use Scaleplan\CloudPayments\DTO\Traits\TestModeDTOTrait;
use Scaleplan\CloudPayments\DTO\Traits\TransactionIdDTOTrait;

/**
 * Class FailDTO
 *
 * @package Scaleplan\CloudPayments\DTO
 */
class FailDTO extends CloudPaymentsNotificationDTO
{
    /**
     * @var bool
     */
    private $allowMagicSet = false;

    use
        TransactionIdDTOTrait,
        AmountDTOTrait,
        CurrencyDTOTrait,
        DateTimeDTOTrait,
        CardFirstSixDTOTrait,
        CardLastFourDTOTrait,
        CardTypeDTOTrait,
        CardExpDateDTOTrait,
        TestModeDTOTrait,
        ReasonDTOTrait,
        ReasonCodeDTOTrait,
        OperationTypeDTOTrait,
        InvoiceIdDTOTrait,
        AccountIdDTOTrait,
        SubscriptionIdDTOTrait,
        NameDTOTrait,
        EmailDTOTrait,
        IpAddressDTOTrait,
        IpCountryDTOTrait,
        IpCityDTOTrait,
        IpRegionDTOTrait,
        IpDistrictDTOTrait,
        IssuerDTOTrait,
        IssuerBankCountryDTOTrait,
        DescriptionDTOTrait,
        DataDTOTrait;
}
