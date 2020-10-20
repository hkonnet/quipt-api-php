<?php


namespace Hkonnet\QuiptApi\OrderService\SimpleType;


/**
 * ShipmentStatus
 *
 * @author      Sadam Hussain <dami_sadam@yahoo.com>
 * @package     PHP Quipt API wrapper
 * @subpackage  Inventory Service
 */
class ShipmentStatus extends \Hkonnet\QuiptApi\AbstractSimpleType
{
    const _Pending = 2, _New = 32, _Ready = 128, _Generating = 512, _Generated = 1024, _Exported = 4096, _Printed = 16384, _PickupRequested = 131072, _PickedUp = 524288, _Error = 2097152, _Canceled = 8388608;
}
