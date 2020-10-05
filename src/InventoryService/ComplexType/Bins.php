<?php


namespace Hkonnet\QuiptApi\InventoryService\ComplexType;

/**
 * The descriptive data for the heaviness of an object.
 *
 * @author      Sadam Hussain <dami_sadam@yahoo.com>
 * @package     PHP Quipt API wrapper
 * @subpackage  Inventroy Service
 *
 * @property array $Collection
 */

class Bins extends \Hkonnet\QuiptApi\AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'Bins';

    /**
     * Identifies the Id of inventory.
     *
     * @param array $collection
     * @return $this
     */
    public function setCollection($collection)
    {
        $this->values['Collection'] = $collection;
        return $this;
    }

}
