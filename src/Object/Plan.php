<?php
/**
 * Created by PhpStorm.
 * User: peroperje
 * Date: 26.4.16.
 * Time: 08.56
 */

namespace Ezypay\Object;


class Plan
{
    /**
     * @var $planId string The ID of the plan.
     */
    private $planId;
    /**
     * @var $status string The plan status.
     */
    private $status;
    /**
     * @var $name string The name of a plan.
     */
    private $name;
    /**
     * @var $description string The description of the plan.
     */
    private $description;
    /**
     * @var $schedules array [PlanScheduleResult]The multiple schedules of the plan.
     */
    private $schedules;
    /**
     * @var $merchantName string Merchant account name.
     */
    private $merchantName;
    /**
     * @var $merchantId string The ID of the merchant.
     */
    private $merchantId;
    /**
     * @var $signupViaHostedPaymentPage boolean Indicate whether the plan is available for customers to sign up online.
     */
    private $signupViaHostedPaymentPage;
    /**
     * @var $hostedPaymentPageUrl string The return result is the URL for the hosted payment page.
     */
    private  $hostedPaymentPageUrl;
    /**
     * @var $hostedPaymentPagePath string The return result is the path for the hosted payment page.
     */
    private $hostedPaymentPagePath;
    /**
     * @var $createdOn string Date record is created.
     */
    private $createdOn;

    function __construct($data)
    {
        foreach ( $data as $key => $value ){
            $this->$key = $value;
        }
    }

    /**
     * getID
     *
     * Retrunt plan ID
     *
     * @return string
     */
    public function getID(){
        return $this->planId;
    }

    /**
     * @return string
     */
    public function getStatus(){
        return $this->status;
    }

    /**
     * @return string
     */
    public function getName(){
        return $this->name;
    }

    public function getDescription(){
        return $this->description;
    }

    /**
     * @return array
     */
    public function getSchedules(){
        return $this->schedules;
    }
}