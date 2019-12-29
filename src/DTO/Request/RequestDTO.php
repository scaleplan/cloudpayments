<?php
declare(strict_types=1);

namespace Scaleplan\CloudPayments\DTO\Request;

use Scaleplan\DTO\DTO;

/**
 * Class RequestDTO
 *
 * @package Scaleplan\CloudPayments\DTO\Request
 */
class RequestDTO extends DTO
{
    /**
     * @return array
     */
    public function toArray() : array
    {
        $data = parent::toArray();
        return array_combine(array_map('ucfirst', array_keys($data)), array_values($data));
    }
}
