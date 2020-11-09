<?php


namespace Hkonnet\QuiptApi\OrderService\ComplexType;


use Hkonnet\QuiptApi\Common\ComplexType\CatalogCondition;
use Hkonnet\QuiptApi\Common\ComplexType\Dimensions;
use Hkonnet\QuiptApi\Common\ComplexType\Weight;
use Hkonnet\QuiptApi\OrderService\SimpleType\CarrierCodes;
use Hkonnet\QuiptApi\OrderService\SimpleType\CarrierMethodCodes;


/**
 * The descriptive data for the heaviness of an object.
 *
 * @author      Sadam Hussain <dami_sadam@yahoo.com>
 * @package     PHP Quipt API wrapper
 * @subpackage  Inventroy Service
 *
 * @property CarrierResult $Carrier
 * @property string $Id
 * @property string $Name
 * @property CarrierMethodCodes|int $Code
 */

class CarrierMethodResult extends \Hkonnet\QuiptApi\AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'CarrierMethodResult';


    /**
     * Identifies the Id of inventory.
     *
     * @param string $Id
     * @return $this
     */
    public function setId($Id)
    {
        $this->values['Id'] = $Id;
        return $this;
    }


    /**
     * Identifies the Name of inventory.
     *
     * @param string $Name
     * @return $this
     */
    public function setName($Name)
    {
        $this->values['Name'] = $Name;
        return $this;
    }

    /**
     * Identifies the Code of inventory.
     *
     * @param CarrierMethodCodes|int $Code
     * @return $this
     */
    public function setCode( $Code)
    {
        $this->values['Code'] = $Code;
        return $this;

    }
  /**
     * Identifies the Carrier of inventory.
     *
     * @param CarrierResult $Carrier
     * @return $this
     */
    public function setCarrier(CarrierResult $Carrier)
    {
        $this->values['Carrier'] = $Carrier;
        return $this;
    }



}
