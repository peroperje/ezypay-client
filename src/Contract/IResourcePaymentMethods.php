<?php

namespace Ezypay\Contract;

interface IResourcePaymentMethods
{
    public function findDefault(array $data);

    public function setDefault($paymentMethodId, $customerId);

    public function remove($paymentMethodId, $customerId);
}