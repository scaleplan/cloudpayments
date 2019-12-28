<?php
declare(strict_types=1);

namespace Scaleplan\CloudPayments\DTO\Response\Traits;

use OpenApi\Annotations as SWG;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Class ReasonCodeDTOTrait
 *
 * @package Scaleplan\CloudPayments\DTO\Response\Traits
 */
trait ReasonCodeDTOTrait
{
    /**
     * @var int
     *
     * @Assert\NotBlank()
     * @Assert\Type(type="int", groups={"type"})
     * @Assert\Choice(
     *     strict=true,
     *     choices=\Scaleplan\CloudPayments\Constants\ErrorCodes::ALL
     * )
     *
     * @SWG\Property(
     *     property="reasonCode",
     *     type="int",
     *     nullable=false,
     *     description="Код ошибки"
     * )
     */
    protected $reasonCode;

    /**
     * @return int
     */
    public function getReasonCode()
    {
        return $this->reasonCode;
    }
}
