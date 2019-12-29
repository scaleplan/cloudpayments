<?php
declare(strict_types=1);

namespace Scaleplan\CloudPayments\DTO\Request\Traits;

use OpenApi\Annotations as SWG;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Class SendSmsDTOTrait
 *
 * @package Scaleplan\CloudPayments\DTO\Request\Traits
 */
trait SendSmsDTOTrait
{
    /**
     * @var bool|null
     *
     * @Assert\Type(type="bool", groups={"type"})
     *
     * @SWG\Property(
     *     property="sendSms",
     *     type="bool",
     *     nullable=true,
     *     description="Если значение true — плательщик получит СМС со ссылкой на оплату"
     * )
     */
    protected $sendSms;

    /**
     * @return bool|null
     */
    public function getSendSms()
    {
        return $this->sendSms;
    }

    /**
     * @param bool|null $sendSms
     */
    public function setSendSms($sendSms) : void
    {
        $this->sendSms = $sendSms;
    }
}
