<?php
declare(strict_types=1);

namespace Scaleplan\CloudPayments\DTO\Traits;

use OpenApi\Annotations as SWG;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Class CardExpDateDTOTrait
 *
 * @package Scaleplan\CloudPayments\DTO\Traits
 */
trait CardExpDateDTOTrait
{
    /**
     * @var string
     *
     * @Assert\NotBlank()
     * @Assert\Type(type="string", groups={"type"})
     * @Assert\DateTime(format="y/m")
     *
     * @SWG\Property(
     *     property="cardExpDate",
     *     type="string",
     *     nullable=false,
     *     description="Срок действия карты в формате MM/YY"
     * )
     */
    protected $cardExpDate;

    /**
     * @return string
     */
    public function getCardExpDate()
    {
        return $this->cardExpDate;
    }
}
