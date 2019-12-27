<?php
declare(strict_types=1);

namespace Scaleplan\CloudPayments\DTO\Traits;

use OpenApi\Annotations as SWG;
use Symfony\Component\Validator\Constraints as Assert;
use Scaleplan\Validator\Constraints as AppAssert;

/**
 * Class CardFirstSixDTOTrait
 *
 * @package Scaleplan\CloudPayments\DTO\Traits
 */
trait CardFirstSixDTOTrait
{
    /**
     * @var string
     *
     * @Assert\NotBlank()
     * @AppAssert\FuzzyType(type="int", groups={"type"})
     * @Assert\GreaterThan(100000)
     *
     * @SWG\Property(
     *     property="cardFirstSix",
     *     type="string",
     *     nullable=false,
     *     description="Первые 6 цифр номера карты"
     * )
     */
    protected $cardFirstSix;

    /**
     * @return string
     */
    public function getCardFirstSix()
    {
        return $this->cardFirstSix;
    }
}
