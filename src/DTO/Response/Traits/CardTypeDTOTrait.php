<?php
declare(strict_types=1);

namespace Scaleplan\CloudPayments\DTO\Response\Traits;

use OpenApi\Annotations as SWG;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Class CardTypeDTOTrait
 *
 * @package Scaleplan\CloudPayments\DTO\Response\Traits
 */
trait CardTypeDTOTrait
{
    /**
     * @var string
     *
     * @Assert\NotBlank()
     * @Assert\Choice(
     *     strict=true,
     *     choices=\Scaleplan\CloudPayments\Constants\CardTypes::ALL
     * )
     *
     * @SWG\Property(
     *     property="cardType",
     *     type="string",
     *     nullable=false,
     *     description="Платежная система карты: Visa, MasterCard, Maestro или МИР"
     * )
     */
    protected $cardType;

    /**
     * @return string
     */
    public function getCardType()
    {
        return $this->cardType;
    }
}
