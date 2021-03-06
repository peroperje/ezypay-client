<?php

namespace Ezypay\Result;


use Ezypay;
use Ezypay\Contract\IResult;

/**
 * Class resultSingle
 * @package Ezypay\Result
 */
class resultSingleArray implements IResult
{
    /**
     * @var $data Ezypay\Object
     */
    private $data;
    /**
     * @var bool $isSuccess
     */
    private $isSuccess = true;

    /**
     * Result constructor.
     *
     * @param array $data
     */
    public function __construct(array $data)
    {
        foreach ($data as $key => $value) {
            if (property_exists($this, $key)) {
                $this->$key = $value;
            }
        }
    }

    /**
     * Result data
     *
     * @return Ezypay\Object | Ezypay\Object[]
     */
    public function data()
    {
        return $this->data;
    }

    /**
     * Provide is call successful information
     *
     * @return bool
     */
    public function isSuccess()
    {
        return $this->isSuccess;
    }
}