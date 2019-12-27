<?php
declare(strict_types=1);

namespace Scaleplan\CloudPayments\DTO\Traits;

use OpenApi\Annotations as SWG;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Class AccountIdDTOTrait
 *
 * @package Scaleplan\CloudPayments\DTO\Traits
 */
trait AccountIdDTOTrait
{
    /**
     * @var string|null
     *
     * @Assert\Type(type="string", groups={"type"})
     *
     * @SWG\Property(
     *     property="accountId",
     *     type="string",
     *     nullable=true,
     *     description="Идентификатор пользователя из параметров платежа"
     * )
     */
    protected $accountId;

    /**
     * @return string|null
     */
    public function getAccountId()
    {
        return $this->accountId;
    }
}
