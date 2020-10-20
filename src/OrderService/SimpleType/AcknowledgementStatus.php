<?php


namespace Hkonnet\QuiptApi\OrderService\SimpleType;


/**
 * AcknowledgementStatus
 *
 * @author      Sadam Hussain <dami_sadam@yahoo.com>
 * @package     PHP Quipt API wrapper
 * @subpackage  Inventory Service
 */
class AcknowledgementStatus extends \Hkonnet\QuiptApi\AbstractSimpleType
{
    const _None = 0;
    const _Accepted = 1;
    const _Rejected = 2;
}
