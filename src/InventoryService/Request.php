<?php
namespace Hkonnet\QuiptApi\InventoryService;
use Hkonnet\QuiptApi\Base;
use Hkonnet\QuiptApi\InventoryService\ComplexType\CreateOrUpdateInventoryRequest;
use Hkonnet\QuiptApi\InventoryService\ComplexType\CreateOrUpdateInventoryResponse;

/**
 * Request sends the SOAP call to the FedEx servers and returns the response
 *
 * @author      Sadam Hussain <dami_sadam@yahoo.com>
 * @package     PHP Quipt API wrapper
 * @subpackage  Inventroy Service
 */
class Request extends Base
{

    public $page_size=100;
    public $page_number=1;
    public $skus=[];
    public $ids=[];
    public $include=[];
    public function getInventory(){
        try {
            $query_params=[
            ];
            $response = $this->get($query_params, "/v2/inventory/physical/{$this->page_size}/{$this->page_number}");
            return $response;
        }catch (\Exception $e){
            throw $e;
        }

    }

    public function createInventory(CreateOrUpdateInventoryRequest $inventory_request,$returnStdClass = false){
        try {
            $response = $this->post($inventory_request->toArray(), "/v2/inventory/physical");

            if ($returnStdClass) {
                return $response;
            }

            $creat_or_update_reply=new CreateOrUpdateInventoryResponse();
            $creat_or_update_reply->populateFromStdClass($response);
            return $creat_or_update_reply;
        }catch (\Exception $e){
            throw $e;
        }

    }

}
