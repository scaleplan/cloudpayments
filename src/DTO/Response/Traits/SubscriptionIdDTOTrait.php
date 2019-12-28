<?php
declare(strict_types=1);

namespace Scaleplan\CloudPayments\DTO\Response\Traits;

use OpenApi\Annotations as SWG;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Class SubscriptionIdDTOTrait
 *
 * @package Scaleplan\CloudPayments\DTO\Response\Traits
 */
trait SubscriptionIdDTOTrait
{
    /**
     * @var string|null
     *
     * @Assert\Type(type="string", groups={"type"})
     *
     * @SWG\Property(
     *     property="subscriptionId",
     *     type="string",
     *     nullable=true,
     *     description="Идентификатор подписки (для рекуррентных платежей)"
     * )
     */
    protected $subscriptionId;

    /**
     * @return string|null
     */
    public function getSubscriptionId()
    {
        return $this->subscriptionId;
    }
}
