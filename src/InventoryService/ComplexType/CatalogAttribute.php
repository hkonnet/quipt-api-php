<?php


namespace Hkonnet\QuiptApi\InventoryService\ComplexType;

/**
 * The descriptive data for the heaviness of an object.
 *
 * @author      Sadam Hussain <dami_sadam@yahoo.com>
 * @package     PHP Quipt API wrapper
 * @subpackage  Inventroy Service
 *
 * @property string $Id
 * @property string $Name
 * @property string $Code
 * @property array $Value
 * @property CatalogAttributeSection $Section
 */

class CatalogAttribute extends \Hkonnet\QuiptApi\AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'Attributes';

    /**
     * Identifies the Id of inventory.
     *
     * @param string $id
     * @return $this
     */
    public function setId($id)
    {
        $this->values['Id'] = $id;
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

    /**
     * Identifies the Code of inventory
     *
     * @param string $code
     * @return $this
     */
    public function setCode($code)
    {
        $this->values['Code'] = $code;
        return $this;
    }

    /**
     * Identifies the value of a package/shipment.
     *
     * @param array $value
     * @return $this
     */
    public function setValue($value)
    {
        $this->values['Value'] = $value;
        return $this;
    }

    /**
     * Identifies the Section of inventory
     *
     * @param CatalogAttributeSection $section
     * @return $this
     */
    public function setSection(CatalogAttributeSection $section)
    {
        $this->values['Section'] = $section;
        return $this;
    }

}
