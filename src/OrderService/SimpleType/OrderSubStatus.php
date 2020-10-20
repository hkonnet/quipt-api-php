<?php


namespace Hkonnet\QuiptApi\OrderService\SimpleType;


/**
 * OrderSubStatus
 *
 * @author      Sadam Hussain <dami_sadam@yahoo.com>
 * @package     PHP Quipt API wrapper
 * @subpackage  Inventory Service
 */
class OrderSubStatus extends \Hkonnet\QuiptApi\AbstractSimpleType
{
    const _None = 0;
    const _ValidateSKUs= 5;
    const _DuplicateCheck = 10;
    const _AllocateInventory = 20;
    const _ValidatePricing= 30;
    const _ValidateAddress= 40;
    const _ValidateCarrierMethod= 50;
    const _ExecuteCustomCode= 60;
    const _ValidatePayment= 70;
    const _Hold= 80;
    const _MoveToOpen= 84;
    const _LateBackOrder= 85;
    const _LateShipment = 89;
    const _LatePickup = 90;
    const _SoftCancel = 95;
    const _ShipmentException = 100;
    const _CancelationRequested = 105;
    const _CaptureFailed = 110;
    const _RefundFailed = 115;
    const _InvalidTrackingNumber = 120;
}
