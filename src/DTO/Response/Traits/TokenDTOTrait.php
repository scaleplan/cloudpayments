<?php
declare(strict_types=1);

namespace Scaleplan\CloudPayments\DTO\Response\Traits;

use OpenApi\Annotations as SWG;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Class TokenDTOTrait
 *
 * @package Scaleplan\CloudPayments\DTO\Response\Traits
 */
trait TokenDTOTrait
{
    /**
     * @var string|null
     *
     * @Assert\Type(type="string", groups={"type"})
     *
     * @SWG\Property(
     *     property="token",
     *     type="string",
     *     nullable=true,
     *     description="Токен карты для повторных платежей без ввода реквизитов"
     * )
     */
    protected $token;

    /**
     * @return string|null
     */
    public function getToken()
    {
        return $this->token;
    }
}
