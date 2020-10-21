<?php


namespace Hkonnet\QuiptApi\InventoryService\ComplexType;

use Hkonnet\QuiptApi\Common\ComplexType\Quantity;

/**
 * The descriptive data for the heaviness of an object.
 *
 * @author      Sadam Hussain <dami_sadam@yahoo.com>
 * @package     PHP Quipt API wrapper
 * @subpackage  Inventroy Service
 *
 * @property Quantity $Quantity
 * @property string $Location
 * @property string $UserDefined1
 */

class InventoryBin extends \Hkonnet\QuiptApi\AbstractComplexType
{


    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'InventoryBin';

    /**
     * Identifies the Quantity of inventory.
     *
     * @param Quantity $collection
     * @return $this
     */
    public function setQuantity(Quantity $collection)
    {
        $this->values['Quantity'] = $collection;
        return $this;
    }

    /**
     * Identifies the Location of inventory.
     *
     * @param string $location
     * @return $this
     */
    public function setLocation($location)
    {
        $this->values['Location'] = $location;
        return $this;
    }

    /**
     * Identifies the UserDefined1 of inventory.
     *
     * @param string $user_defined1
     * @return $this
     */
    public function setUserDefined1($user_defined1)
    {
        $this->values['UserDefined1'] = $user_defined1;
        return $this;
    }



}
