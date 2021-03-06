<?php
/**
 * Created by PhpStorm.
 * User: peroperje
 * Date: 16.5.16.
 * Time: 09.25
 */
namespace Ezypay\Contract;
use Ezypay;


/**
 * Interface Result
 */
interface IResult
{
    /**
     * @return Ezypay\Object | Ezypay\Object[]
     */
    public function data();

    /**
     * @return bool
     */
    public function isSuccess();
}