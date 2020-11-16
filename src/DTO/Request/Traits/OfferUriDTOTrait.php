<?php
declare(strict_types=1);

namespace Scaleplan\CloudPayments\DTO\Request\Traits;

use OpenApi\Annotations as SWG;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Class OfferUriDTOTrait
 *
 * @package Scaleplan\CloudPayments\DTO\Response\Traits
 */
trait OfferUriDTOTrait
{
    /**
     * @var string|null
     *
     * @Assert\Url()
     *
     * @SWG\Property(
     *     property="offerUri",
     *     type="string",
     *     nullable=false,
     *     description="Ссылка на оферту, которая будет показываться на странице заказа"
     * )
     */
    protected $offerUri;

    /**
     * @return string|null
     */
    public function getOfferUri()
    {
        return $this->offerUri;
    }

    /**
     * @param string|null $offerUri
     */
    public function setOfferUri($offerUri) : void
    {
        $this->offerUri = $offerUri;
    }
}
