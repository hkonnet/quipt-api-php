<?php


namespace Hkonnet\QuiptApi\OrderService\ComplexType;


use Hkonnet\QuiptApi\Common\ComplexType\CatalogCondition;
use Hkonnet\QuiptApi\Common\ComplexType\Currency;
use Hkonnet\QuiptApi\Common\ComplexType\Dimensions;
use Hkonnet\QuiptApi\Common\ComplexType\Quantity;
use Hkonnet\QuiptApi\Common\ComplexType\QuantityOnOrder;
use Hkonnet\QuiptApi\Common\ComplexType\Weight;
use Hkonnet\QuiptApi\OrderService\SimpleType\OrderStatus;
use Hkonnet\QuiptApi\OrderService\SimpleType\OrderSubStatus;


/**
 * The descriptive data for the heaviness of an object.
 *
 * @author      Sadam Hussain <dami_sadam@yahoo.com>
 * @package     PHP Quipt API wrapper
 * @subpackage  Inventroy Service
 *
 * @property string $MapId
 * @property string $Id
 * @property string $SKU
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
     * Identifies the MapId of inventory.
     *
     * @param string $MapId
     * @return $this
     */
    public function setMapId($MapId)
    {
        $this->values['MapId'] = $MapId;
        return $this;
    }

    /**
     * Identifies the SKU of inventory.
     *
     * @param string $SKU
     * @return $this
     */
    public function setSKU($SKU)
    {
        $this->values['SKU'] = $SKU;
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
     * Identifies the Condition of inventory.
     *
     * @param CatalogCondition $Condition
     * @return $this
     */
    public function setCondition(CatalogCondition $Condition)
    {
        $this->values['Condition'] = $Condition;
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


}
