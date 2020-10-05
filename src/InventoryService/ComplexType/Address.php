<?php


namespace Hkonnet\QuiptApi\InventoryService\ComplexType;

/**
 * The descriptive data for the heaviness of an object.
 *
 * @author      Sadam Hussain <dami_sadam@yahoo.com>
 * @package     PHP Quipt API wrapper
 * @subpackage  Inventroy Service
 *
 * @property string $City
 * @property string $PostalCode
 * @property string $State
 * @property string $StreetLine1
 * @property string|null $StreetLine2
 * @property string|null $StreetLine3
 * @property Country $Country
 */

class Address extends \Hkonnet\QuiptApi\AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'Address';

    /**
     * Identifies the City of inventory.
     *
     * @param string $city
     * @return $this
     */
    public function setCity($city)
    {
        $this->values['City'] = $city;
        return $this;
    }

    /**
     * Identifies the  postal code of inventory
     *
     * @param string $postal_code
     * @return $this
     */
    public function setPostalCode($postal_code)
    {
        $this->values['PostalCode'] = $postal_code;
        return $this;
    }

    /**
     * Identifies the  state of inventory
     *
     * @param string $state
     * @return $this
     */
    public function setState($state)
    {
        $this->values['State'] = $state;
        return $this;
    }

    /**
     * Identifies the  street_line1 of inventory
     *
     * @param string $street_line1
     * @return $this
     */
    public function setStreetLine1($street_line1)
    {
        $this->values['StreetLine1'] = $street_line1;
        return $this;
    }

    /**
     * Identifies the  street_line2 of inventory
     *
     * @param string|null $street_line2
     * @return $this
     */
    public function setStreetLine2($street_line2)
    {
        $this->values['StreetLine2'] = $street_line2;
        return $this;
    }

    /**
     * Identifies the  street_line3 of inventory
     *
     * @param string|null $street_line3
     * @return $this
     */
    public function setStreetLine3($street_line3)
    {
        $this->values['StreetLine3'] = $street_line3;
        return $this;
    }

    /**
     * Identifies the  Country of inventory
     *
     * @param Country $country
     * @return $this
     */
    public function setCountry(Country $country)
    {
        $this->values['Country'] = $country;
        return $this;
    }
}
