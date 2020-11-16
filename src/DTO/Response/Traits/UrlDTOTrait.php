<?php
declare(strict_types=1);

namespace Scaleplan\CloudPayments\DTO\Response\Traits;

use OpenApi\Annotations as SWG;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Class UrlDTOTrait
 *
 * @package Scaleplan\CloudPayments\DTO\Response\Traits
 */
trait UrlDTOTrait
{
    /**
     * @var string
     *
     * @Assert\NotBlank()
     * @Assert\Url()
     *
     * @SWG\Property(
     *     property="url",
     *     type="string",
     *     nullable=false,
     *     description="Ссылка на сформированный счет"
     * )
     */
    protected $url;

    /**
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }
}
