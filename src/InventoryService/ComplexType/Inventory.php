<?php


namespace Hkonnet\QuiptApi\InventoryService\ComplexType;

use Hkonnet\QuiptApi\InventoryService\SimpleType\DropShipOptions;
use Hkonnet\QuiptApi\InventoryService\SimpleType\Flags;
use Hkonnet\QuiptApi\InventoryService\SimpleType\WeightUnits;

/**
 * The descriptive data for the heaviness of an object.
 *
 * @author      Sadam Hussain <dami_sadam@yahoo.com>
 * @package     PHP Quipt API wrapper
 * @subpackage  Inventroy Service
 *
 * @property string $MapId
 * @property Catalog $Catalog
 * @property integer $MinPurchaseQuantity
 * @property integer $MultiplePurchaseQuantity
 * @property integer $LeadTimeInDays
 * @property integer $UnitsPerCarton
 * @property string $UserDefined1
 * @property string $UserDefined2
 * @property string $Notes
 * @property array $Tags
 * @property Weight $Weight
 * @property Dimensions $Dimensions
 * @property DropShipOptions $DropShipOption
 * @property InventoryLocation $Locations
 * @property string $Id
 * @property string $SKU
 * @property Currency $Cost
 * @property array $Feeds
 * @property Flags $Flags

 */
class Inventory extends \Hkonnet\QuiptApi\AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'Inventory';

    /**
     * Identifies the MapId of inventory.
     *
     * @param string $map_id
     * @return $this
     */
    public function setMapId($map_id)
    {
        $this->values['MapId'] = $map_id;
        return $this;
    }

    /**
     * Identifies the Catalog of inventory.
     *
     * @param Catalog $catalog
     * @return $this
     */
    public function setCatalog(Catalog $catalog)
    {
        $this->values['Catalog'] = $catalog;
        return $this;
    }
    /**
     * Identifies the MinPurchaseQuantity of inventory.
     *
     * @param integer $min_purchase_quantity
     * @return $this
     */
    public function setMinPurchaseQuantity($min_purchase_quantity)
    {
        $this->values['MinPurchaseQuantity'] = $min_purchase_quantity;
        return $this;
    }

    /**
     * Identifies the MultiplePurchaseQuantity of inventory.
     *
     * @param integer $MultiplePurchaseQuantity
     * @return $this
     */
    public function setMultiplePurchaseQuantity($MultiplePurchaseQuantity)
    {
        $this->values['MultiplePurchaseQuantity'] = $MultiplePurchaseQuantity;
        return $this;
    }

    /**
     * Identifies the LeadTimeInDays of inventory.
     *
     * @param integer $LeadTimeInDays
     * @return $this
     */
    public function setLeadTimeInDays($LeadTimeInDays)
    {
        $this->values['LeadTimeInDays'] = $LeadTimeInDays;
        return $this;
    }

    /**
     * Identifies the UnitsPerCarton of inventory.
     *
     * @param integer $UnitsPerCarton
     * @return $this
     */
    public function setUnitsPerCarton($UnitsPerCarton)
    {
        $this->values['UnitsPerCarton'] = $UnitsPerCarton;
        return $this;
    }


    /**
     * Identifies the UserDefined1 of inventory.
     *
     * @param string $UserDefined1
     * @return $this
     */
    public function setUserDefined1($UserDefined1)
    {
        $this->values['UserDefined1'] = $UserDefined1;
        return $this;
    }


    /**
     * Identifies the UserDefined2 of inventory.
     *
     * @param string $UserDefined2
     * @return $this
     */
    public function setUserDefined2($UserDefined2)
    {
        $this->values['UserDefined2'] = $UserDefined2;
        return $this;
    }

    /**
     * Identifies the Notes of inventory.
     *
     * @param string $Notes
     * @return $this
     */
    public function setNotes($Notes)
    {
        $this->values['Notes'] = $Notes;
        return $this;
    }

    /**
     * Identifies the Tags of inventory.
     *
     * @param array $Tags
     * @return $this
     */
    public function setTags(array  $Tags)
    {
        $this->values['Tags'] = $Tags;
        return $this;
    }

    /**
     * Identifies the Weight of inventory.
     *
     * @param Weight $Weight
     * @return $this
     */
    public function setWeight(Weight  $Weight)
    {
        $this->values['Weight'] = $Weight;
        return $this;
    }

    /**
     * Identifies the $Dimensions of inventory.
     *
     * @param Dimensions $Dimensions
     * @return $this
     */
    public function setDimensions(Dimensions  $Dimensions)
    {
        $this->values['Dimensions'] = $Dimensions;
        return $this;
    }

    /**
     * Identifies the DropShipOption of inventory.
     *
     * @param DropShipOptions $DropShipOption
     * @return $this
     */
    public function setDropShipOption($DropShipOption)
    {
        $this->values['DropShipOption'] = $DropShipOption;
        return $this;
    }


 /**
     * Identifies the $Locations of inventory.
     *
     * @param InventoryLocation $Locations
     * @return $this
     */
    public function setLocations(InventoryLocation $Locations)
    {
        $this->values['Locations'] = $Locations;
        return $this;
    }

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
     * Identifies the $SKU of inventory.
     *
     * @param string $SKU
     * @return $this
     */
    public function setSKU($SKU)
    {
        $this->values['SKU'] = $SKU;
        return $this;
    }

    /**
     * Identifies the Price of inventory.
     *
     * @param Currency $cost
     * @return $this
     */
    public function setCost(Currency $cost)
    {
        $this->values['Cost'] = $cost;
        return $this;
    }

    /**
     * Identifies the $Feeds of inventory.
     *
     * @param array $Feeds
     * @return $this
     */
    public function setFeeds(array $Feeds)
    {
        $count=array_filter($Feeds, function ($obj) {
            return !($obj instanceof Feed);
        }
        );
        if (count($count) > 0){
            throw new \Exception('an array of Feed must be provided');
        }
        $this->values['Feeds'] = $Feeds;
        return $this;
    }

    /**
     * Identifies the Flags of inventory.
     *
     * @param Flags $Flag
     * @return $this
     */
    public function setFlags( $Flag)
    {

        $this->values['Flags'] = $Flag;
        return $this;
    }
}
