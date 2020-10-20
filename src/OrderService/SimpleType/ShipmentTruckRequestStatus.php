<?php


namespace Hkonnet\QuiptApi\OrderService\SimpleType;


/**
 * ShipmentTruckRequestStatus
 *
 * @author      Sadam Hussain <dami_sadam@yahoo.com>
 * @package     PHP Quipt API wrapper
 * @subpackage  Inventory Service
 */
class ShipmentTruckRequestStatus extends \Hkonnet\QuiptApi\AbstractSimpleType
{
    const _New = 0;
    const _Open = 2;
    const _Accepted = 8;
    const _Rejected = 64;
    const _Canceled = 256;
}
