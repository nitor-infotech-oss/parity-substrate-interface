<?php

namespace nitorInfoTechOss\SubstrateInterfacePackage\Rpc;

use nitorInfoTechOss\SubstrateInterfacePackage\SubstrateInterface;

class Rpc 
{
    const RPC_PREFIX = 'rpc_';
    public $system;
    private $apiHandler;
    public function __construct (SubstrateInterface $apiHandler){
        $this->apiHandler = $apiHandler;
        $this->system = new System($apiHandler);
    }
   
    public function get_system() {
        return ( $this->system );
    }


    public function methods() {

        $response = json_decode($this->apiHandler->APIHandler(Rpc::RPC_PREFIX . __FUNCTION__));
        $result = ($response->result) ? ['status' => 1, 'data' => $response->result] : ['status' => 0, 'data' => $response->error];
        return json_encode($result);
    }
     

}