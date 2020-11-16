<?php
declare(strict_types=1);

namespace Scaleplan\CloudPayments\DTO\Request\Traits;

use OpenApi\Annotations as SWG;
use Symfony\Component\Validator\Constraints as Assert;
use Scaleplan\Validator\Constraints as AppAssert;

/**
 * Class PhoneDTOTrait
 *
 * @package Scaleplan\CloudPayments\DTO\Request\Traits
 */
trait PhoneDTOTrait
{
    /**
     * @var string|null
     *
     * @Assert\Type(type="string", groups={"type"})
     * @AppAssert\E164()
     *
     * @SWG\Property(
     *     property="phone",
     *     type="string",
     *     nullable=false,
     *     description="Номер телефона плательщика"
     * )
     */
    protected $phone;

    /**
     * @return string|null
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * @param string|null $phone
     */
    public function setPhone($phone) : void
    {
        $this->phone = $phone;
    }
}
