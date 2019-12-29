<?php
declare(strict_types=1);

namespace Scaleplan\CloudPayments\DTO\Request\Traits;

use OpenApi\Annotations as SWG;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Class OptionalStartDateDTOTrait
 *
 * @package Scaleplan\CloudPayments\DTO\Request\Traits
 */
trait OptionalStartDateDTOTrait
{
    /**
     * @var string|null
     *
     * @Assert\Type(type="string", groups={"type"})
     * @Assert\DateTime(format="Y-m-d H:i:s")
     *
     * @SWG\Property(
     *     property="startDate",
     *     type="string",
     *     nullable=true,
     *     description="Дата и время первого платежа по плану во временной зоне UTC"
     * )
     */
    protected $startDate;

    /**
     * @return string|null
     */
    public function getStartDate()
    {
        return $this->startDate;
    }

    /**
     * @param string|null $startDate
     */
    public function setStartDate($startDate) : void
    {
        $this->startDate = $startDate;
    }
}
