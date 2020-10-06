<?php


namespace Hkonnet\QuiptApi\InventoryService\ComplexType;

/**
 * The descriptive data for the heaviness of an object.
 *
 * @author      Sadam Hussain <dami_sadam@yahoo.com>
 * @package     PHP Quipt API wrapper
 * @subpackage  Inventroy Service
 *
 * @property string $Id;
 * @property string $Number;
 * @property string $Location;
 * @property string $UserDefined1;
 * @property string $StartAt;
 * @property integer $Age;
 */

class InventorySerial extends \Hkonnet\QuiptApi\AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'InventorySerial';

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
     * Identifies the Number of inventory.
     *
     * @param string $number
     * @return $this
     */
    public function setNumber($number)
    {
        $this->values['Number'] = $number;
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

    /**
     * Identifies the StartAt of inventory.
     *
     * @param string $start_at
     * @return $this
     */
    public function setStartAt($start_at)
    {
        $this->values['StartAt'] = $start_at;
        return $this;
    }

    /**
     * Identifies the Age of inventory.
     *
     * @param integer $age
     * @return $this
     */
    public function setAge($age)
    {
        $this->values['Age'] = $age;
        return $this;
    }

}
