<?php
declare(strict_types=1);

namespace Scaleplan\CloudPayments\DTO\Response\Traits;

use OpenApi\Annotations as SWG;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Class CardHolderMessageDTOTrait
 *
 * @package Scaleplan\CloudPayments\DTO\Response\Traits
 */
trait CardHolderMessageDTOTrait
{
    /**
     * @var string
     *
     * @Assert\NotBlank()
     * @Assert\Type(type="string", groups={"type"})
     *
     * @SWG\Property(
     *     property="cardHolderMessage",
     *     type="string",
     *     nullable=false,
     *     description="Сообщение для получателя выплаты"
     * )
     */
    protected $cardHolderMessage;

    /**
     * @return string
     */
    public function getCardHolderMessage()
    {
        return $this->cardHolderMessage;
    }
}
