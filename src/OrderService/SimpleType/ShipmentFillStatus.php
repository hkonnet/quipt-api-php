<?php


namespace Hkonnet\QuiptApi\OrderService\SimpleType;


/**
 * ShipmentFillStatus
 *
 * @author      Sadam Hussain <dami_sadam@yahoo.com>
 * @package     PHP Quipt API wrapper
 * @subpackage  Inventory Service
 */
class ShipmentFillStatus extends \Hkonnet\QuiptApi\AbstractSimpleType
{
    const _None = 0, _Ordered = 2, _Shipped = 8, _Canceled = 64, _ReturnRequested = 256, _Returned = 1024;
}
