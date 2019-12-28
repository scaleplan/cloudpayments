<?php
declare(strict_types=1);

namespace Scaleplan\CloudPayments\DTO\Response\Traits;

use OpenApi\Annotations as SWG;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Class ModelDTOTrait
 *
 * @package Scaleplan\CloudPayments\DTO\Response\Traits
 */
trait ModelDTOTrait
{
    /**
     * @var array
     *
     * @Assert\NotBlank()
     * @Assert\Type(type="array", groups={"type"})
     *
     * @SWG\Property(
     *     property="model",
     *     type="array",
     *     nullable=false
     * )
     */
    protected $model;

    /**
     * @return array
     */
    public function getModel()
    {
        return $this->model;
    }
}
