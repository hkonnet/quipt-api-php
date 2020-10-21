<?php


namespace Hkonnet\QuiptApi\InventoryService\ComplexType;


/**
 * The descriptive data for the heaviness of an object.
 *
 * @author      Sadam Hussain <dami_sadam@yahoo.com>
 * @package     PHP Quipt API wrapper
 * @subpackage  Inventroy Service
 *
 * @property boolean $Purge
 * @property array $Items
 * @property string $TransactionId
 */
class CreateOrUpdateInventoryRequest extends \Hkonnet\QuiptApi\AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'CreateOrUpdateInventoryRequest';

    /**
     * Identifies the Purge
     *
     * @param boolean $purge
     * @return $this
     */
    public function setPurge(bool $purge)
    {
        $this->values['Purge'] = $purge;
        return $this;
    }

    /**
     * Identifies the TransactionId
     *
     * @param string $transaction_id
     * @return $this
     */
    public function setTransactionId($transaction_id)
    {
        $this->values['TransactionId'] = $transaction_id;
        return $this;
    }

    /**
     * Identifies the Items
     *
     * @param array $items
     * @return $this
     */
    public function setItems(array $items)
    {
        $count=array_filter($items, function ($obj) {
            return !($obj instanceof Inventory);
        }
        );
        if (count($count) > 0){
            throw new \Exception('an array of Inventory must be provided');
        }
        $this->values['Items'] = $items;
        return $this;
    }
}
