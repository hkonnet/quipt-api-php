<?php


namespace Hkonnet\QuiptApi\InventoryService\ComplexType;

/**
 * The descriptive data for the heaviness of an object.
 *
 * @author      Sadam Hussain <dami_sadam@yahoo.com>
 * @package     PHP Quipt API wrapper
 * @subpackage  Inventroy Service
 *
 * @property string $Id
 * @property Quantity $Quantity
 * @property QuantityOnOrder $QuantityOnOrder
 * @property Serials $Serials
 * @property Bins $Bins
 * @property Warehouse $Warehouse
 */

class Locations extends \Hkonnet\QuiptApi\AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'Locations';

    /**
     * Identifies the Id of inventory.
     *
     * @param string $id
     * @return $this
     */
    public function setId($id)
    {
        $this->values['Id'] = $id;
        return $this;
    }

    /**
     * Identifies the quantity of inventory
     *
     * @param Quantity $quantity
     * @return $this
     */
    public function setQuantity(Quantity $quantity)
    {
        $this->values['Quantity'] = $quantity;
        return $this;
    }

    /**
     * Identifies the quantity_on_order of inventory
     *
     * @param QuantityOnOrder $quantity_on_order
     * @return $this
     */
    public function setQuantityOnOrder(QuantityOnOrder $quantity_on_order)
    {
        $this->values['QuantityOnOrder'] = $quantity_on_order;
        return $this;
    }

    /**
     * Identifies the serials of inventory
     *
     * @param Serials $serials
     * @return $this
     */
    public function setSerials(Serials $serials)
    {
        $this->values['Serials'] = $serials;
        return $this;
    }

    /**
     * Identifies the  $bins of inventory
     *
     * @param Bins $bins
     * @return $this
     */
    public function setBins(Bins $bins)
    {
        $this->values['Bins'] = $bins;
        return $this;
    }

    /**
     * Identifies the  $warehouse of inventory
     *
     * @param Warehouse $warehouse
     * @return $this
     */
    public function setWarehouse(Warehouse $warehouse)
    {
        $this->values['Warehouse'] = $warehouse;
        return $this;
    }
}
