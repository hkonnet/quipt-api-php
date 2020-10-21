<?php


namespace Hkonnet\QuiptApi\Common\ComplexType;

/**
 * The descriptive data for the heaviness of an object.
 *
 * @author      Sadam Hussain <dami_sadam@yahoo.com>
 * @package     PHP Quipt API wrapper
 * @subpackage  Inventroy Service
 *
 * @property string $Id
 * @property string $DisplayName
 * @property string $Code
 * @property Address $Address
 */

class Warehouse extends \Hkonnet\QuiptApi\AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'Warehouse';

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
     * Identifies the display name of inventory
     *
     * @param string $display_name
     * @return $this
     */
    public function setDisplayName($display_name)
    {
        $this->values['DisplayName'] = $display_name;
        return $this;
    }

    /**
     * Identifies the code of inventory
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
     * Identifies the  Country of inventory
     *
     * @param Address $address
     * @return $this
     */
    public function setAddress(Address $address)
    {
        $this->values['Address'] = $address;
        return $this;
    }
}
