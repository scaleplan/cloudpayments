<?php
declare(strict_types=1);

namespace Scaleplan\CloudPayments\DTO\Request\Traits;

use OpenApi\Annotations as SWG;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Class TokenDTOTrait
 *
 * @package Scaleplan\CloudPayments\DTO\Request\Traits
 */
trait TokenDTOTrait
{
    /**
     * @var string
     *
     * @Assert\NotBlank()
     * @Assert\Type(type="string", groups={"type"})
     *
     * @SWG\Property(
     *     property="token",
     *     type="string",
     *     nullable=false,
     *     description="Токен карты, выданный системой после первого платежа"
     * )
     */
    protected $token;

    /**
     * @return string
     */
    public function getToken()
    {
        return $this->token;
    }

    /**
     * @param string $token
     */
    public function setToken($token) : void
    {
        $this->token = $token;
    }
}
