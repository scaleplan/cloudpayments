<?php
declare(strict_types=1);

namespace Scaleplan\CloudPayments\DTO\Response\Traits;

use OpenApi\Annotations as SWG;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Class CurrencyDTOTrait
 *
 * @package Scaleplan\CloudPayments\DTO\Response\Traits
 */
trait CurrencyDTOTrait
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
     *     property="currency",
     *     type="string",
     *     nullable=false,
     *     description="Валюта из параметров платежа"
     * )
     */
    protected $currency;

    /**
     * @return string
     */
    public function getCurrency()
    {
        return $this->currency;
    }
}
