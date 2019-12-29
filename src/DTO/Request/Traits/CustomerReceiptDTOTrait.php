<?php
declare(strict_types=1);

namespace Scaleplan\CloudPayments\DTO\Request\Traits;

use OpenApi\Annotations as SWG;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Class CustomerReceiptDTOTrait
 *
 * @package Scaleplan\CloudPayments\DTO\Request\Traits
 */
trait CustomerReceiptDTOTrait
{
    /**
     * @var array|null
     *
     * @Assert\Type(type="array", groups={"type"})
     *
     * @SWG\Property(
     *     property="customerReceipt",
     *     type="array",
     *     nullable=true,
     *     description="Для изменения состава онлайн-чека"
     * )
     */
    protected $customerReceipt;

    /**
     * @return array|null
     */
    public function getCustomerReceipt()
    {
        return $this->customerReceipt;
    }

    /**
     * @param array|null $customerReceipt
     */
    public function setCustomerReceipt($customerReceipt) : void
    {
        $this->customerReceipt = $customerReceipt;
    }
}
