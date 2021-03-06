<?php

namespace Ezypay\Result;


use Ezypay;
use Ezypay\Contract\IResultList;

/**
 * Class ResultListArray
 *
 * @package Ezypay\Result
 */
class ResultListArray implements IResultList
{
    /**
     * @var $totalReturned int
     */
    private $totalReturned;
    /**
     * @var $totalRecord int
     */
    private $totalRecord;
    /**
     * @var $data array
     */
    private $data;
    /**
     * @var bool $isSuccess
     */
    private $isSuccess = true;

    /**
     * ResultListArray constructor.
     *
     * @param array $data
     */
    function __construct(array $data)
    {
        foreach ($data as $key => $value) {
            if (property_exists($this, $key)) {
                $this->$key = $value;
            }

        }
    }

    /**
     * Return data as array
     * @return array
     */
    public function data()
    {
        return $this->data;
    }

    /**
     * Check is requet success
     *
     * @return bool
     */
    public function isSuccess()
    {
        return $this->isSuccess;
    }

    /**
     * Provides total returned record
     *
     * @return int tootal returned record
     */
    public function totalReturned()
    {
        return $this->totalReturned;
    }

    /**
     * Provides total record
     *
     * @return int returnes total record
     */
    public function totalRecord()
    {
        return $this->totalRecord;
    }
}