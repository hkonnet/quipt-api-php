<?php


namespace Hkonnet\QuiptApi\OrderService\SimpleType;


/**
 * OrderStatus
 *
 * @author      Sadam Hussain <dami_sadam@yahoo.com>
 * @package     PHP Quipt API wrapper
 * @subpackage  Inventory Service
 */
class OrderStatus extends \Hkonnet\QuiptApi\AbstractSimpleType
{
    const _ActionRequired = 1;
    const _Pending = 2;
    const _Ordered = 4;
    const _Shipped = 8;
    const _Canceled = 16;
}
