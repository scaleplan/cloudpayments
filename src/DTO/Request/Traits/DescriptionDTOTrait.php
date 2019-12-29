<?php
declare(strict_types=1);

namespace Scaleplan\CloudPayments\DTO\Request\Traits;

use OpenApi\Annotations as SWG;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Class DescriptionDTOTrait
 *
 * @package Scaleplan\CloudPayments\DTO\Request\Traits
 */
trait DescriptionDTOTrait
{
    /**
     * @var string
     *
     * @Assert\NotBlank()
     * @Assert\Type(type="string", groups={"type"})
     *
     * @SWG\Property(
     *     property="description",
     *     type="string",
     *     nullable=false,
     *     description="Назначение платежа в свободной форме"
     * )
     */
    protected $description;

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription($description) : void
    {
        $this->description = $description;
    }
}
