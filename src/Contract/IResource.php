<?php

namespace Ezypay\Contract;


/**
 * Interface IResource
 *
 * @package Ezypay\Contract
 */
interface IResource
{
    /**
     * Set connector data to fetch collection of resource
     * 
     * @param array $data
     * @return mixed
     */
    public function findAll(array $data);

    /**
     * Set connector data to fetch single resource by ID
     *
     * @param $id string
     * @return \Ezypay\Result\ResultProducer
     */
    public function findById($id);
}