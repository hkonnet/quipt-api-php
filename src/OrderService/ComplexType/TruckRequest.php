<?php


namespace Hkonnet\QuiptApi\OrderService\ComplexType;


use Hkonnet\QuiptApi\Common\ComplexType\CatalogCondition;
use Hkonnet\QuiptApi\Common\ComplexType\Dimensions;
use Hkonnet\QuiptApi\Common\ComplexType\PhoneNumber;
use Hkonnet\QuiptApi\Common\ComplexType\Warehouse;
use Hkonnet\QuiptApi\Common\ComplexType\Weight;
use Hkonnet\QuiptApi\OrderService\SimpleType\ShipmentTruckRequestClasses;
use Hkonnet\QuiptApi\OrderService\SimpleType\ShipmentTruckRequestStatus;


/**
 * The descriptive data for the heaviness of an object.
 *
 * @author      Sadam Hussain <dami_sadam@yahoo.com>
 * @package     PHP Quipt API wrapper
 * @subpackage  Inventroy Service
 *
 * @property string $MapId
 * @property string $Id
 * @property ShipmentTruckRequestStatus|int $Status
 * @property string $LastStatusUpdateAt
 * @property string $CreatedAt
 * @property Warehouse $Warehouse
 * @property string $WarehouseOpen
 * @property string $WarehouseClose
 * @property PhoneNumber $WarehousePhoneNumber
 * @property string $ShipmentReadyAt
 * @property boolean $IsLiftGateRequired
 * @property boolean $IsInsidePickupRequired
 * @property ShipmentTruckRequestClasses|int $ShipmentClass
 * @property string $SendBillOfLadingToEmailAddress
 * @property boolean $CallWarehousePriorToPickup
 * @property array $Pallets
 */

class TruckRequest extends \Hkonnet\QuiptApi\AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'TruckRequest';


    /**
     * Identifies the Id of inventory.
     *
     * @param string $Id
     * @return $this
     */
    public function setId($Id)
    {
        $this->values['Id'] = $Id;
        return $this;
    }



    /**
     * Identifies the Status of inventory.
     *
     * @param ShipmentTruckRequestStatus|int $Status
     * @return $this
     */
    public function setCondition($Status)
    {
        $this->values['Status'] = $Status;
        return $this;
    }

    /**
     * Identifies the LastStatusUpdateAt of inventory.
     *
     * @param string $LastStatusUpdateAt
     * @return $this
     */
    public function setLastStatusUpdateAt($LastStatusUpdateAt)
    {
        $this->values['LastStatusUpdateAt'] = $LastStatusUpdateAt;
        return $this;
    }

    /**
     * Identifies the CreatedAt of inventory.
     *
     * @param string $CreatedAt
     * @return $this
     */
    public function setCreatedAt($CreatedAt)
    {
        $this->values['CreatedAt'] = $CreatedAt;
        return $this;
    }

    /**
     * Identifies the WarehousePhoneNumber of inventory.
     *
     * @param PhoneNumber $WarehousePhoneNumber
     * @return $this
     */
    public function setWarehousePhoneNumber(PhoneNumber $WarehousePhoneNumber)
    {
        $this->values['WarehousePhoneNumber'] = $WarehousePhoneNumber;
        return $this;
    }

    /**
     * Identifies the ShipmentClass of inventory.
     *
     * @param ShipmentTruckRequestClasses|int $ShipmentClass
     * @return $this
     */
    public function setShipmentClass($ShipmentClass)
    {
        $this->values['ShipmentClass'] = $ShipmentClass;
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
     * Identifies the WarehouseOpen of inventory.
     *
     * @param string $WarehouseOpen
     * @return $this
     */
    public function setWarehouseOpen($WarehouseOpen)
    {
        $this->values['WarehouseOpen'] = $WarehouseOpen;
        return $this;
    }

    /**
     * Identifies the WarehouseClose of inventory.
     *
     * @param string $WarehouseClose
     * @return $this
     */
    public function setWarehouseClose($WarehouseClose)
    {
        $this->values['WarehouseClose'] = $WarehouseClose;
        return $this;
    }


 /**
     * Identifies the ShipmentReadyAt of inventory.
     *
     * @param string $ShipmentReadyAt
     * @return $this
     */
    public function setShipmentReadyAt($ShipmentReadyAt)
    {
        $this->values['ShipmentReadyAt'] = $ShipmentReadyAt;
        return $this;
    }

    /**
     * Identifies the IsLiftGateRequired of inventory.
     *
     * @param boolean $IsLiftGateRequired
     * @return $this
     */
    public function setIsLiftGateRequired($IsLiftGateRequired)
    {
        $this->values['IsLiftGateRequired'] = $IsLiftGateRequired;
        return $this;
    }

  /**
     * Identifies the IsInsidePickupRequired of inventory.
     *
     * @param boolean $IsInsidePickupRequired
     * @return $this
     */
    public function setIsInsidePickupRequired($IsInsidePickupRequired)
    {
        $this->values['IsInsidePickupRequired'] = $IsInsidePickupRequired;
        return $this;
    }

 /**
     * Identifies the CallWarehousePriorToPickup of inventory.
     *
     * @param boolean $CallWarehousePriorToPickup
     * @return $this
     */
    public function setCallWarehousePriorToPickup($CallWarehousePriorToPickup)
    {
        $this->values['CallWarehousePriorToPickup'] = $CallWarehousePriorToPickup;
        return $this;
    }

    /**
     * Identifies the SendBillOfLadingToEmailAddress of inventory.
     *
     * @param boolean $SendBillOfLadingToEmailAddress
     * @return $this
     */
    public function setSendBillOfLadingToEmailAddress($SendBillOfLadingToEmailAddress)
    {
        $this->values['SendBillOfLadingToEmailAddress'] = $SendBillOfLadingToEmailAddress;
        return $this;
    }

    /**
     * Identifies the Pallets of inventory
     *
     * @param array $Pallets
     * @return $this
     */
    public function setPallets($Pallets)
    {

        $count = array_filter($Pallets, function ($obj) {
            return !($obj instanceof TruckRequestPallet);
        }
        );
        if (count($count) > 0) {
            throw new \Exception('an array of Pallets must be provided');
        }
        $this->values['Pallets'] = $Pallets;
        return $this;
    }


}
