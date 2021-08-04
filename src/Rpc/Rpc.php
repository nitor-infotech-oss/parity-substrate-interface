<?php

namespace neha0921\SubstrateInterfacePackage\Rpc;

use neha0921\SubstrateInterfacePackage\ApiHandler;

class Rpc 
{
    const RPC_PREFIX = 'rpc';
    public $system;
    private $a;
    public function __construct (ApiHandler $a){
       
        $this->system = new System($a);
    }
   
    public function get_system() {
        return ( $this->system );
    }


    public function methods() {
        $response = json_decode($this->apiHandler->APIHandler(Rpc::RPC_PREFIX . __FUNCTION__));
        return $response->result;
    }
     

}