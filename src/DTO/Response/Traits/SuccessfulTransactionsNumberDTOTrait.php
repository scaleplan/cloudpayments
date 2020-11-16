<?php
declare(strict_types=1);

namespace Scaleplan\CloudPayments\DTO\Response\Traits;

use OpenApi\Annotations as SWG;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Class SuccessfulTransactionsNumberDTOTrait
 *
 * @package Scaleplan\CloudPayments\DTO\Response\Traits
 */
trait SuccessfulTransactionsNumberDTOTrait
{
    /**
     * @var int
     *
     * @Assert\NotBlank()
     * @Assert\Type(type="int", groups={"type"})
     * @Assert\PositiveOrZero()
     *
     * @SWG\Property(
     *     property="successfulTransactionsNumber",
     *     type="int",
     *     nullable=false,
     *     description="Количество успешных платежей"
     * )
     */
    protected $successfulTransactionsNumber;

    /**
     * @return int
     */
    public function getSuccessfulTransactionsNumber()
    {
        return $this->successfulTransactionsNumber;
    }
}
