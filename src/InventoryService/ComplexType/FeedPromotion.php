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
 * @property string $StartTime
 * @property string $EndTime
 * @property Currency $Price
 * @property Currency $SRP
 */
class FeedPromotion extends \Hkonnet\QuiptApi\AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'FeedPromotion';

    /**
     * Identifies the StartTime of inventory.
     *
     * @param string $start_time
     * @return $this
     */
    public function setStartTime( $start_time)
    {
        $this->values['StartTime'] = $start_time;
        return $this;
    }

    /**
     * Identifies the EndTime of inventory.
     *
     * @param string $end_time
     * @return $this
     */
    public function setEndTime( $end_time)
    {
        $this->values['EndTime'] = $end_time;
        return $this;
    }

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
