<?php


namespace Hkonnet\QuiptApi\InventoryService\ComplexType;

use Hkonnet\QuiptApi\InventoryService\SimpleType\WeightUnits;

/**
 * The descriptive data for the heaviness of an object.
 *
 * @author      Sadam Hussain <dami_sadam@yahoo.com>
 * @package     PHP Quipt API wrapper
 * @subpackage  Inventroy Service
 *
 * @property string $Id
 * @property boolean $On
 * @property Channel $Channel
 * @property string|null $Promo
 * @property Allocation $Allocation
 * @property FeedsPricing $Pricing
 * @property string $MapId
 * @property string|null $ARP
 * @property array $Properties
 */
class Feeds extends \Hkonnet\QuiptApi\AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'Feeds';

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
     * Identifies the On of inventory.
     *
     * @param boolean $on
     * @return $this
     */
    public function setOn($on)
    {
        $this->values['On'] = $on;
        return $this;
    }

    /**
     * Identifies the $channel of inventory.
     *
     * @param Channel $channel
     * @return $this
     */
    public function setChannel(Channel $channel)
    {
        $this->values['Channel'] = $channel;
        return $this;
    }


 /**
     * Identifies the Allocation of inventory.
     *
     * @param Allocation $allocation
     * @return $this
     */
    public function setAllocation(Allocation $allocation)
    {
        $this->values['Allocation'] = $allocation;
        return $this;
    }

    /**
     * Identifies the Pricing of inventory.
     *
     * @param FeedsPricing $pricing
     * @return $this
     */
    public function setPricing(FeedsPricing $pricing)
    {
        $this->values['Pricing'] = $pricing;
        return $this;
    }

    /**
     * Identifies the $Promo of inventory.
     *
     * @param string|null $promo
     * @return $this
     */
    public function setPromo($promo)
    {
        $this->values['Promo'] = $promo;
        return $this;
    }

    /**
     * Identifies the MapId of inventory.
     *
     * @param string|null $map_id
     * @return $this
     */
    public function setMapId($map_id)
    {
        $this->values['MapId'] = $map_id;
        return $this;
    }

    /**
     * Identifies the ARP of inventory.
     *
     * @param string|null $ARP
     * @return $this
     */
    public function setARP($ARP)
    {
        $this->values['ARP'] = $ARP;
        return $this;
    }

    /**
     * Identifies the Properties of inventory.
     *
     * @param array $properties
     * @return $this
     */
    public function setProperties($properties)
    {
        $this->values['Properties'] = $properties;
        return $this;
    }

}
