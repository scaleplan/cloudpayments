<?php
declare(strict_types=1);

namespace Scaleplan\CloudPayments\DTO;

use Scaleplan\CloudPayments\Exceptions\FraudulentNotificationException;
use Scaleplan\DTO\DTO;
use Scaleplan\Http\Interfaces\CurrentRequestInterface;
use function Scaleplan\DependencyInjection\get_required_container;
use function Scaleplan\Helpers\get_required_env;

/**
 * Class CloudPaymentsNotificationDTO
 *
 * @package Scaleplan\CloudPayments\DTO
 */
class CloudPaymentsNotificationDTO extends DTO
{
    protected const VALID_NOTIFICATIONS_IPS = ['130.193.70.192', '185.98.85.109',];

    /**
     * @throws FraudulentNotificationException
     * @throws \ReflectionException
     * @throws \Scaleplan\DependencyInjection\Exceptions\ContainerTypeNotSupportingException
     * @throws \Scaleplan\DependencyInjection\Exceptions\DependencyInjectionException
     * @throws \Scaleplan\DependencyInjection\Exceptions\ParameterMustBeInterfaceNameOrClassNameException
     * @throws \Scaleplan\DependencyInjection\Exceptions\ReturnTypeMustImplementsInterfaceException
     * @throws \Scaleplan\Helpers\Exceptions\EnvNotFoundException
     */
    protected function checkHmacOfPayload() : void
    {
        if (!in_array($_SERVER['REMOTE_ADDR'] ?? '', static::VALID_NOTIFICATIONS_IPS, true)) {
            throw new FraudulentNotificationException();
        }

        $message = file_get_contents('php://input');
        /** @var CurrentRequestInterface $request */
        $request = get_required_container(CurrentRequestInterface::class);
        $hash = $request->getHeader('Content-HMAC');
        $computedHash = base64_encode(hash_hmac(
            'sha256',
            $message,
            get_required_env('CLOUDPAYMENTS_API_SECRET')
        ));
        if ($hash !== $computedHash) {
            throw new FraudulentNotificationException();
        }
    }

    /**
     * CloudPaymentsNotificationDTO constructor.
     *
     * @param array $data
     *
     * @throws FraudulentNotificationException
     * @throws \ReflectionException
     * @throws \Scaleplan\DependencyInjection\Exceptions\ContainerTypeNotSupportingException
     * @throws \Scaleplan\DependencyInjection\Exceptions\DependencyInjectionException
     * @throws \Scaleplan\DependencyInjection\Exceptions\ParameterMustBeInterfaceNameOrClassNameException
     * @throws \Scaleplan\DependencyInjection\Exceptions\ReturnTypeMustImplementsInterfaceException
     * @throws \Scaleplan\Helpers\Exceptions\EnvNotFoundException
     */
    public function __construct(array $data = [])
    {
        $this->checkHmacOfPayload();
        parent::__construct($data);
    }
}
