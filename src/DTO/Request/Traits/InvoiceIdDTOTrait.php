<?php
declare(strict_types=1);

namespace Scaleplan\CloudPayments\DTO\Request\Traits;

use OpenApi\Annotations as SWG;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Class InvoiceIdDTOTrait
 *
 * @package Scaleplan\CloudPayments\DTO\Request\Traits
 */
trait InvoiceIdDTOTrait
{
    /**
     * @var string|null
     *
     * @Assert\Type(type="string", groups={"type"})
     *
     * @SWG\Property(
     *     property="invoiceId",
     *     type="string",
     *     nullable=true,
     *     description="Номер заказа"
     * )
     */
    protected $invoiceId;

    /**
     * @return string|null
     */
    public function getInvoiceId()
    {
        return $this->invoiceId;
    }
}
