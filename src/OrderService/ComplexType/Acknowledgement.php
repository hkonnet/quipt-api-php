<?php


namespace Hkonnet\QuiptApi\OrderService\ComplexType;


use Hkonnet\QuiptApi\Common\ComplexType\Quantity;
use Hkonnet\QuiptApi\OrderService\SimpleType\AcknowledgementStatus;

/**
 * The descriptive data for the heaviness of an object.
 *
 * @author      Sadam Hussain <dami_sadam@yahoo.com>
 * @package     PHP Quipt API wrapper
 * @subpackage  Inventroy Service
 *
 * @property string $Id
 * @property AcknowledgementStatus|int $Status
 * @property string $AckAt
 * @property Quantity $Quantity
 */

class Acknowledgement extends \Hkonnet\QuiptApi\AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'Acknowledgement';


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
     * Identifies the AckAt of inventory.
     *
     * @param string $AckAt
     * @return $this
     */
    public function setAckAt($AckAt)
    {
        $this->values['AckAt'] = $AckAt;
        return $this;
    }

    /**
     * Identifies the Status of inventory.
     *
     * @param AcknowledgementStatus|int $Status
     * @return $this
     */
    public function setStatus($Status)
    {
        $this->values['Status'] = $Status;
        return $this;
    }

    /**
     * Identifies the Quantity of inventory.
     *
     * @param Quantity $Quantity
     * @return $this
     */
    public function setQuantity(Quantity $Quantity)
    {
        $this->values['Quantity'] = $Quantity;
        return $this;
    }


}
