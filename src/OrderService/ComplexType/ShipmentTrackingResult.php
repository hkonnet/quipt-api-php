<?php


namespace Hkonnet\QuiptApi\OrderService\ComplexType;


use Hkonnet\QuiptApi\Common\ComplexType\CatalogCondition;
use Hkonnet\QuiptApi\Common\ComplexType\TrackingNumber;
use Hkonnet\QuiptApi\Common\ComplexType\EstimatedDelivery;
use Hkonnet\QuiptApi\OrderService\SimpleType\ShipmentTrackingCurrentStatus;


/**
 * The descriptive data for the heaviness of an object.
 *
 * @author      Sadam Hussain <dami_sadam@yahoo.com>
 * @package     PHP Quipt API wrapper
 * @subpackage  Inventroy Service
 *
 * @property string $TrackingURL
 * @property string $Id
 * @property string $CreatedAt
 * @property ShipmentTrackingCurrentStatus|int $CurrentStatus
 * @property string $LastUpdatedAt
 * @property string $EstimatedDelivery
 * @property string $TrackingNumber
 * @property CarrierMethodResult $CarrierMethod
 */

class ShipmentTrackingResult extends \Hkonnet\QuiptApi\AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'ShipmentTrackingResult';


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
     * Identifies the CreatedAt of inventory.
     *
     * @param string $CreatedAt
     * @return $this
     */
    public function setCreatedAt($CreatedAt)
    {
        $this->values['CreatedAt'] = $CreatedAt;
        return $this;
    }

    /**
     * Identifies the CurrentStatus of inventory.
     *
     * @param ShipmentTrackingCurrentStatus|int $CurrentStatus
     * @return $this
     */
    public function setCurrentStatus($CurrentStatus)
    {
        $this->values['CurrentStatus'] = $CurrentStatus;
        return $this;
    }

    /**
     * Identifies the LastUpdatedAt of inventory.
     *
     * @param string $LastUpdatedAt
     * @return $this
     */
    public function setLastUpdatedAt( $LastUpdatedAt)
    {
        $this->values['LastUpdatedAt'] = $LastUpdatedAt;
        return $this;
    }

    /**
     * Identifies the EstimatedDelivery of inventory.
     *
     * @param string $EstimatedDelivery
     * @return $this
     */
    public function setEstimatedDelivery( $EstimatedDelivery)
    {
        $this->values['EstimatedDelivery'] = $EstimatedDelivery;
        return $this;
    }


  /**
     * Identifies the TrackingNumber of inventory.
     *
     * @param string $TrackingNumber
     * @return $this
     */
    public function setTrackingNumber( $TrackingNumber)
    {
        $this->values['TrackingNumber'] = $TrackingNumber;
        return $this;
    }


     /**
     * Identifies the CarrierMethod of inventory.
     *
     * @param CarrierMethodResult $CarrierMethod
     * @return $this
     */
    public function setCarrierMethod(CarrierMethodResult $CarrierMethod)
    {
        $this->values['CarrierMethod'] = $CarrierMethod;
        return $this;
    }


}
