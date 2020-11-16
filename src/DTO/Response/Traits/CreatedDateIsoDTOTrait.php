<?php
declare(strict_types=1);

namespace Scaleplan\CloudPayments\DTO\Response\Traits;

use OpenApi\Annotations as SWG;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Class StartDateDTOTrait
 *
 * @package Scaleplan\CloudPayments\DTO\Response\Traits
 */
trait CreatedDateIsoDTOTrait
{
    /**
     * @var string
     *
     * @Assert\NotBlank()
     * @Assert\Type(type="string", groups={"type"})
     * @Assert\DateTime(format=\DateTimeInterface::ISO8601)
     *
     * @SWG\Property(
     *     property="createdDateIso",
     *     type="string",
     *     nullable=false,
     *     description="Дата и время создания платежа"
     * )
     */
    protected $createdDateIso;

    /**
     * @return string
     */
    public function getCreatedDateIso()
    {
        return $this->createdDateIso;
    }
}
