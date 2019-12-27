<?php
declare(strict_types=1);

namespace Scaleplan\CloudPayments\DTO\Traits;

use OpenApi\Annotations as SWG;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Class AmountDTOTrait
 *
 * @package Scaleplan\CloudPayments\DTO\Traits
 */
trait AmountDTOTrait
{
    /**
     * @var float
     *
     * @Assert\NotBlank()
     * @Assert\Type(type="float", groups={"type"})
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
