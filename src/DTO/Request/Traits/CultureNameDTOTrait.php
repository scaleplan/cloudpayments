<?php
declare(strict_types=1);

namespace Scaleplan\CloudPayments\DTO\Request\Traits;

use OpenApi\Annotations as SWG;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Class CultureNameDTOTrait
 *
 * @package Scaleplan\CloudPayments\DTO\Request\Traits
 */
trait CultureNameDTOTrait
{
    /**
     * @var string|null
     *
     * @Assert\Type(type="string", groups={"type"})
     * @Assert\Choice(
     *     strict=true,
     *     choices=\Scaleplan\CloudPayments\Constants\Locales::ALL
     * )
     *
     * @SWG\Property(
     *     property="cultureName",
     *     type="string",
     *     nullable=true,
     *     description="Язык уведомлений. Возможные значения: 'ru-RU', 'en-US'"
     * )
     */
    protected $cultureName;

    /**
     * @return string|null
     */
    public function getCultureName()
    {
        return $this->cultureName;
    }

    /**
     * @param string|null $cultureName
     */
    public function setCultureName($cultureName) : void
    {
        $this->cultureName = $cultureName;
    }
}
