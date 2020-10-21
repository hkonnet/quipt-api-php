<?php


namespace Hkonnet\QuiptApi\OrderService\ComplexType;


use Hkonnet\QuiptApi\Common\ComplexType\InventorySerial;
use Hkonnet\QuiptApi\Common\ComplexType\Quantity;
use Hkonnet\QuiptApi\Common\ComplexType\Warehouse;

/**
 * The descriptive data for the heaviness of an object.
 *
 * @author      Sadam Hussain <dami_sadam@yahoo.com>
 * @package     PHP Quipt API wrapper
 * @subpackage  Inventroy Service
 *
 * @property string $VendorSKU
 * @property Warehouse $Warehouse
 * @property Quantity $Quantity
 * @property array $Serials
 * @property array $Acknowledgements
 */

class Fulfillment extends \Hkonnet\QuiptApi\AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'Fulfillment';


    /**
     * Identifies the VendorSKU of inventory.
     *
     * @param string $VendorSKU
     * @return $this
     */
    public function setVendorSKU($VendorSKU)
    {
        $this->values['VendorSKU'] = $VendorSKU;
        return $this;
    }

    /**
     * Identifies the Warehouse of inventory.
     *
     * @param Warehouse $Warehouse
     * @return $this
     */
    public function setWarehouse(Warehouse $Warehouse)
    {
        $this->values['Warehouse'] = $Warehouse;
        return $this;
    }

    /**
     * Identifies the Quantity of inventory.
     *
     * @param Quantity $Quantity
     * @return $this
     */
    public function setQuantity(Quantity $Quantity)
    {
        $this->values['Quantity'] = $Quantity;
        return $this;
    }

    /**
     * Identifies the serials of inventory
     *
     * @param array $serials
     * @return $this
     */
    public function setSerials($serials)
    {

        $count=array_filter($serials, function ($obj) {
            return !($obj instanceof InventorySerial);
        }
        );
        if (count($count) > 0){
            throw new \Exception('an array of InventorySerial must be provided');
        }
        $this->values['Serials'] = $serials;
        return $this;
    }


    /**
     * Identifies the Acknowledgements of inventory
     *
     * @param array $acknowledgements
     * @return $this
     */
    public function setAcknowledgements($acknowledgements)
    {

        $count=array_filter($acknowledgements, function ($obj) {
            return !($obj instanceof Acknowledgement);
        }
        );
        if (count($count) > 0){
            throw new \Exception('an array of Acknowledgement must be provided');
        }
        $this->values['Acknowledgements'] = $acknowledgements;
        return $this;
    }




}
