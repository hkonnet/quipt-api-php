<?php


namespace Hkonnet\QuiptApi\InventoryService\ComplexType;

use Hkonnet\QuiptApi\InventoryService\SimpleType\PackagingCodes;

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
 */

class FeedProperty extends \Hkonnet\QuiptApi\AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'FeedProperty';

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
}
