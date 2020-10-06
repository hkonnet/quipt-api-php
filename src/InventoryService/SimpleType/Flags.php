<?php


namespace Hkonnet\QuiptApi\InventoryService\SimpleType;


/**
 * Flags
 *
 * @author      Sadam Hussain <dami_sadam@yahoo.com>
 * @package     PHP Quipt API wrapper
 * @subpackage  Inventory Service
 */
class Flags extends \Hkonnet\QuiptApi\AbstractSimpleType
{
    const _AllowContentUpdate = 2;
    const _AttemptPublish = 8;
    const _AutoMatchByUPC = 32;
    const _AutoMatchByMPNAndManufacturer= 64;
    const _BuildTitleAndFeatures= 256;
}
