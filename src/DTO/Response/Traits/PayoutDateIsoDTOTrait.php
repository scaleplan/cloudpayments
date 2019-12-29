<?php
declare(strict_types=1);

namespace Scaleplan\CloudPayments\DTO\Response\Traits;

use OpenApi\Annotations as SWG;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Class PayoutDateIsoDTOTrait
 *
 * @package Scaleplan\CloudPayments\DTO\Response\Traits
 */
trait PayoutDateIsoDTOTrait
{
    /**
     * @var string
     *
     * @Assert\NotBlank()
     * @Assert\Type(type="string", groups={"type"})
     * @Assert\DateTime(format=\DateTimeInterface::ISO8601)
     *
     * @SWG\Property(
     *     property="payoutDateIso",
     *     type="string",
     *     nullable=false,
     *     description="Дата и время выплаты"
     * )
     */
    protected $payoutDateIso;

    /**
     * @return string
     */
    public function getPayoutDateIso()
    {
        return $this->payoutDateIso;
    }
}
