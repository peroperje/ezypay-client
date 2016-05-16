<?php
/**
 * Created by PhpStorm.
 * User: peroperje
 * Date: 2.5.16.
 * Time: 14.23
 */

/**
 * Interface Result
 */
interface result
{
    /**
     * Result constructor.
     * @param array $data
     */
    public function __construct(array $data);

    /**
     * @return Ezypay\Object | Ezypay\Object[]
     */
    public function data();

    /**
     * @return bool
     */
    public function isSuccess();

}