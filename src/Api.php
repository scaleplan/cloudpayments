<?php
declare(strict_types=1);

namespace Scaleplan\CloudPayments;

use Lmc\HttpConstants\Header;
use Scaleplan\CloudPayments\DTO\Request\GetPaymentDTO;
use Scaleplan\CloudPayments\DTO\Response\Api\GetPaymentDTO as GetPaymentResponseDTO;
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
        $dataJson = '';
        if ($data) {
            $data->validate();
            $dataJson = json_encode($data->toArray(), JSON_UNESCAPED_UNICODE | JSON_PRESERVE_ZERO_FRACTION);
        }

        /** @var RequestInterface $request */
        $request = get_required_container(RequestInterface::class, [static::apiBaseUrl . $url, $dataJson]);
        $request->setDtoClass($responseDto);

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
}
