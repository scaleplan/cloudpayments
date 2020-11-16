<?php
declare(strict_types=1);

namespace Scaleplan\CloudPayments\DTO\Response\Traits;

use OpenApi\Annotations as SWG;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Class MessageDTOTrait
 *
 * @package Scaleplan\CloudPayments\DTO\Response\Traits
 */
trait MessageDTOTrait
{
    /**
     * @var string
     *
     * @Assert\NotBlank()
     * @Assert\Type(type="string", groups={"type"})
     *
     * @SWG\Property(
     *     property="message",
     *     type="string",
     *     nullable=false
     * )
     */
    protected $message;

    /**
     * @return string
     */
    public function getMessage()
    {
        return $this->message;
    }
}
