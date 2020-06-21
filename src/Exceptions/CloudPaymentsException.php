<?php
declare(strict_types=1);

namespace Scaleplan\CloudPayments\Exceptions;

use Scaleplan\HttpStatus\HttpStatusCodes;
use function Scaleplan\Translator\translate;

/**
 * Class CloudPaymentsException
 *
 * @package Scaleplan\CloudPayments\Exceptions
 */
class CloudPaymentsException extends \Exception
{
    public const MESSAGE = 'cloudpayments.cloudpayments-error';
    public const CODE = HttpStatusCodes::HTTP_BAD_REQUEST;

    /**
     * CloudPaymentsException constructor.
     *
     * @param string $message
     * @param int $code
     * @param \Throwable|null $previous
     *
     * @throws \ReflectionException
     * @throws \Scaleplan\DependencyInjection\Exceptions\ContainerTypeNotSupportingException
     * @throws \Scaleplan\DependencyInjection\Exceptions\DependencyInjectionException
     * @throws \Scaleplan\DependencyInjection\Exceptions\ParameterMustBeInterfaceNameOrClassNameException
     * @throws \Scaleplan\DependencyInjection\Exceptions\ReturnTypeMustImplementsInterfaceException
     */
    public function __construct($message = '', $code = 0, \Throwable $previous = null)
    {
        parent::__construct(
            $message ?: translate(static::MESSAGE) ?: static::MESSAGE,
            $code ?: static::CODE,
            $previous
        );
    }
}
