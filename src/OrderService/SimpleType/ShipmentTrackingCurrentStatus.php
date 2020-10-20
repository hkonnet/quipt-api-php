<?php


namespace Hkonnet\QuiptApi\OrderService\SimpleType;


/**
 * ShipmentTrackingCurrentStatus
 *
 * @author      Sadam Hussain <dami_sadam@yahoo.com>
 * @package     PHP Quipt API wrapper
 * @subpackage  Inventory Service
 */
class ShipmentTrackingCurrentStatus extends \Hkonnet\QuiptApi\AbstractSimpleType
{
    const _None = 0, _Canceled = 1, _Invalid = 2, _LabelGenerated = 8, _InRoute = 1024, _Delivered = 8192, _Exception = 32768, _ReturnedToSender = 65536;
}
