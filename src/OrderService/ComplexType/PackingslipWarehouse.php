<?php


namespace Hkonnet\QuiptApi\OrderService\ComplexType;


use Hkonnet\QuiptApi\Common\ComplexType\Quantity;
use Hkonnet\QuiptApi\Common\ComplexType\Warehouse;
use Hkonnet\QuiptApi\OrderService\SimpleType\AcknowledgementStatus;
use Hkonnet\QuiptApi\OrderService\SimpleType\PackingSlipFormats;

/**
 * The descriptive data for the heaviness of an object.
 *
 * @author      Sadam Hussain <dami_sadam@yahoo.com>
 * @package     PHP Quipt API wrapper
 * @subpackage  Inventroy Service
 *
 * @property string $Data
 * @property PackingSlipFormats|int $Format
 * @property Warehouse Warehouse

 */

class PackingslipWarehouse extends \Hkonnet\QuiptApi\AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'PackingslipWarehouse';


    /**
     * Identifies the Data of inventory.
     *
     * @param string $Data
     * @return $this
     */
    public function setData($Data)
    {
        $this->values['Data'] = $Data;
        return $this;
    }


    /**
     * Identifies the Format of inventory.
     *
     * @param PackingSlipFormats|int $Format
     * @return $this
     */
    public function setFormat($Format)
    {
        $this->values['Format'] = $Format;
        return $this;
    }

    /**
     * Identifies the Warehouse of inventory.
     *
     * @param Warehouse $Warehouse
     * @return $this
     */
    public function setQuantity(Warehouse $Warehouse)
    {
        $this->values['Warehouse'] = $Warehouse;
        return $this;
    }


}
