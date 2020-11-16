<?php
declare(strict_types=1);

namespace Scaleplan\CloudPayments\DTO\Request\Traits;

use OpenApi\Annotations as SWG;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Class OptionalAmountDTOTrait
 *
 * @package Scaleplan\CloudPayments\DTO\Request\Traits
 */
trait OptionalAmountDTOTrait
{
    /**
     * @var float|null
     *
     * @Assert\Type(type="float", groups={"type"})
     * @Assert\GreaterThanOrEqual(0.01)
     *
     * @SWG\Property(
     *     property="amount",
     *     type="float",
     *     nullable=true,
     *     description="Сумма оплаты"
     * )
     */
    protected $amount;

    /**
     * @return float|null
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * @param float|null $amount
     */
    public function setAmount($amount) : void
    {
        $this->amount = $amount;
    }
}
