<?php
declare(strict_types=1);

namespace Scaleplan\CloudPayments\DTO\Response\Traits;

use OpenApi\Annotations as SWG;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Class PublicIdDTOTrait
 *
 * @package Scaleplan\CloudPayments\DTO\Response\Traits
 */
trait PublicIdDTOTrait
{
    /**
     * @var string
     *
     * @Assert\NotBlank()
     * @Assert\Type(type="string", groups={"type"})
     *
     * @SWG\Property(
     *     property="publicId",
     *     type="string",
     *     nullable=false,
     *     description="Идентификатор аккаунта"
     * )
     */
    protected $publicId;

    /**
     * @return string
     */
    public function getPublicId()
    {
        return $this->publicId;
    }
}
