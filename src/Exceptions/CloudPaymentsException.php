<?php
declare(strict_types=1);

namespace Scaleplan\CloudPayments\Exceptions;

use Scaleplan\HttpStatus\HttpStatusCodes;

/**
 * Class CloudPaymentsException
 *
 * @package Scaleplan\CloudPayments\Exceptions
 */
class CloudPaymentsException extends \Exception
{
    public const MESSAGE = 'CloudPayments error.';
    public const CODE = HttpStatusCodes::HTTP_BAD_REQUEST;

    /**
     * CloudPaymentsException constructor.
     *
     * @param string $message
     * @param int $code
     * @param \Throwable|null $previous
     */
    public function __construct($message = '', $code = 0, \Throwable $previous = null)
    {
        parent::__construct($message ?: static::MESSAGE, $code ?: static::CODE, $previous);
    }
}
