<?php


namespace Hkonnet\QuiptApi\Common\ComplexType;

/**
 * The descriptive data for the heaviness of an object.
 *
 * @author      Sadam Hussain <dami_sadam@yahoo.com>
 * @package     PHP Quipt API wrapper
 * @subpackage  Inventroy Service
 *
 * @property boolean $Purge
 * @property array $Collection
 */

class InventorySerialCollection extends \Hkonnet\QuiptApi\AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'InventorySerialCollection';

    /**
     * Identifies the Id of inventory.
     *
     * @param boolean $purge
     * @return $this
     */
    public function setPurge($purge)
    {
        $this->values['Purge'] = $purge;
        return $this;
    }

    /**
     * Identifies the Id of inventory.
     *
     * @param array $collection
     * @return $this
     */
    public function setCollection($collection)
    {
        $count=array_filter($collection, function ($obj) {
            return !($obj instanceof InventorySerial);
        }
        );
        if (count($count) > 0){
            throw new \Exception('an array of InventorySerial must be provided');
        }
        $this->values['Collection'] = $collection;
        return $this;
    }


}
