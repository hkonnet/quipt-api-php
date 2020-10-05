<?php


namespace Hkonnet\QuiptApi\InventoryService\ComplexType;

/**
 * The descriptive data for the heaviness of an object.
 *
 * @author      Sadam Hussain <dami_sadam@yahoo.com>
 * @package     PHP Quipt API wrapper
 * @subpackage  Inventroy Service
 *
 * @property array $Serial
 */

class Serials extends \Hkonnet\QuiptApi\AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'Serials';

    /**
     * Identifies the Id of inventory.
     *
     * @param array $serial
     * @return $this
     */
    public function setSerial($serial)
    {
        $this->values['Serial'] = $serial;
        return $this;
    }

}
