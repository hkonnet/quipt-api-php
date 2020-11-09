<?php


namespace Hkonnet\QuiptApi\OrderService\ComplexType;


use Hkonnet\QuiptApi\Common\ComplexType\CatalogCondition;
use Hkonnet\QuiptApi\Common\ComplexType\Currency;
use Hkonnet\QuiptApi\Common\ComplexType\Dimensions;
use Hkonnet\QuiptApi\Common\ComplexType\InventorySerial;
use Hkonnet\QuiptApi\Common\ComplexType\Quantity;
use Hkonnet\QuiptApi\Common\ComplexType\QuantityOnOrder;
use Hkonnet\QuiptApi\Common\ComplexType\Weight;
use Hkonnet\QuiptApi\InventoryService\ComplexType\InventoryBin;
use Hkonnet\QuiptApi\OrderService\SimpleType\OrderStatus;
use Hkonnet\QuiptApi\OrderService\SimpleType\OrderSubStatus;
use Hkonnet\QuiptApi\OrderService\SimpleType\ShipmentFillStatus;
use Hkonnet\QuiptApi\OrderService\SimpleType\ShipmentPickStatus;


/**
 * The descriptive data for the heaviness of an object.
 *
 * @author      Sadam Hussain <dami_sadam@yahoo.com>
 * @package     PHP Quipt API wrapper
 * @subpackage  Inventroy Service
 * @property string $Id
 * @property ShipmentFillStatus|int $Status
 * @property ShipmentPickStatus|int $PickStatus
 * @property string $VendorSKU
 * @property Currency $Tax
 * @property Currency $Miscellaneous
 * @property Currency $Discount
 * @property Currency $Freight
 * @property Currency $Price
 * @property Currency $Cost
 * @property ShipmentAcknowledgementInvoice $Invoice
 * @property LineItems $Line
 */
class ShipmentResultFill extends \Hkonnet\QuiptApi\AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'ShipmentResultFill';


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
     * Identifies the Status of inventory.
     *
     * @param ShipmentFillStatus|int $Status
     * @return $this
     */
    public function setStatus($Status)
    {
        $this->values['Status'] = $Status;
        return $this;
    }

    /**
     * Identifies the PickStatus of inventory.
     *
     * @param ShipmentPickStatus|int $PickStatus
     * @return $this
     */
    public function setPickStatus($PickStatus)
    {
        $this->values['PickStatus'] = $PickStatus;
        return $this;
    }

    /**
     * Identifies the VendorSKU of inventory.
     *
     * @param string $VendorSKU
     * @return $this
     */
    public function setVendorSKU( $VendorSKU)
    {
        $this->values['VendorSKU'] = $VendorSKU;
        return $this;
    }





    /**
     * Identifies the Tax of inventory.
     *
     * @param Currency $Tax
     * @return $this
     */
    public function setTax(Currency $Tax)
    {
        $this->values['Tax'] = $Tax;
        return $this;
    }


     /**
     * Identifies the Miscellaneous of inventory.
     *
     * @param Currency $Miscellaneous
     * @return $this
     */
    public function setMiscellaneous(Currency $Miscellaneous)
    {
        $this->values['Miscellaneous'] = $Miscellaneous;
        return $this;
    }


 /**
     * Identifies the Discount of inventory.
     *
     * @param Currency $Discount
     * @return $this
     */
    public function setDiscount(Currency $Discount)
    {
        $this->values['Discount'] = $Discount;
        return $this;
    }

    /**
     * Identifies the Freight of inventory.
     *
     * @param Currency $Freight
     * @return $this
     */
    public function setFreight(Currency $Freight)
    {
        $this->values['Freight'] = $Freight;
        return $this;
    }

    /**
     * Identifies the Price of inventory.
     *
     * @param Currency $Price
     * @return $this
     */
    public function setPrice(Currency $Price)
    {
        $this->values['Price'] = $Price;
        return $this;
    }

  /**
     * Identifies the Cost of inventory.
     *
     * @param Currency $Cost
     * @return $this
     */
    public function setCost(Currency $Cost)
    {
        $this->values['Cost'] = $Cost;
        return $this;
    }




    /**
     * Identifies the Invoice of inventory.
     *
     * @param ShipmentAcknowledgementInvoice $Invoice
     * @return $this
     */
    public function setInvoice(ShipmentAcknowledgementInvoice $Invoice)
    {
        $this->values['Invoice'] = $Invoice;
        return $this;
    }


 /**
     * Identifies the Line of inventory.
     *
     * @param LineItems $Line
     * @return $this
     */
    public function setLine(LineItems $Line)
    {
        $this->values['Line'] = $Line;
        return $this;
    }

    /**
     * Identifies the Serial of inventory.
     *
     * @param InventorySerial $Serial
     * @return $this
     */
    public function setSerial(InventorySerial $Serial)
    {
        $this->values['Serial'] = $Serial;
        return $this;
    }



}
