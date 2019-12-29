<?php
declare(strict_types=1);

namespace Scaleplan\CloudPayments\DTO\Response\Traits;

use OpenApi\Annotations as SWG;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Class PaymentAmountDTOTrait
 *
 * @package Scaleplan\CloudPayments\DTO\Response\Traits
 */
trait PaymentAmountDTOTrait
{
    /**
     * @var float
     *
     * @Assert\NotBlank()
     * @Assert\Type(type="float", groups={"type"})
     * @Assert\GreaterThanOrEqual(0.01)
     *
     * @SWG\Property(
     *     property="paymentAmount",
     *     type="float",
     *     nullable=false,
     *     description="Сумма оплаты"
     * )
     */
    protected $paymentAmount;

    /**
     * @return float
     */
    public function getPaymentAmount()
    {
        return $this->paymentAmount;
    }
}
