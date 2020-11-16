<?php
declare(strict_types=1);

namespace Scaleplan\CloudPayments\DTO\Response\Traits;

use OpenApi\Annotations as SWG;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Class SuccessDTOTrait
 *
 * @package Scaleplan\CloudPayments\DTO\Response\Traits
 */
trait SuccessDTOTrait
{
    /**
     * @var bool
     *
     * @Assert\NotBlank()
     * @Assert\Type(type="bool", groups={"type"})
     *
     * @SWG\Property(
     *     property="success",
     *     type="bool",
     *     nullable=false,
     * )
     */
    protected $success;

    /**
     * @return bool
     */
    public function isSuccess() : bool
    {
        return $this->success;
    }
}
