<?php
declare(strict_types=1);

namespace Scaleplan\CloudPayments\DTO\Request\Traits;

use OpenApi\Annotations as SWG;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Class AccountIdDTOTrait
 *
 * @package Scaleplan\CloudPayments\DTO\Request\Traits
 */
trait AccountIdDTOTrait
{
    /**
     * @var string
     *
     * @Assert\NotBlank()
     * @Assert\Type(type="string", groups={"type"})
     *
     * @SWG\Property(
     *     property="accountId",
     *     type="string",
     *     nullable=true,
     *     description="Идентификатор пользователя"
     * )
     */
    protected $accountId;

    /**
     * @return string
     */
    public function getAccountId()
    {
        return $this->accountId;
    }
}
