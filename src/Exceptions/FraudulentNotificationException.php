<?php
declare(strict_types=1);

namespace Scaleplan\CloudPayments\Exceptions;

use Scaleplan\HttpStatus\HttpStatusCodes;

/**
 * Class FraudulentNotificationException
 *
 * @package Scaleplan\CloudPayments\Exceptions
 */
class FraudulentNotificationException extends CloudPaymentsException
{
    public const MESSAGE = 'Оповещение от Cloudpayments могло быть скомпрометировано.';
    public const CODE = HttpStatusCodes::HTTP_UNPROCESSABLE_ENTITY;
}
