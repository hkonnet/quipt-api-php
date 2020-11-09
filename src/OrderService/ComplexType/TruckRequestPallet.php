<?php


namespace Hkonnet\QuiptApi\OrderService\ComplexType;


use Hkonnet\QuiptApi\Common\ComplexType\CatalogCondition;
use Hkonnet\QuiptApi\Common\ComplexType\Dimensions;
use Hkonnet\QuiptApi\Common\ComplexType\Weight;


/**
 * The descriptive data for the heaviness of an object.
 *
 * @author      Sadam Hussain <dami_sadam@yahoo.com>
 * @package     PHP Quipt API wrapper
 * @subpackage  Inventroy Service
 *
 * @property Weight $Weight
 * @property Dimensions $Dimensions
 */

class TruckRequestPallet extends \Hkonnet\QuiptApi\AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'TruckRequestPallet';


    /**
     * Identifies the Weight of inventory.
     *
     * @param Weight $Weight
     * @return $this
     */
    public function setWeight(Weight $Weight)
    {
        $this->values['Status'] = $Weight;
        return $this;
    }


  /**
     * Identifies the Dimensions of inventory.
     *
     * @param Dimensions $Dimensions
     * @return $this
     */
    public function setDimensions(Dimensions $Dimensions)
    {
        $this->values['Dimensions'] = $Dimensions;
        return $this;
    }


}
