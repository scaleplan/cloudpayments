<?php
declare(strict_types=1);

namespace Scaleplan\CloudPayments\DTO\Response\Traits;

use OpenApi\Annotations as SWG;
use Symfony\Component\Validator\Constraints as Assert;
use Scaleplan\Validator\Constraints as AppAssert;

/**
 * Class AmountDTOTrait
 *
 * @package Scaleplan\CloudPayments\DTO\Response\Traits
 */
trait AmountDTOTrait
{
    /**
     * @var float
     *
     * @Assert\NotBlank()
     * @AppAssert\FuzzyType(type="float", groups={"type"})
     * @Assert\GreaterThanOrEqual(0.01)
     *
     * @SWG\Property(
     *     property="amount",
     *     type="float",
     *     nullable=false,
     *     description="Сумма оплаты из параметров платежа"
     * )
     */
    protected $amount;

    /**
     * @return float
     */
    public function getAmount()
    {
        return $this->amount;
    }
}
