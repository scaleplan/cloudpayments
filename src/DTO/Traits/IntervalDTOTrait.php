<?php
declare(strict_types=1);

namespace Scaleplan\CloudPayments\DTO\Traits;

use OpenApi\Annotations as SWG;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Class IntervalDTOTrait
 *
 * @package Scaleplan\CloudPayments\DTO\Traits
 */
trait IntervalDTOTrait
{
    /**
     * @var string
     *
     * @Assert\NotBlank()
     * @Assert\Type(type="string", groups={"type"})
     * @Assert\Choice(
     *     strict=true,
     *     choices=\Scaleplan\CloudPayments\Constants\Intervals::ALL
     * )
     *
     * @SWG\Property(
     *     property="interval",
     *     type="string",
     *     nullable=false,
     *     description="Интервал. Возможные значения: Week, Month"
     * )
     */
    protected $interval;
}
