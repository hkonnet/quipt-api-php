<?php


namespace Hkonnet\QuiptApi\InventoryService\ComplexType;

use Hkonnet\QuiptApi\InventoryService\SimpleType\DimensionUnits;
use Hkonnet\QuiptApi\InventoryService\SimpleType\WeightUnits;

/**
 * The descriptive data for the heaviness of an object.
 *
 * @author      Sadam Hussain <dami_sadam@yahoo.com>
 * @package     PHP Quipt API wrapper
 * @subpackage  Inventroy Service
 *
 * @property PhoneNumber $PhoneNumber
 * @property string $Duration
 * @property string $Email
 * @property integer $Provider
 * @property string|null $URL
 */
class Warranty extends \Hkonnet\QuiptApi\AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'Warranty';

    /**
     * Warranty Duration.
     *
     * @param string $duration
     * @return $this
     */
    public function setDuration($duration)
    {
        $this->values['Duration'] = $duration;
        return $this;
    }

    /**
     * Warranty Email
     *
     * @param string $email
     * @return $this
     */
    public function setEmail($email)
    {
        $this->values['Email'] = $email;
        return $this;
    }
    /**
     * Warranty Provider
     *
     * @param string $provider
     * @return $this
     */
    public function setProvider($provider)
    {
        $this->values['Provider'] = $provider;
        return $this;
    }/**
     * Warranty URL
     *
     * @param string|null $url
     * @return $this
     */
    public function setURL($url)
    {
        $this->values['URL'] = $url;
        return $this;
    }

    /**
     * Warranty Phone number
     *
     * @param PhoneNumber $phone_number
     * @return $this
     */
    public function setUserCredential(PhoneNumber $phone_number)
    {
        $this->values['UserCredential'] = $phone_number;
        return $this;
    }
}