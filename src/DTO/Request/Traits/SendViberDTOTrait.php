<?php
declare(strict_types=1);

namespace Scaleplan\CloudPayments\DTO\Request\Traits;

use OpenApi\Annotations as SWG;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Class SendViberDTOTrait
 *
 * @package Scaleplan\CloudPayments\DTO\Request\Traits
 */
trait SendViberDTOTrait
{
    /**
     * @var bool|null
     *
     * @Assert\Type(type="bool", groups={"type"})
     *
     * @SWG\Property(
     *     property="sendViber",
     *     type="bool",
     *     nullable=true,
     *     description="Если значение true — плательщик получит сообщение в Viber со ссылкой на оплату"
     * )
     */
    protected $sendViber;

    /**
     * @return bool|null
     */
    public function getSendViber()
    {
        return $this->sendViber;
    }

    /**
     * @param bool|null $sendViber
     */
    public function setSendViber($sendViber) : void
    {
        $this->sendViber = $sendViber;
    }
}
