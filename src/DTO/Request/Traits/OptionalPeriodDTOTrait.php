<?php
declare(strict_types=1);

namespace Scaleplan\CloudPayments\DTO\Request\Traits;

use OpenApi\Annotations as SWG;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Class OptionalPeriodDTOTrait
 *
 * @package Scaleplan\CloudPayments\DTO\Request\Traits
 */
trait OptionalPeriodDTOTrait
{
    /**
     * @var int|null
     *
     * @Assert\Type(type="int", groups={"type"})
     * @Assert\Positive()
     *
     * @SWG\Property(
     *     property="period",
     *     type="int",
     *     nullable=true,
     *     description="Период. В комбинации с интервалом 1 Month значит раз в месяц, а 2 Week — раз в две недели"
     * )
     */
    protected $period;

    /**
     * @return int|null
     */
    public function getPeriod()
    {
        return $this->period;
    }

    /**
     * @param int|null $period
     */
    public function setPeriod($period) : void
    {
        $this->period = $period;
    }
}
