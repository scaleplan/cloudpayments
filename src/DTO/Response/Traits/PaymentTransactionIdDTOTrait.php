<?php
declare(strict_types=1);

namespace Scaleplan\CloudPayments\DTO\Response\Traits;

use OpenApi\Annotations as SWG;
use Symfony\Component\Validator\Constraints as Assert;
use Scaleplan\Validator\Constraints as AppAssert;

/**
 * Class PaymentTransactionIdDTOTrait
 *
 * @package Scaleplan\CloudPayments\DTO\Response\Traits
 */
trait PaymentTransactionIdDTOTrait
{
    /**
     * @var int
     *
     * @Assert\NotBlank()
     * @AppAssert\FuzzyType(type="int", groups={"type"})
     * @Assert\Positive()
     *
     * @SWG\Property(
     *     property="paymentTransactionId",
     *     type="int",
     *     nullable=false,
     *     description="Номер оригинальной транзакции оплаты в системе"
     * )
     */
    protected $paymentTransactionId;

    /**
     * @return int
     */
    public function getPaymentTransactionId()
    {
        return $this->paymentTransactionId;
    }
}
