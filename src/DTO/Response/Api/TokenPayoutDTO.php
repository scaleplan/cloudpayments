<?php
declare(strict_types=1);

namespace Scaleplan\CloudPayments\DTO\Response\Api;

use OpenApi\Annotations as SWG;
use Scaleplan\Validator\Constraints as AppAssert;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Class TokenPayoutDTO
 *
 * @package Scaleplan\CloudPayments\DTO\Response\Api
 */
class TokenPayoutDTO extends ApiResponseDTO
{
    /**
     * @var TokenPayoutModelDTO
     *
     * @Assert\NotBlank()
     * @AppAssert\IsInstanceOf(classname=\Scaleplan\CloudPayments\DTO\Response\Api\TokenPayoutModelDTO::class)
     * @Assert\Valid()
     *
     * @SWG\Property(
     *     property="model",
     *     type="object",
     *     nullable=false,
     *     description="Информация о выплате"
     * )
     */
    private $model;

    /**
     * @return TokenPayoutModelDTO
     */
    public function getModel()
    {
        return $this->model;
    }

    /**
     * @param $model
     *
     * @throws \ReflectionException
     * @throws \Scaleplan\CloudPayments\Exceptions\FraudulentNotificationException
     * @throws \Scaleplan\DependencyInjection\Exceptions\ContainerTypeNotSupportingException
     * @throws \Scaleplan\DependencyInjection\Exceptions\DependencyInjectionException
     * @throws \Scaleplan\DependencyInjection\Exceptions\ParameterMustBeInterfaceNameOrClassNameException
     * @throws \Scaleplan\DependencyInjection\Exceptions\ReturnTypeMustImplementsInterfaceException
     * @throws \Scaleplan\Helpers\Exceptions\EnvNotFoundException
     */
    protected function setModel($model) : void
    {
        $this->model = new TokenPayoutModelDTO($model);
    }
}
