<?php


namespace Hkonnet\QuiptApi\InventoryService\ComplexType;

use Hkonnet\QuiptApi\InventoryService\SimpleType\DimensionUnits;
use Hkonnet\QuiptApi\InventoryService\SimpleType\WeightUnits;

/**
 * The descriptive data for the heaviness of an object.
 *
 * @author      Sadam Hussain <dami_sadam@yahoo.com>
 * @package     PHP Quipt API wrapper
 * @subpackage  Inventroy Service
 *
 * @property DimensionUnits|integer $Units
 * @property float $Length
 * @property float $Width
 * @property float $Height
 */
class Dimensions extends \Hkonnet\QuiptApi\AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'Dimensions';

    /**
     * Identifies the unit of measure associated with a weight value.
     *
     * @param DimensionUnits|integer $units
     * @return $this
     */
    public function setUnits($units)
    {
        $this->values['Units'] = $units;
        return $this;
    }

    /**
     * Identifies the Dimension Length.
     *
     * @param float $length
     * @return $this
     */
    public function setLength($length)
    {
        $this->values['Length'] = $length;
        return $this;
    }
    /**
     * Identifies the Dimension Width.
     *
     * @param float $width
     * @return $this
     */
    public function setWidth($width)
    {
        $this->values['Width'] = $width;
        return $this;
    }/**
     * Identifies the Dimension Height.
     *
     * @param float $height
     * @return $this
     */
    public function setHeight($height)
    {
        $this->values['Height'] = $height;
        return $this;
    }
}
