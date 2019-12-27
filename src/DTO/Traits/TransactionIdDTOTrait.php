<?php
declare(strict_types=1);

namespace Scaleplan\CloudPayments\DTO\Traits;

use OpenApi\Annotations as SWG;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Class TransactionIdDTOTrait
 *
 * @package Scaleplan\CloudPayments\DTO\Traits
 */
trait TransactionIdDTOTrait
{
    /**
     * @var int
     *
     * @Assert\NotBlank()
     * @Assert\Type(type="int", groups={"type"})
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
