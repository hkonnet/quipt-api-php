<?php


namespace Hkonnet\QuiptApi\Common\ComplexType;

use Hkonnet\QuiptApi\Common\SimpleType\CurrencyUnits;


/**
 * The descriptive data for the heaviness of an object.
 *
 * @author      Sadam Hussain <dami_sadam@yahoo.com>
 * @package     PHP Quipt API wrapper
 * @subpackage  Inventroy Service
 *
 * @property CurrencyUnits|integer $Units
 * @property float $Value
 */
class Currency extends \Hkonnet\QuiptApi\AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'Currency';

    /**
     * Identifies the unit of measure associated with a weight value.
     *
     * @param CurrencyUnits|integer $units
     * @return $this
     */
    public function setUnits($units)
    {
        $this->values['Units'] = $units;
        return $this;
    }

    /**
     * Identifies the weight value of a package/shipment.
     *
     * @param float $value
     * @return $this
     */
    public function setValue($value)
    {
        $this->values['Value'] = $value;
        return $this;
    }
}
