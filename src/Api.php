<?php
declare(strict_types=1);

namespace Scaleplan\CloudPayments;

use Lmc\HttpConstants\Header;
use Scaleplan\CloudPayments\DTO\Request\CreateOrderDTO;
use Scaleplan\CloudPayments\DTO\Request\CreateSubscriptionDTO;
use Scaleplan\CloudPayments\DTO\Request\GetPaymentDTO;
use Scaleplan\CloudPayments\DTO\Request\TokenPayoutDTO;
use Scaleplan\CloudPayments\DTO\Request\UpdateSubscriptionDTO;
use Scaleplan\CloudPayments\DTO\Response\Api\GetPaymentDTO as GetPaymentResponseDTO;
use Scaleplan\CloudPayments\DTO\Response\Api\CreateSubscriptionDTO as CreateSubscriptionResponseDTO;
use Scaleplan\CloudPayments\DTO\Response\Api\UpdateSubscriptionDTO as UpdateSubscriptionResponseDTO;
use Scaleplan\CloudPayments\DTO\Response\Api\TokenPayoutDTO as TokenPayoutResponseDTO;
use Scaleplan\CloudPayments\DTO\Response\Api\OrderCreateDTO as OrderCreateResponseDTO;
use Scaleplan\DTO\DTO;
use Scaleplan\Http\Constants\ContentTypes;
use Scaleplan\Http\Interfaces\RequestInterface;
use function Scaleplan\DependencyInjection\get_required_container;
use function Scaleplan\Helpers\get_required_env;

/**
 * Class Api
 *
 * @package Scaleplan\CloudPayments
 */
class Api implements ApiInterface
{
    protected const apiBaseUrl = 'https://api.cloudpayments.ru';

    /**
     * @param string $url
     * @param DTO|null $data
     * @param string|null $responseDto
     *
     * @return mixed
     *
     * @throws \ReflectionException
     * @throws \Scaleplan\DTO\Exceptions\ValidationException
     * @throws \Scaleplan\DependencyInjection\Exceptions\ContainerTypeNotSupportingException
     * @throws \Scaleplan\DependencyInjection\Exceptions\DependencyInjectionException
     * @throws \Scaleplan\DependencyInjection\Exceptions\ParameterMustBeInterfaceNameOrClassNameException
     * @throws \Scaleplan\DependencyInjection\Exceptions\ReturnTypeMustImplementsInterfaceException
     * @throws \Scaleplan\Helpers\Exceptions\EnvNotFoundException
     * @throws \Scaleplan\Http\Exceptions\ClassMustBeDTOException
     * @throws \Scaleplan\Http\Exceptions\HttpException
     * @throws \Scaleplan\Http\Exceptions\RemoteServiceNotAvailableException
     */
    protected function send(string $url, DTO $data = null, string $responseDto = null)
    {
        $data && $data->validate();
        /** @var RequestInterface $request */
        $request = get_required_container(RequestInterface::class, [static::apiBaseUrl . $url, $data->toFullArray()]);
        $request->setDtoClass($responseDto);
        $request->setValidationEnable(false);
        $request->setMethod('POST');
        $request->addHeader(Header::AUTHORIZATION, $this->getAuthHeaderValue());
        $request->addHeader(Header::CONTENT_TYPE, ContentTypes::JSON);

        return $request->send()->getResult();
    }

    /**
     * @return string
     *
     * @throws \Scaleplan\Helpers\Exceptions\EnvNotFoundException
     */
    protected function getAuthHeaderValue() : string
    {
        return 'Basic '
            . base64_encode(
                get_required_env('CLOUDPAYMENTS_API_PUBLIC_ID')
                . ':'
                . get_required_env('CLOUDPAYMENTS_API_SECRET')
            );
    }

    /**
     * @param GetPaymentDTO $dto
     *
     * @return GetPaymentResponseDTO
     *
     * @throws \ReflectionException
     * @throws \Scaleplan\DTO\Exceptions\ValidationException
     * @throws \Scaleplan\DependencyInjection\Exceptions\ContainerTypeNotSupportingException
     * @throws \Scaleplan\DependencyInjection\Exceptions\DependencyInjectionException
     * @throws \Scaleplan\DependencyInjection\Exceptions\ParameterMustBeInterfaceNameOrClassNameException
     * @throws \Scaleplan\DependencyInjection\Exceptions\ReturnTypeMustImplementsInterfaceException
     * @throws \Scaleplan\Helpers\Exceptions\EnvNotFoundException
     * @throws \Scaleplan\Http\Exceptions\ClassMustBeDTOException
     * @throws \Scaleplan\Http\Exceptions\HttpException
     * @throws \Scaleplan\Http\Exceptions\RemoteServiceNotAvailableException
     */
    public function getPayment(GetPaymentDTO $dto) : GetPaymentResponseDTO
    {
        return $this->send('/payments/get', $dto, GetPaymentResponseDTO::class);
    }

