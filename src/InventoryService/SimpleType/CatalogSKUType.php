<?php


namespace Hkonnet\QuiptApi\InventoryService\SimpleType;


/**
 * ConditionCodes
 *
 * @author      Sadam Hussain <dami_sadam@yahoo.com>
 * @package     PHP Quipt API wrapper
 * @subpackage  Inventory Service
 */
class CatalogSKUType extends \Hkonnet\QuiptApi\AbstractSimpleType
{
    const _None= 0;
    const _MPN= 5;
    const _UPC= 10;
    const _ISBN= 15;
    const _GTIN= 20;
    const _Buycom= 25;
    const _ASIN= 30;

}
