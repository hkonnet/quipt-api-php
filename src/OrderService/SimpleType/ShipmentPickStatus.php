<?php


namespace Hkonnet\QuiptApi\OrderService\SimpleType;


/**
 * ShipmentPickStatus
 *
 * @author      Sadam Hussain <dami_sadam@yahoo.com>
 * @package     PHP Quipt API wrapper
 * @subpackage  Inventory Service
 */
class ShipmentPickStatus extends \Hkonnet\QuiptApi\AbstractSimpleType
{
    const _None = 0, _Picking = 2, _Picked = 8, _CancelationRequested = 64, _CancelConfirmed = 256, _Canceled = 1024;
}
