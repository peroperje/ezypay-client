<?php
/**
 * Created by PhpStorm.
 * User: peroperje
 * Date: 3.5.16.
 * Time: 07.03
 */

namespace Ezypay\Resource;


use Ezypay\Result\ResultProducer;
use Ezypay\Validation\ValidationBase;

/**
 * Class Resurce
 *
 * @package Ezypay\Resource
 */
class Resurce
{
    /**
     * @var $connector \driverInterface
     */
    private $connector;
    /**
     * @var string objectType
     */
    private $resourceType;
    /**
     * @var $validation ValidationBase
     */
    private $validation;


    /**
     * Resurce constructor.
     * @param \driverInterface $connector
     * @param $validation ValidationBase
     * @param string $defautlObjectType
     */
    protected function __construct(\driverInterface $connector, ValidationBase $validation, $defautlObjectType = null)
    {
        $this->connector = $connector;
        $this->validation = $validation;
        if (!empty($defautlObjectType)) {
            $this->setResourceType($defautlObjectType);
        }
    }

    /**
     * @param array $settings connector settings
     */
    protected function settings(array $settings)
    {
        $this->connector->settings($settings);
    }

    protected function addValidator(\validatorInterface $validator){
        $this->validation->addValidator($validator);
    }

    /**
     * @param $resourceType string Name of resource
     */
    protected function setResourceType($resourceType)
    {
        $this->resourceType = $resourceType;
    }

    /**
     * Result
     *
     * @return ResultProducer
     */
    protected function result()
    {
        return new ResultProducer($this->connector,$this->validation ,$this->resourceType);
    }

}