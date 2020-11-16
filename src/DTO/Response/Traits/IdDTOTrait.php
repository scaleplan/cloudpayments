<?php
declare(strict_types=1);

namespace Scaleplan\CloudPayments\DTO\Response\Traits;

use OpenApi\Annotations as SWG;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Class TransactionIdDTOTrait
 *
 * @package Scaleplan\CloudPayments\DTO\Response\Traits
 */
trait IdDTOTrait
{
    /**
     * @var int
     *
     * @Assert\NotBlank()
     * @Assert\Type(type="int", groups={"type"})
     * @Assert\Positive()
     *
     * @SWG\Property(
     *     property="id",
     *     type="int",
     *     nullable=false,
     *     description="Идентификатор подписки"
     * )
     */
    protected $id;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }
}
