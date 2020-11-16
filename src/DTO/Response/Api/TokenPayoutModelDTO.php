<?php
declare(strict_types=1);

namespace Scaleplan\CloudPayments\DTO\Response\Api;

use Scaleplan\CloudPayments\DTO\Response\Notifications\CloudPaymentsNotificationDTO;
use Scaleplan\CloudPayments\DTO\Response\Traits\AccountIdDTOTrait;
use Scaleplan\CloudPayments\DTO\Response\Traits\AmountDTOTrait;
use Scaleplan\CloudPayments\DTO\Response\Traits\CardExpDateDTOTrait;
use Scaleplan\CloudPayments\DTO\Response\Traits\CardFirstSixDTOTrait;
use Scaleplan\CloudPayments\DTO\Response\Traits\CardHolderMessageDTOTrait;
use Scaleplan\CloudPayments\DTO\Response\Traits\CardLastFourDTOTrait;
use Scaleplan\CloudPayments\DTO\Response\Traits\CardTypeDTOTrait;
use Scaleplan\CloudPayments\DTO\Response\Traits\CreatedDateIsoDTOTrait;
use Scaleplan\CloudPayments\DTO\Response\Traits\CultureNameDTOTrait;
use Scaleplan\CloudPayments\DTO\Response\Traits\CurrencyDTOTrait;
use Scaleplan\CloudPayments\DTO\Response\Traits\DescriptionDTOTrait;
use Scaleplan\CloudPayments\DTO\Response\Traits\EmailDTOTrait;
use Scaleplan\CloudPayments\DTO\Response\Traits\GatewayNameDTOTrait;
use Scaleplan\CloudPayments\DTO\Response\Traits\IpAddressDTOTrait;
use Scaleplan\CloudPayments\DTO\Response\Traits\IpCityDTOTrait;
use Scaleplan\CloudPayments\DTO\Response\Traits\IpCountryDTOTrait;
use Scaleplan\CloudPayments\DTO\Response\Traits\IpDistrictDTOTrait;
use Scaleplan\CloudPayments\DTO\Response\Traits\IpRegionDTOTrait;
use Scaleplan\CloudPayments\DTO\Response\Traits\JsonDataDTOTrait;
use Scaleplan\CloudPayments\DTO\Response\Traits\NameDTOTrait;
use Scaleplan\CloudPayments\DTO\Response\Traits\PaymentAmountDTOTrait;
use Scaleplan\CloudPayments\DTO\Response\Traits\PaymentCurrencyDTOTrait;
use Scaleplan\CloudPayments\DTO\Response\Traits\PayoutDateIsoDTOTrait;
use Scaleplan\CloudPayments\DTO\Response\Traits\PublicIdDTOTrait;
use Scaleplan\CloudPayments\DTO\Response\Traits\ReasonCodeDTOTrait;
use Scaleplan\CloudPayments\DTO\Response\Traits\ReasonDTOTrait;
use Scaleplan\CloudPayments\DTO\Response\Traits\StatusDTOTrait;
use Scaleplan\CloudPayments\DTO\Response\Traits\SubscriptionIdDTOTrait;
use Scaleplan\CloudPayments\DTO\Response\Traits\TestModeDTOTrait;
use Scaleplan\CloudPayments\DTO\Response\Traits\TransactionIdDTOTrait;

/**
 * Class TokenPayoutModelDTO
 *
 * @package Scaleplan\CloudPayments\DTO\Response\Api
 */
class TokenPayoutModelDTO extends CloudPaymentsNotificationDTO
{
    use
        PublicIdDTOTrait,
        TransactionIdDTOTrait,
        AmountDTOTrait,
        CurrencyDTOTrait,
        PaymentAmountDTOTrait,
        PaymentCurrencyDTOTrait,
        AccountIdDTOTrait,
        EmailDTOTrait,
        DescriptionDTOTrait,
        JsonDataDTOTrait,
        CreatedDateIsoDTOTrait,
        PayoutDateIsoDTOTrait,
        TestModeDTOTrait,
        IpAddressDTOTrait,
        IpCountryDTOTrait,
        IpCityDTOTrait,
        IpRegionDTOTrait,
        IpDistrictDTOTrait,
        CardFirstSixDTOTrait,
        CardLastFourDTOTrait,
        CardExpDateDTOTrait,
        CardTypeDTOTrait,
        StatusDTOTrait,
        CultureNameDTOTrait,
        ReasonDTOTrait,
        ReasonCodeDTOTrait,
        CardHolderMessageDTOTrait,
        NameDTOTrait,
        SubscriptionIdDTOTrait,
        GatewayNameDTOTrait;
}
