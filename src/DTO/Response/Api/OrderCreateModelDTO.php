<?php
declare(strict_types=1);

namespace Scaleplan\CloudPayments\DTO\Response\Api;

use Scaleplan\CloudPayments\DTO\Response\Notifications\CloudPaymentsNotificationDTO;
use Scaleplan\CloudPayments\DTO\Response\Traits\AmountDTOTrait;
use Scaleplan\CloudPayments\DTO\Response\Traits\CurrencyDTOTrait;
use Scaleplan\CloudPayments\DTO\Response\Traits\DescriptionDTOTrait;
use Scaleplan\CloudPayments\DTO\Response\Traits\EmailDTOTrait;
use Scaleplan\CloudPayments\DTO\Response\Traits\IdDTOTrait;
use Scaleplan\CloudPayments\DTO\Response\Traits\RequireConfirmationDTOTrait;
use Scaleplan\CloudPayments\DTO\Response\Traits\UrlDTOTrait;

/**
 * Class OrderCreateModelDTO
 *
 * @package Scaleplan\CloudPayments\DTO\Response\Api
 */
class OrderCreateModelDTO extends CloudPaymentsNotificationDTO
{
    use
        IdDTOTrait,
        AmountDTOTrait,
        CurrencyDTOTrait,
        EmailDTOTrait,
        DescriptionDTOTrait,
        RequireConfirmationDTOTrait,
        UrlDTOTrait;
}
