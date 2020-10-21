<?php


namespace Hkonnet\QuiptApi\InventoryService\ComplexType;


/**
 * The descriptive data for the heaviness of an object.
 *
 * @author      Sadam Hussain <dami_sadam@yahoo.com>
 * @package     PHP Quipt API wrapper
 * @subpackage  Inventroy Service
 *
 * @property string $ReportId
 * @property integer $RecordsReceived
 * @property string|null $TransactionId
 * @property string $TransactionTime
 * @property bool $Success
 * @property array $Messages

 */
class CreateOrUpdateInventoryResponse extends \Hkonnet\QuiptApi\AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'CreateOrUpdateInventoryResponse';

    /**
     * Identifies the RecordsReceived
     *
     * @param integer $RecordsReceived
     * @return $this
     */
    public function setRecordsReceived( $RecordsReceived)
    {
        $this->values['RecordsReceived'] = $RecordsReceived;
        return $this;
    }

    /**
     * Identifies the ReportId
     *
     * @param string $ReportId
     * @return $this
     */
    public function setReportId( $ReportId)
    {
        $this->values['ReportId'] = $ReportId;
        return $this;
    }

    /**
     * Identifies the TransactionTime
     *
     * @param string $TransactionTime
     * @return $this
     */
    public function setTransactionTime( $TransactionTime)
    {
        $this->values['TransactionTime'] = $TransactionTime;
        return $this;
    }

    /**
     * Identifies the TransactionId
     *
     * @param string|null $transaction_id
     * @return $this
     */
    public function setTransactionId($transaction_id)
    {
        $this->values['TransactionId'] = $transaction_id;
        return $this;
    }
    /**
     * Identifies the Success
     *
     * @param bool $Success
     * @return $this
     */
    public function setSuccess($Success)
    {
        $this->values['Success'] = $Success;
        return $this;
    }

    /**
     * Identifies the Messages
     *
     * @param array $Messages
     * @return $this
     */
    public function setMessages($Messages)
    {
        $this->values['Messages'] = $Messages;
        return $this;
    }

}
