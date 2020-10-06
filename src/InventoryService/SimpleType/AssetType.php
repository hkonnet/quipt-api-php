<?php


namespace Hkonnet\QuiptApi\InventoryService\SimpleType;


/**
 * AssetType
 *
 * @author      Sadam Hussain <dami_sadam@yahoo.com>
 * @package     PHP Quipt API wrapper
 * @subpackage  Inventory Service
 */
class AssetType extends \Hkonnet\QuiptApi\AbstractSimpleType
{
    const _Image= 0;
    const _Document= 1;
    const _ShippingDocument= 2;
    const _Unknown= 100;

}