    /**
     * @param CreateSubscriptionDTO $dto
     *
     * @return CreateSubscriptionResponseDTO
     *
     * @throws \ReflectionException
     * @throws \Scaleplan\DTO\Exceptions\ValidationException
     * @throws \Scaleplan\DependencyInjection\Exceptions\ContainerTypeNotSupportingException
     * @throws \Scaleplan\DependencyInjection\Exceptions\DependencyInjectionException
     * @throws \Scaleplan\DependencyInjection\Exceptions\ParameterMustBeInterfaceNameOrClassNameException
     * @throws \Scaleplan\DependencyInjection\Exceptions\ReturnTypeMustImplementsInterfaceException
     * @throws \Scaleplan\Helpers\Exceptions\EnvNotFoundException
     * @throws \Scaleplan\Http\Exceptions\ClassMustBeDTOException
     * @throws \Scaleplan\Http\Exceptions\HttpException
     * @throws \Scaleplan\Http\Exceptions\RemoteServiceNotAvailableException
     */
    public function createSubscription(CreateSubscriptionDTO $dto) : CreateSubscriptionResponseDTO
    {
        return $this->send('/subscriptions/create', $dto, CreateSubscriptionResponseDTO::class);
    }

    /**
     * @param UpdateSubscriptionDTO $dto
     *
     * @return UpdateSubscriptionResponseDTO
     *
     * @throws \ReflectionException
     * @throws \Scaleplan\DTO\Exceptions\ValidationException
     * @throws \Scaleplan\DependencyInjection\Exceptions\ContainerTypeNotSupportingException
     * @throws \Scaleplan\DependencyInjection\Exceptions\DependencyInjectionException
     * @throws \Scaleplan\DependencyInjection\Exceptions\ParameterMustBeInterfaceNameOrClassNameException
     * @throws \Scaleplan\DependencyInjection\Exceptions\ReturnTypeMustImplementsInterfaceException
     * @throws \Scaleplan\Helpers\Exceptions\EnvNotFoundException
     * @throws \Scaleplan\Http\Exceptions\ClassMustBeDTOException
     * @throws \Scaleplan\Http\Exceptions\HttpException
     * @throws \Scaleplan\Http\Exceptions\RemoteServiceNotAvailableException
     */
    public function updateSubscription(UpdateSubscriptionDTO $dto) : UpdateSubscriptionResponseDTO
    {
        return $this->send('/subscriptions/update', $dto, UpdateSubscriptionResponseDTO::class);
    }

    /**
     * @param TokenPayoutDTO $dto
     *
     * @return TokenPayoutResponseDTO
     *
     * @throws \ReflectionException
     * @throws \Scaleplan\DTO\Exceptions\ValidationException
     * @throws \Scaleplan\DependencyInjection\Exceptions\ContainerTypeNotSupportingException
     * @throws \Scaleplan\DependencyInjection\Exceptions\DependencyInjectionException
     * @throws \Scaleplan\DependencyInjection\Exceptions\ParameterMustBeInterfaceNameOrClassNameException
     * @throws \Scaleplan\DependencyInjection\Exceptions\ReturnTypeMustImplementsInterfaceException
     * @throws \Scaleplan\Helpers\Exceptions\EnvNotFoundException
     * @throws \Scaleplan\Http\Exceptions\ClassMustBeDTOException
     * @throws \Scaleplan\Http\Exceptions\HttpException
     * @throws \Scaleplan\Http\Exceptions\RemoteServiceNotAvailableException
     */
    public function tokenPayout(TokenPayoutDTO $dto) : TokenPayoutResponseDTO
    {
        return $this->send('/payments/token/topup', $dto, TokenPayoutDTOResponseDTO::class);
    }

    /**
     * @param CreateOrderDTO $dto
     *
     * @return OrderCreateResponseDTO
     *
     * @throws \ReflectionException
     * @throws \Scaleplan\DTO\Exceptions\ValidationException
     * @throws \Scaleplan\DependencyInjection\Exceptions\ContainerTypeNotSupportingException
     * @throws \Scaleplan\DependencyInjection\Exceptions\DependencyInjectionException
     * @throws \Scaleplan\DependencyInjection\Exceptions\ParameterMustBeInterfaceNameOrClassNameException
     * @throws \Scaleplan\DependencyInjection\Exceptions\ReturnTypeMustImplementsInterfaceException
     * @throws \Scaleplan\Helpers\Exceptions\EnvNotFoundException
     * @throws \Scaleplan\Http\Exceptions\ClassMustBeDTOException
     * @throws \Scaleplan\Http\Exceptions\HttpException
     * @throws \Scaleplan\Http\Exceptions\RemoteServiceNotAvailableException
     */
    public function createOrder(CreateOrderDTO $dto) : OrderCreateResponseDTO
    {
        return $this->send('/orders/create', $dto, OrderCreateResponseDTO::class);
    }
}
