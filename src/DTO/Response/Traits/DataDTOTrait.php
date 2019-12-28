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
     * @var string|null
     *
     * @Assert\Type(type="string", groups={"type"})
     * @Assert\Json()
     *
     * @SWG\Property(
     *     property="data",
     *     type="string",
     *     nullable=true,
     *     description="Произвольный набор параметров, переданных в транзакцию"
     * )
     */
    protected $data;

    /**
     * @return string|null
     */
    public function getData()
    {
        return $this->data;
    }
}
