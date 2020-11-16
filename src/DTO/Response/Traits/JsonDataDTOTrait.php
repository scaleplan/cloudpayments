<?php
declare(strict_types=1);

namespace Scaleplan\CloudPayments\DTO\Response\Traits;

use OpenApi\Annotations as SWG;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Class JsonDataDTOTrait
 *
 * @package Scaleplan\CloudPayments\DTO\Response\Traits
 */
trait JsonDataDTOTrait
{
    /**
     * @var array|null
     *
     * @Assert\Type(type="string", groups={"type"})
     *
     * @SWG\Property(
     *     property="jsonData",
     *     type="array",
     *     nullable=true,
     *     description="Произвольный набор параметров, переданных в транзакцию"
     * )
     */
    protected $jsonData;

    /**
     * @return array|null
     */
    public function getJsonData()
    {
        return $this->jsonData;
    }
}
