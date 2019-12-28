<?php
declare(strict_types=1);

namespace Scaleplan\CloudPayments\DTO\Response\Traits;

use OpenApi\Annotations as SWG;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Class PeriodDTOTrait
 *
 * @package Scaleplan\CloudPayments\DTO\Response\Traits
 */
trait PeriodDTOTrait
{
    /**
     * @var int
     *
     * @Assert\Type(type="int", groups={"type"})
     * @Assert\Positive()
     *
     * @SWG\Property(
     *     property="period",
     *     type="int",
     *     nullable=false,
     *     description="Период. В комбинации с интервалом 1 Month значит раз в месяц, а 2 Week — раз в две недели"
     * )
     */
    protected $period;

    /**
     * @return int
     */
    public function getPeriod()
    {
        return $this->period;
    }
}
