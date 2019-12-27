<?php
declare(strict_types=1);

namespace Scaleplan\CloudPayments\DTO\Traits;

use OpenApi\Annotations as SWG;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Class IpRegionDTOTrait
 *
 * @package Scaleplan\CloudPayments\DTO\Traits
 */
trait IpRegionDTOTrait
{
    /**
     * @var string|null
     *
     * @Assert\Type(type="string", groups={"type"})
     *
     * @SWG\Property(
     *     property="ipRegion",
     *     type="string",
     *     nullable=true,
     *     description="Регион нахождения плательщика"
     * )
     */
    protected $ipRegion;

    /**
     * @return string|null
     */
    public function getIpRegion()
    {
        return $this->ipRegion;
    }
}
