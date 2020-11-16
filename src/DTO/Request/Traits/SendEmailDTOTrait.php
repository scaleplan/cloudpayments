<?php
declare(strict_types=1);

namespace Scaleplan\CloudPayments\DTO\Request\Traits;

use OpenApi\Annotations as SWG;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Class SendEmailDTOTrait
 *
 * @package Scaleplan\CloudPayments\DTO\Request\Traits
 */
trait SendEmailDTOTrait
{
    /**
     * @var bool|null
     *
     * @Assert\Type(type="bool", groups={"type"})
     *
     * @SWG\Property(
     *     property="sendEmail",
     *     type="bool",
     *     nullable=true,
     *     description="Если значение true — плательщик получит письмо со ссылкой на оплату"
     * )
     */
    protected $sendEmail;

    /**
     * @return bool|null
     */
    public function isSendEmail()
    {
        return $this->sendEmail;
    }

    /**
     * @param bool|null $sendEmail
     */
    public function setSendEmail($sendEmail) : void
    {
        $this->sendEmail = $sendEmail;
    }
}
