<?php
declare(strict_types=1);

namespace Scaleplan\CloudPayments\DTO\Traits;

use OpenApi\Annotations as SWG;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Class GatewayNameDTOTrait
 *
 * @package Scaleplan\CloudPayments\DTO\Traits
 */
trait GatewayNameDTOTrait
{
    /**
     * @var string|null
     *
     * @Assert\NotBlank()
     * @Assert\Type(type="string", groups={"type"})
     *
     * @SWG\Property(
     *     property="gatewayName",
     *     type="string",
     *     nullable=false,
     *     description="Идентификатор банка-эквайера"
     * )
     */
    protected $gatewayName;

    /**
     * @return string|null
     */
    public function getGatewayName()
    {
        return $this->gatewayName;
    }
}
