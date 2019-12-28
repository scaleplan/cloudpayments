<?php
declare(strict_types=1);

namespace Scaleplan\CloudPayments\DTO\Response\Notifications;

use Scaleplan\CloudPayments\DTO\Response\Traits\AccountIdDTOTrait;
use Scaleplan\CloudPayments\DTO\Response\Traits\AmountDTOTrait;
use Scaleplan\CloudPayments\DTO\Response\Traits\DataDTOTrait;
use Scaleplan\CloudPayments\DTO\Response\Traits\DateTimeDTOTrait;
use Scaleplan\CloudPayments\DTO\Response\Traits\EmailDTOTrait;
use Scaleplan\CloudPayments\DTO\Response\Traits\InvoiceIdDTOTrait;
use Scaleplan\CloudPayments\DTO\Response\Traits\OperationTypeDTOTrait;
use Scaleplan\CloudPayments\DTO\Response\Traits\PaymentTransactionIdDTOTrait;
use Scaleplan\CloudPayments\DTO\Response\Traits\TransactionIdDTOTrait;

/**
 * Class RefundDTO
 *
 * @package Scaleplan\CloudPayments\DTO\Response
 */
class RefundDTO extends CloudPaymentsNotificationDTO
{
    use
        TransactionIdDTOTrait,
        PaymentTransactionIdDTOTrait,
        AmountDTOTrait,
        DateTimeDTOTrait,
        OperationTypeDTOTrait,
        InvoiceIdDTOTrait,
        AccountIdDTOTrait,
        EmailDTOTrait,
        DataDTOTrait;
}
