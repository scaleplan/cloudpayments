<?php
declare(strict_types=1);

namespace Scaleplan\CloudPayments\DTO\Response\Traits;

use OpenApi\Annotations as SWG;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Class LastTransactionDateDTOTrait
 *
 * @package Scaleplan\CloudPayments\DTO\Response\Traits
 */
trait LastTransactionDateDTOTrait
{
    /**
     * @var string|null
     *
     * @Assert\Type(type="string", groups={"type"})
     * @Assert\DateTime(format="Y-m-d H:i:s")
     *
     * @SWG\Property(
     *     property="lastTransactionDate",
     *     type="string",
     *     nullable=true,
     *     description="Дата и время последнего успешного платежа во временной зоне UTC"
     * )
     */
    protected $lastTransactionDate;

    /**
     * @return string|null
     */
    public function getLastTransactionDate()
    {
        return $this->lastTransactionDate;
    }
}
