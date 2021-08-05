<?php

namespace nitorInfoTechOss\SubstrateInterfacePackage\Rpc;

use nitorInfoTechOss\SubstrateInterfacePackage\SubstrateInterface;

class System
{
    const SYSTEM_PREFIX = 'system_';

    public $apiHandler;

    private $a;
    public function __construct (SubstrateInterface $apiHandler){
        $this->apiHandler = $apiHandler;
    }

    /* system_name endpoint API*/

    public function name()
    {
        $response = json_decode($this->apiHandler->APIHandler(System::SYSTEM_PREFIX . __FUNCTION__));
        $result = ($response->result) ? ['status' => 1, 'data' => $response->result] : ['status' => 0, 'data' => $response->error];
        return json_encode($result);
    }

    /* system_chain endpoint API*/

    public function chain()
    {
        $response = json_decode($this->apiHandler->APIHandler(System::SYSTEM_PREFIX . __FUNCTION__));
        $result = ($response->result) ? ['status' => 1, 'data' => $response->result] : ['status' => 0, 'data' => $response->error];
        return json_encode($result);
    }

    /* system_health endpoint API*/

    public function health()
    {
        $response = json_decode($this->apiHandler->APIHandler(System::SYSTEM_PREFIX . __FUNCTION__));
        $result = ($response->result) ? ['status' => 1, 'data' => $response->result] : ['status' => 0, 'data' => $response->error];
        return json_encode($result);
    }

    /* system_version endpoint API*/

    public function version()
    {
        $response = json_decode($this->apiHandler->APIHandler(System::SYSTEM_PREFIX . __FUNCTION__));
        $result = ($response->result) ? ['status' => 1, 'data' => $response->result] : ['status' => 0, 'data' => $response->error];
        return json_encode($result);
    }
    /* system_peers endpoint API*/

    public function peers()
    {
        $response = json_decode($this->apiHandler->APIHandler(System::SYSTEM_PREFIX . __FUNCTION__));
        $result = ($response->result) ? ['status' => 1, 'data' => $response->result] : ['status' => 0, 'data' => $response->error];
        return json_encode($result);
    }
    /* system_properties endpoint API*/

    public function properties()
    {
        $response = json_decode($this->apiHandler->APIHandler(System::SYSTEM_PREFIX . __FUNCTION__));
        $result = ($response->result) ? ['status' => 1, 'data' => $response->result] : ['status' => 0, 'data' => $response->error];
        return json_encode($result);
    }
    
}
