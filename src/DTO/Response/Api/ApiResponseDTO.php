<?php
declare(strict_types=1);

namespace Scaleplan\CloudPayments\DTO\Response\Api;

use Scaleplan\CloudPayments\DTO\Response\Traits\MessageDTOTrait;
use Scaleplan\CloudPayments\DTO\Response\Traits\SuccessDTOTrait;
use Scaleplan\DTO\DTO;

/**
 * Class ApiResponseDTO
 *
 * @package Scaleplan\CloudPayments\DTO\Response
 */
class ApiResponseDTO extends DTO
{
    use SuccessDTOTrait, MessageDTOTrait;
    /**
     * @var bool
     */
    private $allowMagicSet = false;

    /**
     * ApiResponseDTO constructor.
     *
     * @param array $data
     */
    public function __construct(array $data = [])
    {
        $data = array_combine(array_map('lcfirst', array_keys($data)), array_values($data));
        parent::__construct($data);
    }
}
