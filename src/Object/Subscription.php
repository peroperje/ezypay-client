<?php

namespace Ezypay\Object;

/**
 * Class Subscription
 *
 * Subscription file
 * 
 * @package Ezypay\Object
 */
class Subscription
{
    /**
     * @var $subscriptionId string The ID of the subscription.
     */
    private $subscriptionId;
    /**
     * @var $customerId string The ID of the customer.
     */
    private $customerId;
    /**
     * @var $planId string The ID of the plan.
     */
    private $planId;
    /**
     * @var $subscriptionName string Subscription's name.
     */
    private $subscriptionName;
    /**
     * @var $status string Subscription's status.
     */
    private $status;
    /**
     * @var $subscriptionStartDate string Subscription's start date.
     */
    private $subscriptionStartDate;
    /**
     * @var $subscriptionEndDate string Subscription's end date.
     */
    private $subscriptionEndDate;
    /**
     * @var $nextBillingDate string Subscription's next billing date.
     */
    private $nextBillingDate;
    /**
     * @var $nextBillingAmount number Subscription's next amount.
     */
    private $nextBillingAmount;
    /**
     * @var $totalUpToDatePaymentCollection number Subscription's total up to date collection.
     */
    private $totalUpToDatePaymentCollection;
    /**
     * @var $totalUpToDateBillingCycles integer Subscription's total up date billing cycles.
     */
    private $totalUpToDateBillingCycles;
    /**
     * @var $remainingPaymentCollection number Subscription's remaining collection.
     */
    private $remainingPaymentCollection;
    /**
     * @var $remainingBillingCycles integer Subscription's remaining billing cycles.
     */
    private $remainingBillingCycles;
    /**
     * @var $paymentMethodId string Subscription's payment method Id.
     */
    private $paymentMethodId;
    /**
     * @var $schedules array [SubscriptionScheduleResult]Subscription's list of schedules.
     */
    private $schedules;
    /**
     * @var $createdOn string Date record is created.
     */
    private $createdOn;

    /**
     * Subscription constructor.
     *
     * @param $data array parameters key=>value
     */
    function __construct($data)
    {
        foreach ($data as $key => $value) {
            $this->$key = $value;
        }
    }

}