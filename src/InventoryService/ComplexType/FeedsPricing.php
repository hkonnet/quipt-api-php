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
 * @property PricingPrice $Price
 * @property PricingSRP $SRP
 */
class FeedsPricing extends \Hkonnet\QuiptApi\AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'Pricing';

    /**
     * Identifies the Price of inventory.
     *
     * @param PricingPrice $price
     * @return $this
     */
    public function setPrice(PricingPrice $price)
    {
        $this->values['Price'] = $price;
        return $this;
    }

    /**
     * Identifies the $SRP of inventory.
     *
     * @param PricingSRP $SRP
     * @return $this
     */
    public function setSRP(PricingSRP $SRP)
    {
        $this->values['SRP'] = $SRP;
        return $this;
    }

}
