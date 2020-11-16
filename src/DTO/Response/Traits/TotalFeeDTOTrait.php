<?php
declare(strict_types=1);

namespace Scaleplan\CloudPayments\DTO\Response\Traits;

use OpenApi\Annotations as SWG;
use Symfony\Component\Validator\Constraints as Assert;
use Scaleplan\Validator\Constraints as AppAssert;

/**
 * Class TotalFeeDTOTrait
 *
 * @package Scaleplan\CloudPayments\DTO\Response\Traits
 */
trait TotalFeeDTOTrait
{
    /**
     * @var float
     *
     * @Assert\NotBlank()
     * @AppAssert\FuzzyType(type="float", groups={"type"})
     * @Assert\GreaterThanOrEqual(0.00)
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
