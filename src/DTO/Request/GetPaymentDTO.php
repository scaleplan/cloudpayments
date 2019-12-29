<?php
declare(strict_types=1);

namespace Scaleplan\CloudPayments\DTO\Request;

use Scaleplan\CloudPayments\DTO\Request\Traits\TransactionIdDTOTrait;

/**
 * Class GetPaymentDTO
 *
 * @package Scaleplan\CloudPayments\DTO\Request
 */
class GetPaymentDTO extends RequestDTO
{
    use TransactionIdDTOTrait;
}
