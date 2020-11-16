<?php
declare(strict_types=1);

namespace Scaleplan\CloudPayments\DTO\Request\Traits;

use OpenApi\Annotations as SWG;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Class EmailDTOTrait
 *
 * @package Scaleplan\CloudPayments\DTO\Request\Traits
 */
trait EmailDTOTrait
{
    /**
     * @var string
     *
     * @Assert\NotBlank()
     * @Assert\Type(type="string", groups={"type"})
     * @Assert\Email()
     *
     * @SWG\Property(
     *     property="email",
     *     type="string",
     *     nullable=false,
     *     description="E-mail адрес плательщика"
     * )
     */
    protected $email;

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param string $email
     */
    public function setEmail($email) : void
    {
        $this->email = $email;
    }
}
