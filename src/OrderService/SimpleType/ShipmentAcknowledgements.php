<?php


namespace Hkonnet\QuiptApi\OrderService\SimpleType;


/**
 * ShipmentAcknowledgements
 *
 * @author      Sadam Hussain <dami_sadam@yahoo.com>
 * @package     PHP Quipt API wrapper
 * @subpackage  Inventory Service
 */
class ShipmentAcknowledgements extends \Hkonnet\QuiptApi\AbstractSimpleType
{
    const _Received = 0, _Printed = 1, _AwaitingPickup = 2, _PickedUp = 3, _Cancel = 4, _Invoice = 5;
}
