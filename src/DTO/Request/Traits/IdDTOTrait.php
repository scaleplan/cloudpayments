<?php
declare(strict_types=1);

namespace Scaleplan\CloudPayments\DTO\Request\Traits;

use OpenApi\Annotations as SWG;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Class TransactionIdDTOTrait
 *
 * @package Scaleplan\CloudPayments\DTO\Request\Traits
 */
trait IdDTOTrait
{
    /**
     * @var string
     *
     * @Assert\NotBlank()
     * @Assert\Type(type="string", groups={"type"})
     *
     * @SWG\Property(
     *     property="id",
     *     type="string",
     *     nullable=false,
     *     description="Идентификатор подписки"
     * )
     */
    protected $id;

    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param string $id
     */
    public function setId($id) : void
    {
        $this->id = $id;
    }
}
