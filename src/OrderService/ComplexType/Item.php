<?php


namespace Hkonnet\QuiptApi\OrderService\ComplexType;


use Hkonnet\QuiptApi\Common\ComplexType\CatalogCondition;
use Hkonnet\QuiptApi\Common\ComplexType\Dimensions;
use Hkonnet\QuiptApi\Common\ComplexType\Weight;


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
 * @property CatalogCondition $Condition
 * @property Weight $Weight
 * @property Dimensions $Dimensions
 */

class Item extends \Hkonnet\QuiptApi\AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'Item';


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
