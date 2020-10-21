<?php


namespace Hkonnet\QuiptApi\InventoryService\ComplexType;


use Hkonnet\QuiptApi\Common\ComplexType\Currency;
use Hkonnet\QuiptApi\Common\ComplexType\Partner;

/**
 * The descriptive data for the heaviness of an object.
 *
 * @author      Sadam Hussain <dami_sadam@yahoo.com>
 * @package     PHP Quipt API wrapper
 * @subpackage  Inventroy Service
 *
 * @property string $Id
 * @property boolean $On
 * @property Partner $Channel
 * @property FeedPromotion $Promo
 * @property Allocation $Allocation
 * @property FeedsPricing $Pricing
 * @property string $MapId
 * @property Currency $ARP
 * @property array $Properties
 */
class Feed extends \Hkonnet\QuiptApi\AbstractComplexType
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
     * @param Partner $channel
     * @return $this
     */
    public function setChannel(Partner $channel)
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
     * @param FeedPromotion $promo
     * @return $this
     */
    public function setPromo(FeedPromotion $promo)
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
     * @param Currency $ARP
     * @return $this
     */
    public function setARP(Currency $ARP)
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
        $count=array_filter($properties, function ($obj) {
            return !($obj instanceof FeedProperty);
        }
        );
        if (count($count) > 0){
            throw new \Exception('an array of FeedProperty must be provided');
        }
        $this->values['Properties'] = $properties;
        return $this;
    }

}
