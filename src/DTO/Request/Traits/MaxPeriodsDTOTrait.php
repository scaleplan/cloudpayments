<?php
declare(strict_types=1);

namespace Scaleplan\CloudPayments\DTO\Request\Traits;

use OpenApi\Annotations as SWG;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Class MaxPeriodsDTOTrait
 *
 * @package Scaleplan\CloudPayments\DTO\Request\Traits
 */
trait MaxPeriodsDTOTrait
{
    /**
     * @var int|null
     *
     * @Assert\Type(type="int", groups={"type"})
     * @Assert\PositiveOrZero()
     *
     * @SWG\Property(
     *     property="maxPeriods",
     *     type="int",
     *     nullable=true,
     *     description="Максимальное количество платежей в подписке"
     * )
     */
    protected $maxPeriods;

    /**
     * @return int|null
     */
    public function getMaxPeriods()
    {
        return $this->maxPeriods;
    }

    /**
     * @param int|null $maxPeriods
     */
    public function setMaxPeriods($maxPeriods) : void
    {
        $this->maxPeriods = $maxPeriods;
    }
}
