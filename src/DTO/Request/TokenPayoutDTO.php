<?php
declare(strict_types=1);

namespace Scaleplan\CloudPayments\DTO\Request;

use Scaleplan\CloudPayments\DTO\Request\Traits\AccountIdDTOTrait;
use Scaleplan\CloudPayments\DTO\Request\Traits\AmountDTOTrait;
use Scaleplan\CloudPayments\DTO\Request\Traits\CurrencyDTOTrait;
use Scaleplan\CloudPayments\DTO\Request\Traits\InvoiceIdDTOTrait;
use Scaleplan\CloudPayments\DTO\Request\Traits\TokenDTOTrait;

/**
 * Class GetPaymentDTO
 *
 * @package Scaleplan\CloudPayments\DTO\Request
 */
class TokenPayoutDTO extends RequestDTO
{
    use TokenDTOTrait, AmountDTOTrait, AccountIdDTOTrait, CurrencyDTOTrait, InvoiceIdDTOTrait;
}
