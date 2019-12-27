<?php
declare(strict_types=1);

namespace Scaleplan\CloudPayments\DTO\Traits;

use OpenApi\Annotations as SWG;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Class NameDTOTrait
 *
 * @package Scaleplan\CloudPayments\DTO\Traits
 */
trait NameDTOTrait
{
    /**
     * @var string|null
     *
     * @Assert\Type(type="string", groups={"type"})
     *
     * @SWG\Property(
     *     property="name",
     *     type="string",
     *     nullable=true,
     *     description="Имя держателя карты"
     * )
     */
    protected $name;

    /**
     * @return string|null
     */
    public function getName()
    {
        return $this->name;
    }
}
