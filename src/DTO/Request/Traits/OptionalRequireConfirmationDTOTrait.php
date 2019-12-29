<?php
declare(strict_types=1);

namespace Scaleplan\CloudPayments\DTO\Request\Traits;

use OpenApi\Annotations as SWG;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Class OptionalRequireConfirmationDTOTrait
 *
 * @package Scaleplan\CloudPayments\DTO\Request\Traits
 */
trait OptionalRequireConfirmationDTOTrait
{
    /**
     * @var bool|null
     *
     * @Assert\Type(type="bool", groups={"type"})
     *
     * @SWG\Property(
     *     property="requireConfirmation",
     *     type="bool",
     *     nullable=true,
     *     description="Если значение true — платеж будет выполнен по двустадийной схеме"
     * )
     */
    protected $requireConfirmation;

    /**
     * @return bool|null
     */
    public function isRequireConfirmation()
    {
        return $this->requireConfirmation;
    }

    /**
     * @param bool|null $requireConfirmation
     */
    public function setRequireConfirmation($requireConfirmation) : void
    {
        $this->requireConfirmation = $requireConfirmation;
    }
}
