<?php


namespace Hkonnet\QuiptApi\InventoryService\ComplexType;

use Hkonnet\QuiptApi\InventoryService\SimpleType\CatalogSKUType;
use Hkonnet\QuiptApi\InventoryService\SimpleType\QuantityUnits;
use Hkonnet\QuiptApi\InventoryService\SimpleType\WeightUnits;

/**
 * The descriptive data for the heaviness of an object.
 *
 * @author      Sadam Hussain <dami_sadam@yahoo.com>
 * @package     PHP Quipt API wrapper
 * @subpackage  Inventroy Service
 *
 * @property CatalogSKUType|integer $Type
 * @property string $Value
 */
class CatalogSKU extends \Hkonnet\QuiptApi\AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'CatalogSKU';

    /**
     * Identifies the SKU Type
     *
     * @param CatalogSKUType|integer $type
     * @return $this
     */
    public function setType($type)
    {
        $this->values['Type'] = $type;
        return $this;
    }

    /**
     * Identifies the  value of a package/shipment.
     *
     * @param string $value
     * @return $this
     */
    public function setValue($value)
    {
        $this->values['Value'] = $value;
        return $this;
    }
}
