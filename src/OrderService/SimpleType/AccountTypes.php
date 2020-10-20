<?php


namespace Hkonnet\QuiptApi\OrderService\SimpleType;


/**
 * AccountTypes
 *
 * @author      Sadam Hussain <dami_sadam@yahoo.com>
 * @package     PHP Quipt API wrapper
 * @subpackage  Inventory Service
 */
class AccountTypes extends \Hkonnet\QuiptApi\AbstractSimpleType
{
    const _None = 0, _ThirdParty = 1, _Recipient = 2, _Prepaid = 3;
}
