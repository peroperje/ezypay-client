<?php
/**
 * Created by PhpStorm.
 * User: peroperje
 * Date: 16.5.16.
 * Time: 09.21
 */
namespace Ezypay\Contract;


/**
 * Interface resourceInterface
 */
interface IResourceSettlement 
{
    public function latest($merchantId);

    public function findAll(array $data);

    public function getRevenue($merchantId, $settlementId);

    public function getDeduction($merchantId, $settlementId);
}