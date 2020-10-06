<?php


namespace Hkonnet\QuiptApi\InventoryService\ComplexType;

use Hkonnet\QuiptApi\InventoryService\SimpleType\QuantityUnits;
use Hkonnet\QuiptApi\InventoryService\SimpleType\WeightUnits;

/**
 * The descriptive data for the heaviness of an object.
 *
 * @author      Sadam Hussain <dami_sadam@yahoo.com>
 * @package     PHP Quipt API wrapper
 * @subpackage  Inventroy Service
 *
 * @property QuantityUnits|integer $Units
 * @property string|null $ExpectedAt
 * @property float $Value
 */
class QuantityOnOrder extends \Hkonnet\QuiptApi\AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'QuantityOnOrder';

    /**
     * Identifies the unit of measure associated with a weight value.
     *
     * @param QuantityUnits|integer $units
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
    /**
     * Identifies the weight value of a package/shipment.
     *
     * @param string|null $expectedAt
     * @return $this
     */
    public function setExpectedAt($expectedAt)
    {
        $this->values['ExpectedAt'] = $expectedAt;
        return $this;
    }
}
