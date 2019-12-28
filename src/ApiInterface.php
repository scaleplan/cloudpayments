<?php
declare(strict_types=1);

namespace Scaleplan\CloudPayments;

use Scaleplan\CloudPayments\DTO\Request\GetPaymentDTO;
use Scaleplan\CloudPayments\DTO\Response\Api\GetPaymentDTO as GetPaymentResponseDTO;

/**
 * Interface ApiInterface
 *
 * @package Scaleplan\CloudPayments
 */
interface ApiInterface
{
    /**
     * @param GetPaymentDTO $dto
     *
     * @return GetPaymentResponseDTO
     */
    public function getPayment(GetPaymentDTO $dto) : GetPaymentResponseDTO;
}
