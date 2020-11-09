<?php


Namespace Hkonnet\QuiptApi\OrderService\ComplexType;


use Hkonnet\QuiptApi\Common\ComplexType\CatalogCondition;
use Hkonnet\QuiptApi\Common\ComplexType\Dimensions;
use Hkonnet\QuiptApi\Common\ComplexType\Weight;
use Hkonnet\QuiptApi\OrderService\SimpleType\CarrierCodes;


/**
 * The descriptive data for the heaviness of an object.
 *
 * @author      Sadam Hussain <dami_sadam@yahoo.com>
 * @package     PHP Quipt API wrapper
 * @subpackage  Inventroy Service
 *
 * @property string $TrackingURL
 * @property string $Id
 * @property string $Name
 * @property CarrierCodes|int $Code

 */

class CarrierResult extends \Hkonnet\QuiptApi\AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'CarrierResult';


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
     * Identifies the TrackingURL of inventory.
     *
     * @param string $TrackingURL
     * @return $this
     */
    public function setTrackingURL($TrackingURL)
    {
        $this->values['TrackingURL'] = $TrackingURL;
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
     * @param CarrierCodes|int $Code
     * @return $this
     */
    public function setCode( $Code)
    {
        $this->values['Code'] = $Code;
        return $this;
    }





}
