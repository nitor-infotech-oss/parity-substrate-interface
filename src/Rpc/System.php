<?php

namespace nitorInfoTechOss\SubstrateInterfacePackage\Rpc;

use nitorInfoTechOss\SubstrateInterfacePackage\SubstrateInterface;

class System
{
    const SYSTEM_PREFIX = 'system_';

    public $apiHandler;

    private $a;
    public function __construct(SubstrateInterface $apiHandler)
    {
        $this->apiHandler = $apiHandler;
    }

    /* system_accountNextIndex endpoint API*/

    public function accountNextIndex($account_address)
    {
        $response = json_decode($this->apiHandler->APIHandler(System::SYSTEM_PREFIX . __FUNCTION__, array($account_address)));
        $result = ($response->result) ? ['status' => true, 'data' => $response->result] : ['status' => false, 'data' => $response->error];
        return json_encode($result);
    }

    /* system_chain endpoint API*/

    public function chain()
    {
        $response = json_decode($this->apiHandler->APIHandler(System::SYSTEM_PREFIX . __FUNCTION__));
        $result = ($response->result) ? ['status' => 1, 'data' => $response->result] : ['status' => 0, 'data' => $response->error];
        return json_encode($result);
    }

    /* system_chainType endpoint API*/

    public function chainType()
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

    /* system_localListenAddresses endpoint API*/

    public function localListenAddresses()
    {
        $response = json_decode($this->apiHandler->APIHandler(System::SYSTEM_PREFIX . __FUNCTION__));
        $result = ($response->result) ? ['status' => 1, 'data' => $response->result] : ['status' => 0, 'data' => $response->error];
        return json_encode($result);
    }
    /* system_localPeerId endpoint API*/

    public function localPeerId()
    {
        $response = json_decode($this->apiHandler->APIHandler(System::SYSTEM_PREFIX . __FUNCTION__));
        $result = ($response->result) ? ['status' => 1, 'data' => $response->result] : ['status' => 0, 'data' => $response->error];
        return json_encode($result);
    }

    /* system_name endpoint API*/

    public function name()
    {
        $response = json_decode($this->apiHandler->APIHandler(System::SYSTEM_PREFIX . __FUNCTION__));
        $result = ($response->result) ? ['status' => 1, 'data' => $response->result] : ['status' => 0, 'data' => $response->error];
        return json_encode($result);
    }

    /* system_nodeRoles endpoint API*/

    public function nodeRoles()
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
        // print_r($response->result->ss58Format);die;
        $result = ($response->result) ? ['status' => 1, 'data' => $response->result] : ['status' => 0, 'data' => $response->error];
        return json_encode($result);
    }

    /* system_reservedPeers endpoint API*/

    public function reservedPeers()
    {
        $response = json_decode($this->apiHandler->APIHandler(System::SYSTEM_PREFIX . __FUNCTION__));
        $result = ($response->result) ? ['status' => 1, 'data' => $response->result] : ['status' => 0, 'data' => $response->error];
        return json_encode($result);
    }

    /* system_syncState endpoint API*/

    public function syncState()
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
}
