<?php


namespace Hkonnet\QuiptApi\InventoryService\ComplexType;

/**
 * The descriptive data for the heaviness of an object.
 *
 * @author      Sadam Hussain <dami_sadam@yahoo.com>
 * @package     PHP Quipt API wrapper
 * @subpackage  Inventroy Service
 *
 * @property string $ISO
 * @property string $ISO3
 * @property string $Name
 */

class CountryOfOrigin extends \Hkonnet\QuiptApi\AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'CountryOfOrigin';

    /**
     * Identifies the ISO of inventory.
     *
     * @param string $ISO
     * @return $this
     */
    public function setISO($ISO)
    {
        $this->values['ISO'] = $ISO;
        return $this;
    }

    /**
     * Identifies the ISO3 of inventory.
     *
     * @param string $ISO3
     * @return $this
     */
    public function setISO3($ISO3)
    {
        $this->values['ISO3'] = $ISO3;
        return $this;
    }

    /**
     * Identifies the name of inventory
     *
     * @param string $name
     * @return $this
     */
    public function setName($name)
    {
        $this->values['Name'] = $name;
        return $this;
    }
}
