<?php
declare(strict_types=1);

namespace Scaleplan\CloudPayments\DTO\Request;

use Scaleplan\CloudPayments\DTO\Request\Traits\TransactionIdDTOTrait;
use Scaleplan\DTO\DTO;

/**
 * Class GetPaymentDTO
 *
 * @package Scaleplan\CloudPayments\DTO\Request
 */
class GetPaymentDTO extends DTO
{
    use TransactionIdDTOTrait;
}
