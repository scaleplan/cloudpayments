<?php
declare(strict_types=1);

namespace Scaleplan\CloudPayments\DTO\Response\Traits;

use OpenApi\Annotations as SWG;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Class NextTransactionDateDTOTrait
 *
 * @package Scaleplan\CloudPayments\DTO\Response\Traits
 */
trait NextTransactionDateDTOTrait
{
    /**
     * @var string|null
     *
     * @Assert\Type(type="string", groups={"type"})
     * @Assert\DateTime(format="Y-m-d H:i:s")
     *
     * @SWG\Property(
     *     property="nextTransactionDate",
     *     type="string",
     *     nullable=true,
     *     description="Дата и время следующего платежа во временной зоне UTC"
     * )
     */
    protected $nextTransactionDate;
}
