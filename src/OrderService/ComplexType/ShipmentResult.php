<?php


namespace Hkonnet\QuiptApi\OrderService\ComplexType;


use Hkonnet\QuiptApi\Common\ComplexType\CatalogInsurableValue;
use Hkonnet\QuiptApi\Common\ComplexType\Currency;
use Hkonnet\QuiptApi\Common\ComplexType\Dimensions;
use Hkonnet\QuiptApi\Common\ComplexType\Warehouse;
use Hkonnet\QuiptApi\Common\ComplexType\Weight;
use Hkonnet\QuiptApi\OrderService\SimpleType\ShipmentStatus;


/**
 * The descriptive data for the heaviness of an object.
 *
 * @author      Sadam Hussain <dami_sadam@yahoo.com>
 * @package     PHP Quipt API wrapper
 * @subpackage  Inventroy Service
 *
 * @property string $Id
 * @property CarrierMethodResult $CarrierMethod
 * @property array $Fills
 * @property ShipmentStatus|int $Status
 * @property string $ErrorMessage
 * @property Currency $InsurableValue
 * @property ShipmentTrackingResult $Tracking
 * @property array $Invoices
 * @property PrintableDocument $Packingslip
 * @property array $Labels
 * @property Warehouse $Warehouse
 * @property string $ShipAt
 * @property string $UserDefined1
 * @property string $UserDefined2
 * @property Weight $Weight
 * @property Dimensions $Dimensions
 * @property CarrierAccountDetails $CarrierAccountDetails
 * @property string $SSCC
 */

class ShipmentResult extends \Hkonnet\QuiptApi\AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'ShipmentResult';


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
     * Identifies the CarrierMethod of inventory.
     *
     * @param CarrierMethodResult $CarrierMethod
     * @return $this
     */
    public function setCarrierMethod(CarrierMethodResult $CarrierMethod)
    {
        $this->values['CarrierAccountDetails'] = $CarrierMethod;
        return $this;
    }

    /**
     * Identifies the Status of inventory.
     *
     * @param ShipmentStatus|int $Status
     * @return $this
     */
    public function setStatus($Status)
    {
        $this->values['Status'] = $Status;
        return $this;
    }

    /**
     * Identifies the ErrorMessage of inventory.
     *
     * @param string $ErrorMessage
     * @return $this
     */
    public function setErrorMessage($ErrorMessage)
    {
        $this->values['ErrorMessage'] = $ErrorMessage;
        return $this;
    }

    /**
     * Identifies the InsurableValue of inventory.
     *
     * @param Currency $InsurableValue
     * @return $this
     */
    public function setInsurableValue(Currency $InsurableValue)
    {
        $this->values['InsurableValue'] = $InsurableValue;
        return $this;
    }

    /**
     * Identifies the Tracking of inventory.
     *
     * @param ShipmentTrackingResult $Tracking
     * @return $this
     */
    public function setTracking(ShipmentTrackingResult $Tracking)
    {
        $this->values['Tracking'] = $Tracking;
        return $this;
    }

    /**
     * Identifies the Packingslip of inventory.
     *
     * @param PrintableDocument $Packingslip
     * @return $this
     */
    public function setPackingslip(PrintableDocument $Packingslip)
    {
        $this->values['Packingslip'] = $Packingslip;
        return $this;
    }

    /**
     * Identifies the Warehouse of inventory.
     *
     * @param Warehouse $Warehouse
     * @return $this
     */
    public function setWarehouse(Warehouse $Warehouse)
    {
        $this->values['Warehouse'] = $Warehouse;
        return $this;
    }

    /**
     * Identifies the ShipAt of inventory.
     *
     * @param string $ShipAt
     * @return $this
     */
    public function setShipAt( $ShipAt)
    {
        $this->values['ShipAt'] = $ShipAt;
        return $this;
    }

    /**
     * Identifies the UserDefined1 of inventory.
     *
     * @param string $UserDefined1
     * @return $this
     */
    public function setUserDefined1( $UserDefined1)
    {
        $this->values['UserDefined1'] = $UserDefined1;
        return $this;
    }

    /**
     * Identifies the UserDefined2 of inventory.
     *
     * @param string $UserDefined2
     * @return $this
     */
    public function setUserDefined2( $UserDefined2)
    {
        $this->values['UserDefined2'] = $UserDefined2;
        return $this;
    }

    /**
     * Identifies the Weight of inventory.
     *
     * @param Weight $Weight
     * @return $this
     */
    public function setWeight(Weight $Weight)
    {
        $this->values['Weight'] = $Weight;
        return $this;
    }


  /**
     * Identifies the Dimensions of inventory.
     *
     * @param Dimensions $Dimensions
     * @return $this
     */
    public function setDimensions(Dimensions $Dimensions)
    {
        $this->values['Dimensions'] = $Dimensions;
        return $this;
    }




    /**
     * Identifies the CarrierAccountDetails of inventory.
     *
     * @param CarrierAccountDetails $CarrierAccountDetails
     * @return $this
     */
    public function setCarrierAccountDetails(CarrierAccountDetails $CarrierAccountDetails)
    {
        $this->values['CarrierAccountDetails'] = $CarrierAccountDetails;
        return $this;
    }


    /**
     * Identifies the SSCC of inventory.
     *
     * @param string $SSCC
     * @return $this
     */
    public function setSSCC( $SSCC)
    {
        $this->values['SSCC'] = $SSCC;
        return $this;
    }

    /**
     * Identifies the Fills of inventory
     *
     * @param array $Fills
     * @return $this
     */
    public function setFills($Fills)
    {

        $count = array_filter($Fills, function ($obj) {
            return !($obj instanceof ShipmentResultFill);
        }
        );
        if (count($count) > 0) {
            throw new \Exception('an array of ShipmentResultFill must be provided');
        }
        $this->values['Fills'] = $Fills;
        return $this;
    }


 /**
     * Identifies the Invoices of inventory
     *
     * @param array $Invoices
     * @return $this
     */
    public function setInvoices($Invoices)
    {

        $count = array_filter($Invoices, function ($obj) {
            return !($obj instanceof ShipmentAcknowledgementInvoice);
        }
        );
        if (count($count) > 0) {
            throw new \Exception('an array of ShipmentAcknowledgementInvoice must be provided');
        }
        $this->values['Invoices'] = $Invoices;
        return $this;
    }

     /**
     * Identifies the Labels of inventory
     *
     * @param array $Labels
     * @return $this
     */
    public function setLabels($Labels)
    {

        $count = array_filter($Labels, function ($obj) {
            return !($obj instanceof PrintableDocument);
        }
        );
        if (count($count) > 0) {
            throw new \Exception('an array of PrintableDocument must be provided');
        }
        $this->values['Labels'] = $Labels;
        return $this;
    }




}
