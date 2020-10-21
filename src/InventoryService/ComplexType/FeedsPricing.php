<?php


namespace Hkonnet\QuiptApi\InventoryService\ComplexType;

use Hkonnet\QuiptApi\Common\ComplexType\Currency;

/**
 * The descriptive data for the heaviness of an object.
 *
 * @author      Sadam Hussain <dami_sadam@yahoo.com>
 * @package     PHP Quipt API wrapper
 * @subpackage  Inventroy Service
 *
 * @property Currency $Price
 * @property Currency $SRP
 */
class FeedsPricing extends \Hkonnet\QuiptApi\AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'FeedsPricing';

    /**
     * Identifies the Price of inventory.
     *
     * @param Currency $price
     * @return $this
     */
    public function setPrice(Currency $price)
    {
        $this->values['Price'] = $price;
        return $this;
    }

    /**
     * Identifies the $SRP of inventory.
     *
     * @param Currency $SRP
     * @return $this
     */
    public function setSRP(Currency $SRP)
    {
        $this->values['SRP'] = $SRP;
        return $this;
    }

}
