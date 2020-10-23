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


/**
 * The descriptive data for the heaviness of an object.
 *
 * @author      Sadam Hussain <dami_sadam@yahoo.com>
 * @package     PHP Quipt API wrapper
 * @subpackage  Inventroy Service
 * @property string $Id
 * @property array $Fulfillments
 * @property array $Acknowledgements
 * @property Item $Item
 * @property Quantity $Canceled
 * @property QuantityOnOrder $BackOrdered
 * @property Quantity $Shipped
 * @property SubstituteLine $SubstitutionFor
 * @property int $LineNumber
 * @property Quantity $Ordered
 * @property Currency $Tax
 * @property Currency $Miscellaneous
 * @property Currency $Discount
 * @property Currency $Freight
 * @property Currency $Price
 * @property string $UserDefined1
 * @property string $UserDefined2
 * @property string $UserDefined3
 * @property string $RequestedShipDate
 * @property OrderStatus|int $Status
 * @property string $StatusAt
 * @property OrderSubStatus $SubStatus
 */
class LineItems extends \Hkonnet\QuiptApi\AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'LineItems';


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
     * Identifies the Fulfillments of inventory
     *
     * @param array $Fulfillments
     * @return $this
     */
    public function setFulfillments($Fulfillments)
    {

        $count = array_filter($Fulfillments, function ($obj) {
            return !($obj instanceof Fulfillment);
        }
        );
        if (count($count) > 0) {
            throw new \Exception('an array of Fulfillments must be provided');
        }
        $this->values['Fulfillments'] = $Fulfillments;
        return $this;
    }

    /**
     * Identifies the Acknowledgements of inventory
     *
     * @param array $Acknowledgements
     * @return $this
     */
    public function setAcknowledgements($Acknowledgements)
    {

        $count = array_filter($Acknowledgements, function ($obj) {
            return !($obj instanceof Acknowledgement);
        }
        );
        if (count($count) > 0) {
            throw new \Exception('an array of Acknowledgements must be provided');
        }
        $this->values['Acknowledgements'] = $Acknowledgements;
        return $this;
    }


    /**
     * Identifies the Title of inventory.
     *
     * @param string $Title
     * @return $this
     */
    public function setTitle($Title)
    {
        $this->values['Title'] = $Title;
        return $this;
    }

    /**
     * Identifies the Item of inventory.
     *
     * @param Item $Item
     * @return $this
     */
    public function setItem(Item $Item)
    {
        $this->values['Item'] = $Item;
        return $this;
    }

    /**
     * Identifies the Canceled of inventory.
     *
     * @param Quantity $Canceled
     * @return $this
     */
    public function setCanceled(Quantity $Canceled)
    {
        $this->values['Canceled'] = $Canceled;
        return $this;
    }


    /**
     * Identifies the BackOrdered of inventory.
     *
     * @param QuantityOnOrder $BackOrdered
     * @return $this
     */
    public function setBackOrdered(QuantityOnOrder $BackOrdered)
    {
        $this->values['BackOrdered'] = $BackOrdered;
        return $this;
    }

    /**
     * Identifies the Shipped of inventory.
     *
     * @param Quantity $Shipped
     * @return $this
     */
    public function setShipped(Quantity $Shipped)
    {
        $this->values['Shipped'] = $Shipped;
        return $this;
    }

    /**
     * Identifies the SubstitutionFor of inventory.
     *
     * @param SubstituteLine $SubstitutionFor
     * @return $this
     */
    public function setSubstitutionFor(SubstituteLine $SubstitutionFor)
    {
        $this->values['SubstitutionFor'] = $SubstitutionFor;
        return $this;
    }

    /**
     * Identifies the LineNumber of inventory.
     *
     * @param int $LineNumber
     * @return $this
     */
    public function setLineNumber($LineNumber)
    {
        $this->values['LineNumber'] = $LineNumber;
        return $this;
    }

    /**
     * Identifies the Ordered of inventory.
     *
     * @param Quantity $Ordered
     * @return $this
     */
    public function setOrdered(Quantity $Ordered)
    {
        $this->values['Ordered'] = $Ordered;
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
     * Identifies the UserDefined1 of inventory.
     *
     * @param string $UserDefined1
     * @return $this
     */
    public function setUserDefined1($UserDefined1)
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
    public function setUserDefined2($UserDefined2)
    {
        $this->values['UserDefined2'] = $UserDefined2;
        return $this;
    }

    /**
     * Identifies the UserDefined3 of inventory.
     *
     * @param string $UserDefined3
     * @return $this
     */
    public function setUserDefined3($UserDefined3)
    {
        $this->values['UserDefined3'] = $UserDefined3;
        return $this;
    }


    /**
     * Identifies the RequestedShipDate of inventory.
     *
     * @param string $RequestedShipDate
     * @return $this
     */
    public function setRequestedShipDate($RequestedShipDate)
    {
        $this->values['RequestedShipDate'] = $RequestedShipDate;
        return $this;
    }

    /**
     * Identifies the StatusAt of inventory.
     *
     * @param string $StatusAt
     * @return $this
     */
    public function setStatusAt($StatusAt)
    {
        $this->values['StatusAt'] = $StatusAt;
        return $this;
    }

    /**
     * Identifies the Status of inventory.
     *
     * @param OrderStatus|int $Status
     * @return $this
     */
    public function setStatus($Status)
    {
        $this->values['Status'] = $Status;
        return $this;
    }

    /**
     * Identifies the SubStatus of inventory.
     *
     * @param OrderSubStatus|int $SubStatus
     * @return $this
     */
    public function setSubStatus($SubStatus)
    {
        $this->values['SubStatus'] = $SubStatus;
        return $this;
    }



}
