<?php
declare(strict_types=1);

namespace Scaleplan\CloudPayments\DTO\Response\Traits;

use OpenApi\Annotations as SWG;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Class DataDTOTrait
 *
 * @package Scaleplan\CloudPayments\DTO\Response\Traits
 */
trait DataDTOTrait
{
    /**
     * @var array|null
     *
     * @Assert\Type(type="string", groups={"type"})
     *
     * @SWG\Property(
     *     property="data",
     *     type="array",
     *     nullable=true,
     *     description="Произвольный набор параметров, переданных в транзакцию"
     * )
     */
    protected $data;

    /**
     * @return array|null
     */
    public function getData()
    {
        return $this->data;
    }
}
