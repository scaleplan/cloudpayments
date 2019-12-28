<?php
declare(strict_types=1);

namespace Scaleplan\CloudPayments\DTO\Response\Traits;

use OpenApi\Annotations as SWG;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Class EmailDTOTrait
 *
 * @package Scaleplan\CloudPayments\DTO\Response\Traits
 */
trait EmailDTOTrait
{
    /**
     * @var string|null
     *
     * @Assert\Type(type="string", groups={"type"})
     * @Assert\Email()
     *
     * @SWG\Property(
     *     property="email",
     *     type="string",
     *     nullable=true,
     *     description="E-mail адрес плательщика"
     * )
     */
    protected $email;

    /**
     * @return string|null
     */
    public function getEmail()
    {
        return $this->email;
    }
}
