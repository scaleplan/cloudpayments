<?php
declare(strict_types=1);

namespace Scaleplan\CloudPayments\DTO\Response\Traits;

use OpenApi\Annotations as SWG;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Class IpAddressDTOTrait
 *
 * @package Scaleplan\CloudPayments\DTO\Response\Traits
 */
trait IpAddressDTOTrait
{
    /**
     * @var string|null
     *
     * @Assert\Type(type="string", groups={"type"})
     * @Assert\Ip()
     *
     * @SWG\Property(
     *     property="ipAddress",
     *     type="string",
     *     nullable=true,
     *     description="IP адрес плательщика"
     * )
     */
    protected $ipAddress;

    /**
     * @return string|null
     */
    public function getIpAddress()
    {
        return $this->ipAddress;
    }
}
