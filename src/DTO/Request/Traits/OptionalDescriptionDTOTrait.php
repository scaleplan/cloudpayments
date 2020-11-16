<?php
declare(strict_types=1);

namespace Scaleplan\CloudPayments\DTO\Request\Traits;

use OpenApi\Annotations as SWG;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Class OptionalDescriptionDTOTrait
 *
 * @package Scaleplan\CloudPayments\DTO\Request\Traits
 */
trait OptionalDescriptionDTOTrait
{
    /**
     * @var string|null
     *
     * @Assert\Type(type="string", groups={"type"})
     *
     * @SWG\Property(
     *     property="description",
     *     type="string",
     *     nullable=true,
     *     description="Назначение платежа в свободной форме"
     * )
     */
    protected $description;

    /**
     * @return string|null
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string|null $description
     */
    public function setDescription($description) : void
    {
        $this->description = $description;
    }
}
