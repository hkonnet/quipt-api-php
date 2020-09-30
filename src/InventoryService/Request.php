<?php
namespace Hkonnet\QuiptApi\InventoryService;
use Hkonnet\QuiptApi\Base;

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

}
