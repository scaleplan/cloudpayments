<?php
declare(strict_types=1);

namespace Scaleplan\CloudPayments\DTO\Traits;

use OpenApi\Annotations as SWG;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Class IpDistrictDTOTrait
 *
 * @package Scaleplan\CloudPayments\DTO\Traits
 */
trait IpDistrictDTOTrait
{
    /**
     * @var string|null
     *
     * @Assert\Type(type="string", groups={"type"})
     *
     * @SWG\Property(
     *     property="ipDistrict",
     *     type="string",
     *     nullable=true,
     *     description="Округ нахождения плательщика"
     * )
     */
    protected $ipDistrict;

    /**
     * @return string|null
     */
    public function getIpDistrict()
    {
        return $this->ipDistrict;
    }
}
