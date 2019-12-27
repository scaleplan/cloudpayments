<?php
declare(strict_types=1);

namespace Scaleplan\CloudPayments\DTO\Traits;

use OpenApi\Annotations as SWG;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Class FailedTransactionsNumberDTOTrait
 *
 * @package Scaleplan\CloudPayments\DTO\Traits
 */
trait FailedTransactionsNumberDTOTrait
{
    /**
     * @var int
     *
     * @Assert\NotBlank()
     * @Assert\Type(type="int", groups={"type"})
     * @Assert\PositiveOrZero()
     *
     * @SWG\Property(
     *     property="failedTransactionsNumber",
     *     type="int",
     *     nullable=false,
     *     description="Количество неуспешных платежей (обнуляется после каждого успешного)"
     * )
     */
    protected $failedTransactionsNumber;

    /**
     * @return int
     */
    public function getFailedTransactionsNumber()
    {
        return $this->failedTransactionsNumber;
    }
}
