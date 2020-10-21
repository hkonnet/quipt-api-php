<?php


namespace Hkonnet\QuiptApi\OrderService\ComplexType;


use Hkonnet\QuiptApi\Common\ComplexType\CatalogCondition;
use Hkonnet\QuiptApi\Common\ComplexType\Currency;
use Hkonnet\QuiptApi\Common\ComplexType\Dimensions;
use Hkonnet\QuiptApi\Common\ComplexType\Quantity;
use Hkonnet\QuiptApi\Common\ComplexType\Weight;


/**
 * The descriptive data for the heaviness of an object.
 *
 * @author      Sadam Hussain <dami_sadam@yahoo.com>
 * @package     PHP Quipt API wrapper
 * @subpackage  Inventroy Service
 *

 *@property string $Id
 * @property Item $Item
 * @property Currency $Price
 */

class SubstituteLine extends \Hkonnet\QuiptApi\AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'SubstituteLine';


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





}
