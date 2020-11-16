<?php
declare(strict_types=1);

namespace Scaleplan\CloudPayments\DTO\Request\Traits;

use OpenApi\Annotations as SWG;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Class OptionalCurrencyDTOTrait
 *
 * @package Scaleplan\CloudPayments\DTO\Request\Traits
 */
trait OptionalCurrencyDTOTrait
{
    /**
     * @var string|null
     *
     * @Assert\Type(type="string", groups={"type"})
     * @Assert\Choice(
     *     strict=true,
     *     choices=\Scaleplan\CloudPayments\Constants\CurrencyCodes::ALL
     * )
     *
     * @SWG\Property(
     *     property="currency",
     *     type="string",
     *     nullable=true,
     *     description="Валюта"
     * )
     */
    protected $currency;

    /**
     * @return string|null
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * @param string|null $currency
     */
    public function setCurrency($currency) : void
    {
        $this->currency = $currency;
    }
}
