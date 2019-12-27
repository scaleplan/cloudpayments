<?php
declare(strict_types=1);

namespace Scaleplan\CloudPayments\DTO\Traits;

use OpenApi\Annotations as SWG;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Class IssuerBankCountryDTOTrait
 *
 * @package Scaleplan\CloudPayments\DTO\Traits
 */
trait IssuerBankCountryDTOTrait
{
    /**
     * @var string|null
     *
     * @Assert\Type(type="string", groups={"type"})
     * @Assert\Country()
     *
     * @SWG\Property(
     *     property="issuerBankCountry",
     *     type="string",
     *     nullable=true,
     *     description="Двухбуквенный код страны эмитента карты по ISO3166-1"
     * )
     */
    protected $issuerBankCountry;

    /**
     * @return string|null
     */
    public function getIssuerBankCountry()
    {
        return $this->issuerBankCountry;
    }
}
