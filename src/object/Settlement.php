<?php

namespace Ezypay\Object;


class Settlement
{
    /**
     * @var $settlementId integer The ID of the settlement.
     */
    private $settlementId;
    /**
     * @var $settlementDate string Return the settlement date based on the selected criteria.
     */
    private $settlementDate;
    /**
     * @var $settlementAmount number The total amount distributed minus the total deduction amount.
     */
    private $settlementAmount;
    /**
     * @var $totalRevenue number The total amount distributed.
     */
    private $totalRevenue;
    /**
     * @var $totalDeduction number The total amount based on the deduction type.
     */
    private $totalDeduction;
    /**
     * @var $collectionFrom string The selected collection start date.
     */
    private $collectionFrom;
    /**
     * @var $collectionTo string The selected collection end date.
     */
    private $collectionTo;
    /**
     * @var $createdOn string Date record is created.
     */
    private $createdOn;

    /**
     * Settlement constructor.
     * @param $data
     */
    public function __construct($data)
    {
        foreach ( $data as $key => $value ){
            $this->$key = $value;
        }
    }

}