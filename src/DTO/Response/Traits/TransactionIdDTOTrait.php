<?php
declare(strict_types=1);

namespace Scaleplan\CloudPayments\DTO\Response\Traits;

use OpenApi\Annotations as SWG;
use Symfony\Component\Validator\Constraints as Assert;
use Scaleplan\Validator\Constraints as AppAssert;

/**
 * Class TransactionIdDTOTrait
 *
 * @package Scaleplan\CloudPayments\DTO\Response\Traits
 */
trait TransactionIdDTOTrait
{
    /**
     * @var int
     *
     * @Assert\NotBlank()
     * @AppAssert\FuzzyType(type="int", groups={"type"})
     * @Assert\Positive()
     *
     * @SWG\Property(
     *     property="transactionId",
     *     type="int",
     *     nullable=false,
     *     description="Номер транзакции в системе"
     * )
     */
    protected $transactionId;

    /**
     * @return int
     */
    public function getTransactionId()
    {
        return $this->transactionId;
    }
}
