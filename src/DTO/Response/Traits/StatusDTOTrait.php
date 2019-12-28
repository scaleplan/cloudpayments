<?php
declare(strict_types=1);

namespace Scaleplan\CloudPayments\DTO\Response\Traits;

use OpenApi\Annotations as SWG;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Class StatusDTOTrait
 *
 * @package Scaleplan\CloudPayments\DTO\Response\Traits
 */
trait StatusDTOTrait
{
    /**
     * @var string
     *
     * @Assert\NotBlank()
     * @Assert\Type(type="string", groups={"type"})
     * @Assert\Choice(
     *     strict=true,
     *     choices=\Scaleplan\CloudPayments\Constants\Statuses::ALL
     * )
     *
     * @SWG\Property(
     *     property="status",
     *     type="string",
     *     nullable=false,
     *     description="Статус платежа после авторизации: Completed — для одностадийных платежей,
     *                                                    Authorized — для двухстайдиных"
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
