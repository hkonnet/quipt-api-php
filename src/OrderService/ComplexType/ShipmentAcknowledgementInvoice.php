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
 * @property string $InvoiceNumber
 * @property string $InvoicedAt
 */

class ShipmentAcknowledgementInvoice extends \Hkonnet\QuiptApi\AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'ShipmentAcknowledgementInvoice';


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
     * Identifies the InvoiceNumber of inventory.
     *
     * @param string $InvoiceNumber
     * @return $this
     */
    public function setInvoiceNumber($InvoiceNumber)
    {
        $this->values['InvoiceNumber'] = $InvoiceNumber;
        return $this;
    }



    /**
     * Identifies the InvoicedAt of inventory.
     *
     * @param string $InvoicedAt
     * @return $this
     */
    public function setInvoicedAt( $InvoicedAt)
    {
        $this->values['InvoicedAt'] = $InvoicedAt;
        return $this;
    }


}
