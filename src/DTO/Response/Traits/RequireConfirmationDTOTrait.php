<?php
declare(strict_types=1);

namespace Scaleplan\CloudPayments\DTO\Response\Traits;

use OpenApi\Annotations as SWG;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Class RequireConfirmationDTOTrait
 *
 * @package Scaleplan\CloudPayments\DTO\Response\Traits
 */
trait RequireConfirmationDTOTrait
{
    /**
     * @var bool
     *
     * @Assert\NotBlank()
     * @Assert\Type(type="bool", groups={"type"})
     *
     * @SWG\Property(
     *     property="requireConfirmation",
     *     type="bool",
     *     nullable=false,
     *     description="Если значение true — платеж будет выполнен по двустадийной схеме"
     * )
     */
    protected $requireConfirmation;

    /**
     * @return bool
     */
    public function isRequireConfirmation()
    {
        return $this->requireConfirmation;
    }
}
