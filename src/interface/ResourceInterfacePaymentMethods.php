<?php

interface resourceInterfacePaymentMethods extends resourceInterface
{
    public function findDefault(array $data);
    public function setDefault($paymentMethodId,$customerId);
    //TODO : muve this method to separate interface resourceDelete
    public function remove($paymentMethodId,$customerId);
}
?>