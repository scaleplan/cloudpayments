<?php
declare(strict_types=1);

namespace Scaleplan\CloudPayments\DTO\Response\Api;

use OpenApi\Annotations as SWG;
use Scaleplan\CloudPayments\DTO\Response\Notifications\PayDTO;
use Symfony\Component\Validator\Constraints as Assert;
use Scaleplan\Validator\Constraints as AppAssert;

/**
 * Class GetPaymentDTO
 *
 * @package Scaleplan\CloudPayments\DTO\Response\Api
 */
class GetPaymentDTO extends ApiResponseDTO
{
    /**
     * @var array
     *
     * @Assert\NotBlank()
     * @Assert\All({
     *     @Assert\NotBlank()
     *     @AppAssert\IsInstanceOf(classname=\Scaleplan\CloudPayments\DTO\Response\Notifications\PayDTO::class)
     *     @Assert\Valid()
     * })
     *
     * @SWG\Property(
     *     property="model",
     *     type="array",
     *     nullable=false,
     *     description="Информация о платеже"
     * )
     */
    private $model;

    /**
     * @return array
     */
    public function getModel()
    {
        return $this->model;
    }

    /**
     * @param $models
     *
     * @throws \ReflectionException
     * @throws \Scaleplan\CloudPayments\Exceptions\FraudulentNotificationException
     * @throws \Scaleplan\DependencyInjection\Exceptions\ContainerTypeNotSupportingException
     * @throws \Scaleplan\DependencyInjection\Exceptions\DependencyInjectionException
     * @throws \Scaleplan\DependencyInjection\Exceptions\ParameterMustBeInterfaceNameOrClassNameException
     * @throws \Scaleplan\DependencyInjection\Exceptions\ReturnTypeMustImplementsInterfaceException
     * @throws \Scaleplan\Helpers\Exceptions\EnvNotFoundException
     */
    protected function setModel($models) : void
    {
        foreach ($models as $model) {
            $this->model[] = new PayDTO($model);
        }
    }
}
