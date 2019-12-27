<?php
declare(strict_types=1);

namespace Scaleplan\CloudPayments\DTO\Traits;

use OpenApi\Annotations as SWG;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Class TotalFeeDTOTrait
 *
 * @package Scaleplan\CloudPayments\DTO\Traits
 */
trait TotalFeeDTOTrait
{
    /**
     * @var float
     *
     * @Assert\NotBlank()
     * @Assert\Type(type="float", groups={"type"})
     * @Assert\GreaterThanOrEqual(0.01)
     *
     * @SWG\Property(
     *     property="totalFee",
     *     type="float",
     *     nullable=false,
     *     description="Значение общей комиссии"
     * )
     */
    protected $totalFee;

    /**
     * @return float
     */
    public function getTotalFee()
    {
        return $this->totalFee;
    }
}
