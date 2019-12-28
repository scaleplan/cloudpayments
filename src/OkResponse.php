<?php
declare(strict_types=1);

namespace Scaleplan\CloudPayments;

/**
 * Class OkResponse
 *
 * @package Scaleplan\CloudPayments
 */
class OkResponse
{
    private $response = ['code' => 0];

    /**
     * @return string
     */
    public function __toString() : string
    {
        return json_encode($this->response) ?: '';
    }
}
