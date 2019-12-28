<?php
declare(strict_types=1);

namespace Scaleplan\CloudPayments\DTO\Response\Traits;

use OpenApi\Annotations as SWG;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Class StartDateDTOTrait
 *
 * @package Scaleplan\CloudPayments\DTO\Response\Traits
 */
trait StartDateDTOTrait
{
    /**
     * @var string
     *
     * @Assert\NotBlank()
     * @Assert\Type(type="string", groups={"type"})
     * @Assert\DateTime(format="Y-m-d H:i:s")
     *
     * @SWG\Property(
     *     property="startDate",
     *     type="string",
     *     nullable=false,
     *     description="Дата и время первого платежа по плану во временной зоне UTC"
     * )
     */
    protected $startDate;
}
