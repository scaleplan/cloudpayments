<?php
declare(strict_types=1);

namespace Scaleplan\CloudPayments\DTO\Traits;

use OpenApi\Annotations as SWG;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Class DateTimeDTOTrait
 *
 * @package Scaleplan\CloudPayments\DTO\Traits
 */
trait DateTimeDTOTrait
{
    /**
     * @var string
     *
     * @Assert\NotBlank()
     * @Assert\Type(type="string", groups={"type"})
     * @Assert\DateTime(format="Y-m-d H:i:s")
     *
     * @SWG\Property(
     *     property="dateTime",
     *     type="string",
     *     nullable=false,
     *     description="Дата/время создания платежа во временной зоне UTC"
     * )
     */
    protected $dateTime;

    /**
     * @return string
     */
    public function getDateTime()
    {
        return $this->dateTime;
    }
}
