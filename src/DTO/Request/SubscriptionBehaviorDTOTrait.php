<?php
declare(strict_types=1);

namespace Scaleplan\CloudPayments\DTO\Request\Traits;

use OpenApi\Annotations as SWG;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Class SubscriptionBehaviorDTOTrait
 *
 * @package Scaleplan\CloudPayments\DTO\Request\Traits
 */
trait SubscriptionBehaviorDTOTrait
{
    /**
     * @var string|null
     *
     * @Assert\Type(type="string", groups={"type"})
     * @Assert\Choice(
     *     strict=true,
     *     choices=\Scaleplan\CloudPayments\Constants\SubscriptionBehaviors::ALL
     * )
     *
     * @SWG\Property(
     *     property="subscriptionBehavior",
     *     type="string",
     *     nullable=true,
     *     description="Для создания платежа с подпиской. Возможные значения: CreateWeekly, CreateMonthly"
     * )
     */
    protected $subscriptionBehavior;

    /**
     * @return string|null
     */
    public function getSubscriptionBehavior()
    {
        return $this->subscriptionBehavior;
    }

    /**
     * @param string|null $subscriptionBehavior
     */
    public function setSubscriptionBehavior($subscriptionBehavior) : void
    {
        $this->subscriptionBehavior = $subscriptionBehavior;
    }
}
