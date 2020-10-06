<?php


namespace Hkonnet\QuiptApi\InventoryService\ComplexType;

use Hkonnet\QuiptApi\InventoryService\SimpleType\WeightUnits;

/**
 * The descriptive data for the heaviness of an object.
 *
 * @author      Sadam Hussain <dami_sadam@yahoo.com>
 * @package     PHP Quipt API wrapper
 * @subpackage  Inventroy Service
 *
 * @property Currency $MSRP
 * @property Currency $SRP
 * @property string $MSRPURL
 */
class CatalogPricing extends \Hkonnet\QuiptApi\AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'Pricing';

    /**
     * Identifies the MSRP of measure associated with a weight value.
     *
     * @param Currency $MSRP
     * @return $this
     */
    public function setMSRP(Currency $MSRP)
    {
        $this->values['MSRP'] = $MSRP;
        return $this;
    }
    /**
     * Identifies the SRP of measure associated with a weight value.
     *
     * @param Currency $SRP
     * @return $this
     */
    public function setSRP(Currency $SRP)
    {
        $this->values['SRP'] = $SRP;
        return $this;
    }

    /**
     * Identifies the MSRPURL value of a package/shipment.
     *
     * @param string $MSRPURL
     * @return $this
     */
    public function setMSRPURL($MSRPURL)
    {
        $this->values['MSRPURL'] = $MSRPURL;
        return $this;
    }
}
