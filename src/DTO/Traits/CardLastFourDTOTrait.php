<?php
declare(strict_types=1);

namespace Scaleplan\CloudPayments\DTO\Traits;

use OpenApi\Annotations as SWG;
use Symfony\Component\Validator\Constraints as Assert;
use Scaleplan\Validator\Constraints as AppAssert;

/**
 * Class CardLastFourDTOTrait
 *
 * @package Scaleplan\CloudPayments\DTO\Traits
 */
trait CardLastFourDTOTrait
{
    /**
     * @var string
     *
     * @Assert\NotBlank()
     * @AppAssert\FuzzyType(type="int", groups={"type"})
     * @Assert\LessThanOrEqual(9999)
     * @Assert\PositiveOrZero()
     *
     * @SWG\Property(
     *     property="cardLastFour",
     *     type="string",
     *     nullable=false,
     *     description="Последние 4 цифры номера карты"
     * )
     */
    protected $cardLastFour;

    /**
     * @return string
     */
    public function getCardLastFour()
    {
        return $this->cardLastFour;
    }
}
