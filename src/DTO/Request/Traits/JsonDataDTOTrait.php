<?php
declare(strict_types=1);

namespace Scaleplan\CloudPayments\DTO\Request\Traits;

use OpenApi\Annotations as SWG;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Class JsonDataDTOTrait
 *
 * @package Scaleplan\CloudPayments\DTO\Request\Traits
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
     *     description="Любые другие данные, которые будут связаны с транзакцией,
     *                  в том числе инструкции для формирования онлайн-чека."
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

    /**
     * @param array|null $jsonData
     */
    public function setJsonData($jsonData) : void
    {
        $this->jsonData = $jsonData;
    }
}
