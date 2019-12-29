<?php
declare(strict_types=1);

namespace Scaleplan\CloudPayments\DTO\Response\Traits;

use OpenApi\Annotations as SWG;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Class CultureNameDTOTrait
 *
 * @package Scaleplan\CloudPayments\DTO\Response\Traits
 */
trait CultureNameDTOTrait
{
    /**
     * @var string
     *
     * @Assert\NotBlank()
     * @Assert\Type(type="string", groups={"type"})
     * @Assert\Length(2)
     *
     * @SWG\Property(
     *     property="cultureName",
     *     type="string",
     *     nullable=false,
     *     description="Локаль"
     * )
     */
    protected $cultureName;

    /**
     * @return string
     */
    public function getCultureName()
    {
        return $this->cultureName;
    }
}
