<?php
declare(strict_types=1);

namespace Scaleplan\CloudPayments\DTO\Response\Traits;

use OpenApi\Annotations as SWG;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Class IpCountryDTOTrait
 *
 * @package Scaleplan\CloudPayments\DTO\Response\Traits
 */
trait IpCountryDTOTrait
{
    /**
     * @var string|null
     *
     * @Assert\Type(type="string", groups={"type"})
     * @Assert\Country()
     *
     * @SWG\Property(
     *     property="ipCountry",
     *     type="string",
     *     nullable=true,
     *     description="Двухбуквенный код страны нахождения плательщика по ISO3166-1"
     * )
     */
    protected $ipCountry;

    /**
     * @return string|null
     */
    public function getIpCountry()
    {
        return $this->ipCountry;
    }
}
