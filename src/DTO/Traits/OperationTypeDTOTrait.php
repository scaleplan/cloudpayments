<?php
declare(strict_types=1);

namespace Scaleplan\CloudPayments\DTO\Traits;

use OpenApi\Annotations as SWG;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Class OperationTypeDTOTrait
 *
 * @package Scaleplan\CloudPayments\DTO\Traits
 */
trait OperationTypeDTOTrait
{
    /**
     * @var string
     *
     * @Assert\NotBlank()
     * @Assert\Type(type="string", groups={"type"})
     * @Assert\Choice(
     *     strict=true,
     *     choices=\Scaleplan\CloudPayments\Constants\OperationTypes::ALL
     * )
     *
     * @SWG\Property(
     *     property="operationType",
     *     type="string",
     *     nullable=false,
     *     description="Тип операции: Payment/Refund/CardPayout"
     * )
     */
    protected $operationType;

    /**
     * @return string
     */
    public function getOperationType()
    {
        return $this->operationType;
    }
}
