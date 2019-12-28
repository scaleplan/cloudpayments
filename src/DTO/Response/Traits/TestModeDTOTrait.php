<?php
declare(strict_types=1);

namespace Scaleplan\CloudPayments\DTO\Response\Traits;

use OpenApi\Annotations as SWG;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Class TestModeDTOTrait
 *
 * @package Scaleplan\CloudPayments\DTO\Response\Traits
 */
trait TestModeDTOTrait
{
    /**
     * @var string
     *
     * @Assert\NotBlank()
     * @Assert\Type(type="int", groups={"type"})
     * @Assert\PositiveOrZero()
     * @Assert\LessThanOrEqual(1)
     *
     * @SWG\Property(
     *     property="testMode",
     *     type="int",
     *     nullable=false,
     *     description="Признак тестового режима"
     * )
     */
    protected $testMode;

    /**
     * @return string
     */
    public function getTestMode()
    {
        return $this->testMode;
    }
}
