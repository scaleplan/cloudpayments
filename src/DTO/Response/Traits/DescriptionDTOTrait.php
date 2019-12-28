<?php
declare(strict_types=1);

namespace Scaleplan\CloudPayments\DTO\Response\Traits;

use OpenApi\Annotations as SWG;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Class DescriptionDTOTrait
 *
 * @package Scaleplan\CloudPayments\DTO\Response\Traits
 */
trait DescriptionDTOTrait
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
     *     description="Назначение оплаты из параметров платежа"
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
}
