<?php


namespace Hkonnet\QuiptApi\OrderService\ComplexType;

use Hkonnet\QuiptApi\Common\ComplexType\Country;
use Hkonnet\QuiptApi\Common\ComplexType\PhoneNumber;

/**
 * The descriptive data for the heaviness of an object.
 *
 * @author      Sadam Hussain <dami_sadam@yahoo.com>
 * @package     PHP Quipt API wrapper
 * @subpackage  Inventroy Service
 *
 * @property PhoneNumber $PhoneNumber
 * @property PhoneNumber $FaxNumber
 * @property string $Company
 * @property string $City
 * @property string $PostalCode
 * @property string $State
 * @property string $StreetLine1
 * @property string $StreetLine2
 * @property string $StreetLine3
 * @property Country $Country
 */

class RemittanceAddress extends \Hkonnet\QuiptApi\AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'RemittanceAddress';

    /**
     * Identifies the PhoneNumber of inventory.
     *
     * @param PhoneNumber $PhoneNumber
     * @return $this
     */
    public function setPhoneNumber(PhoneNumber $PhoneNumber)
    {
        $this->values['PhoneNumber'] = $PhoneNumber;
        return $this;
    }

    /**
     * Identifies the FaxNumber of inventory.
     *
     * @param PhoneNumber $FaxNumber
     * @return $this
     */
    public function setFaxNumber(PhoneNumber $FaxNumber)
    {
        $this->values['FaxNumber'] = $FaxNumber;
        return $this;
    }

    /**
     * Identifies the Country of inventory.
     *
     * @param Country $Country
     * @return $this
     */
    public function setCountry(Country $Country)
    {
        $this->values['Country'] = $Country;
        return $this;
    }

    /**
     * Identifies the Company of inventory.
     *
     * @param string $Company
     * @return $this
     */
    public function setCompany($Company)
    {
        $this->values['Company'] = $Company;
        return $this;
    }



    /**
     * Identifies the State of inventory.
     *
     * @param string $State
     * @return $this
     */
    public function setState($State)
    {
        $this->values['State'] = $State;
        return $this;
    }

    /**
     * Identifies the StreetLine1 of inventory.
     *
     * @param string $StreetLine1
     * @return $this
     */
    public function setStreetLine1($StreetLine1)
    {
        $this->values['StreetLine1'] = $StreetLine1;
        return $this;
    }

    /**
     * Identifies the City of inventory.
     *
     * @param string $City
     * @return $this
     */
    public function setCity($City)
    {
        $this->values['City'] = $City;
        return $this;
    }

    /**
     * Identifies the StreetLine3 of inventory.
     *
     * @param string $StreetLine3
     * @return $this
     */
    public function setStreetLine3($StreetLine3)
    {
        $this->values['StreetLine3'] = $StreetLine3;
        return $this;
    }


  /**
     * Identifies the StreetLine2 of inventory.
     *
     * @param string $StreetLine2
     * @return $this
     */
    public function setStreetLine2($StreetLine2)
    {
        $this->values['StreetLine2'] = $StreetLine2;
        return $this;
    }

    /**
     * Identifies the PostalCode of inventory.
     *
     * @param string $PostalCode
     * @return $this
     */
    public function setPostalCode($PostalCode)
    {
        $this->values['PostalCode'] = $PostalCode;
        return $this;
    }
}
