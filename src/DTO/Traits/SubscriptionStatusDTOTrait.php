<?php
declare(strict_types=1);

namespace Scaleplan\CloudPayments\DTO\Traits;

use OpenApi\Annotations as SWG;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Class SubscriptionStatusDTOTrait
 *
 * @package Scaleplan\CloudPayments\DTO\Traits
 */
trait SubscriptionStatusDTOTrait
{
    /**
     * @var string
     *
     * @Assert\NotBlank()
     * @Assert\Type(type="string", groups={"type"})
     * @Assert\Choice(
     *     strict=true,
     *     choices=\Scaleplan\CloudPayments\Constants\SubscriptionStatuses::ALL
     * )
     *
     * @SWG\Property(
     *     property="status",
     *     type="string",
     *     nullable=false,
     *     description="Статус подписки"
     * )
     */
    protected $status;

    /**
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }
}
