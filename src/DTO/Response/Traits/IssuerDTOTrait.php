<?php
declare(strict_types=1);

namespace Scaleplan\CloudPayments\DTO\Response\Traits;

use OpenApi\Annotations as SWG;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Class IssuerDTOTrait
 *
 * @package Scaleplan\CloudPayments\DTO\Response\Traits
 */
trait IssuerDTOTrait
{
    /**
     * @var string|null
     *
     * @Assert\Type(type="string", groups={"type"})
     *
     * @SWG\Property(
     *     property="issuer",
     *     type="string",
     *     nullable=true,
     *     description="Название банка-эмитента карты"
     * )
     */
    protected $issuer;

    /**
     * @return string|null
     */
    public function getIssuer()
    {
        return $this->issuer;
    }
}
