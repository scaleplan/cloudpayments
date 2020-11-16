<?php
declare(strict_types=1);

namespace Scaleplan\CloudPayments\DTO\Request\Traits;

use OpenApi\Annotations as SWG;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Class OptionalIntervalDTOTrait
 *
 * @package Scaleplan\CloudPayments\DTO\Request\Traits
 */
trait OptionalIntervalDTOTrait
{
    /**
     * @var string|null
     *
     * @Assert\Type(type="string", groups={"type"})
     * @Assert\Choice(
     *     strict=true,
     *     choices=\Scaleplan\CloudPayments\Constants\Intervals::ALL
     * )
     *
     * @SWG\Property(
     *     property="interval",
     *     type="string",
     *     nullable=true,
     *     description="Интервал. Возможные значения: Day, Week, Month"
     * )
     */
    protected $interval;

    /**
     * @return string|null
     */
    public function getInterval()
    {
        return $this->interval;
    }

    /**
     * @param string|null $interval
     */
    public function setInterval($interval) : void
    {
        $this->interval = $interval;
    }
}
