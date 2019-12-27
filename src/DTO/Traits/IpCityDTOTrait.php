<?php
declare(strict_types=1);

namespace Scaleplan\CloudPayments\DTO\Traits;

use OpenApi\Annotations as SWG;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Class IpCityDTOTrait
 *
 * @package Scaleplan\CloudPayments\DTO\Traits
 */
trait IpCityDTOTrait
{
    /**
     * @var string|null
     *
     * @Assert\Type(type="string", groups={"type"})
     *
     * @SWG\Property(
     *     property="ipCity",
     *     type="string",
     *     nullable=true,
     *     description="Город нахождения плательщика"
     * )
     */
    protected $ipCity;

    /**
     * @return string|null
     */
    public function getIpCity()
    {
        return $this->ipCity;
    }
}
