<?php

namespace neha0921\SubstrateInterfacePackage\Rpc;

use neha0921\SubstrateInterfacePackage\ApiHandler;

class System
{
    const SYSTEM_PREFIX = 'system_';

    public $apiHandler;

    private $a;
    public function __construct (ApiHandler $apiHandler){
        $this->apiHandler = $apiHandler;
    }

    /* system_name endpoint API*/

    public function name()
    {
        $response = json_decode($this->apiHandler->APIHandler(System::SYSTEM_PREFIX . __FUNCTION__));
        return $response->result;
    }

    /* system_name endpoint API*/

    public function chain()
    {
        $response = json_decode($this->apiHandler->APIHandler(System::SYSTEM_PREFIX . __FUNCTION__));
        return $response->result;
    }

    /* system_name endpoint API*/

    public function health()
    {
        $response = json_decode($this->apiHandler->APIHandler(System::SYSTEM_PREFIX . __FUNCTION__));
        return $response->result;
    }
}
