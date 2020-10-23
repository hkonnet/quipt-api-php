<?php


namespace Hkonnet\QuiptApi\OrderService\ComplexType;


use Hkonnet\QuiptApi\Common\ComplexType\InventorySerial;
use Hkonnet\QuiptApi\Common\ComplexType\Quantity;
use Hkonnet\QuiptApi\Common\ComplexType\Warehouse;
use Hkonnet\QuiptApi\OrderService\SimpleType\PackingSlipFormats;

/**
 * The descriptive data for the heaviness of an object.
 *
 * @author      Sadam Hussain <dami_sadam@yahoo.com>
 * @package     PHP Quipt API wrapper
 * @subpackage  Inventroy Service
 *
 * @property array $PerWarehouse
 * @property string $Data
 * @property PackingSlipFormats|int $Format
 */

class Packingslip extends \Hkonnet\QuiptApi\AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'Packingslip';


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
     * Identifies the PerWarehouse of inventory
     *
     * @param array $PerWarehouse
     * @return $this
     */
    public function setPerWarehouse($PerWarehouse)
    {

        $count=array_filter($PerWarehouse, function ($obj) {
            return !($obj instanceof PackingslipWarehouse);
        }
        );
        if (count($count) > 0){
            throw new \Exception('an array of PackingslipWarehouse must be provided');
        }
        $this->values['PerWarehouse'] = $PerWarehouse;
        return $this;
    }





}
