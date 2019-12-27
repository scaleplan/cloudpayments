<?php
declare(strict_types=1);

namespace Scaleplan\CloudPayments\DTO;

use Scaleplan\CloudPayments\DTO\Traits\AccountIdDTOTrait;
use Scaleplan\CloudPayments\DTO\Traits\AmountDTOTrait;
use Scaleplan\CloudPayments\DTO\Traits\DataDTOTrait;
use Scaleplan\CloudPayments\DTO\Traits\DateTimeDTOTrait;
use Scaleplan\CloudPayments\DTO\Traits\EmailDTOTrait;
use Scaleplan\CloudPayments\DTO\Traits\InvoiceIdDTOTrait;
use Scaleplan\CloudPayments\DTO\Traits\OperationTypeDTOTrait;
use Scaleplan\CloudPayments\DTO\Traits\PaymentTransactionIdDTOTrait;
use Scaleplan\CloudPayments\DTO\Traits\TransactionIdDTOTrait;

/**
 * Class RefundDTO
 *
 * @package Scaleplan\CloudPayments\DTO
 */
class RefundDTO extends CloudPaymentsNotificationDTO
{
    /**
     * @var bool
     */
    private $allowMagicSet = false;

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
