<?php
declare(strict_types=1);

namespace Scaleplan\CloudPayments\DTO\Response\Traits;

use OpenApi\Annotations as SWG;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Class PaymentCurrencyDTOTrait
 *
 * @package Scaleplan\CloudPayments\DTO\Response\Traits
 */
trait PaymentCurrencyDTOTrait
{
    /**
     * @var string
     *
     * @Assert\NotBlank()
     * @Assert\Type(type="string", groups={"type"})
     * @Assert\Choice(
     *     strict=true,
     *     choices=\Scaleplan\CloudPayments\Constants\CurrencyCodes::ALL
     * )
     *
     * @SWG\Property(
     *     property="paymentCurrency",
     *     type="string",
     *     nullable=false,
     *     description="Валюта"
     * )
     */
    protected $paymentCurrency;

    /**
     * @return string
     */
    public function getPaymentCurrency()
    {
        return $this->paymentCurrency;
    }
}
