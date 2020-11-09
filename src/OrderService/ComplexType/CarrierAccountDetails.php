<?php


namespace Hkonnet\QuiptApi\OrderService\ComplexType;


use Hkonnet\QuiptApi\Common\ComplexType\Country;
use Hkonnet\QuiptApi\Common\ComplexType\InventorySerial;
use Hkonnet\QuiptApi\Common\ComplexType\Quantity;
use Hkonnet\QuiptApi\Common\ComplexType\Warehouse;
use Hkonnet\QuiptApi\OrderService\SimpleType\AccountTypes;
use Hkonnet\QuiptApi\OrderService\SimpleType\PackingSlipFormats;

/**
 * The descriptive data for the heaviness of an object.
 *
 * @author      Sadam Hussain <dami_sadam@yahoo.com>
 * @package     PHP Quipt API wrapper
 * @subpackage  Inventroy Service

 * @property string $AccountNumber
 * @property string $BillToPostalCode
 * @property Country $BillToCountry
 * @property AccountTypes|int $AccountType
 */

class CarrierAccountDetails extends \Hkonnet\QuiptApi\AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'CarrierAccountDetails';


    /**
     * Identifies the AccountNumber of inventory.
     *
     * @param string $AccountNumber
     * @return $this
     */
    public function setAccountNumber($AccountNumber)
    {
        $this->values['AccountNumber'] = $AccountNumber;
        return $this;
    }

    /**
     * Identifies the BillToPostalCode of inventory.
     *
     * @param string $BillToPostalCode
     * @return $this
     */
    public function setBillToPostalCode($BillToPostalCode)
    {
        $this->values['BillToPostalCode'] = $BillToPostalCode;
        return $this;
    }


    /**
     * Identifies the BillToCountry of inventory.
     *
     * @param Country $BillToCountry
     * @return $this
     */
    public function setBillToCountry(Country $BillToCountry)
    {
        $this->values['BillToCountry'] = $BillToCountry;
        return $this;
    }

    /**
     * Identifies the AccountType of inventory.
     *
     * @param AccountTypes|int $AccountType
     * @return $this
     */
    public function setAccountType($AccountType)
    {
        $this->values['AccountType'] = $AccountType;
        return $this;
    }


}
