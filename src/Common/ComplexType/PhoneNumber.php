<?php


namespace Hkonnet\QuiptApi\Common\ComplexType;

use Hkonnet\QuiptApi\Common\SimpleType\WeightUnits;

/**
 * The descriptive data for the heaviness of an object.
 *
 * @author      Sadam Hussain <dami_sadam@yahoo.com>
 * @package     PHP Quipt API wrapper
 * @subpackage  Inventroy Service
 *
 * @property string $CountryISO
 * @property string $Number
 */
class PhoneNumber extends \Hkonnet\QuiptApi\AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'PhoneNumber';

    /**
     * Identifies the unit of measure associated with a weight value.
     *
     * @param string $country_iso
     * @return $this
     */
    public function setCountryISO($country_iso)
    {
        $this->values['CountryISO'] = $country_iso;
        return $this;
    }

    /**
     * Identifies the weight value of a package/shipment.
     *
     * @param string $number
     * @return $this
     */
    public function setNumber($number)
    {
        $this->values['Number'] = $number;
        return $this;
    }
}
