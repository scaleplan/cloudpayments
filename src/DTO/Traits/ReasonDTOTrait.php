<?php
declare(strict_types=1);

namespace Scaleplan\CloudPayments\DTO\Traits;

use OpenApi\Annotations as SWG;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Class ReasonDTOTrait
 *
 * @package Scaleplan\CloudPayments\DTO\Traits
 */
trait ReasonDTOTrait
{
    /**
     * @var string
     *
     * @Assert\NotBlank()
     * @Assert\Type(type="string", groups={"type"})
     *
     * @SWG\Property(
     *     property="reason",
     *     type="string",
     *     nullable=false,
     *     description="Причина отказа"
     * )
     */
    protected $reason;

    /**
     * @return string
     */
    public function getReason()
    {
        return $this->reason;
    }
}
