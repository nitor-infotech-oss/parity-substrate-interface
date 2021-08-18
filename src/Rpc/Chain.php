<?php

namespace nitorInfoTechOss\SubstrateInterfacePackage\Rpc;

use nitorInfoTechOss\SubstrateInterfacePackage\SubstrateInterface;

class Chain
{
    const CHAIN_PREFIX = 'chain_';

    public $apiHandler;

    public function __construct(SubstrateInterface $apiHandler)
    {
        $this->apiHandler = $apiHandler;
    }


    /* chain_getBlock endpoint API*/

    public function getBlock()
    {
        $response = json_decode($this->apiHandler->APIHandler(Chain::CHAIN_PREFIX . __FUNCTION__));
        $result = ($response->result) ? ['status' => true, 'data' => $response->result] : ['status' => false, 'data' => $response->error];
        return json_encode($result);
    }

    /* chain_getBlockHash endpoint API*/

    public function getBlockHash()
    {
        $response = json_decode($this->apiHandler->APIHandler(Chain::CHAIN_PREFIX . __FUNCTION__));
        $result = ($response->result) ? ['status' => true, 'data' => $response->result] : ['status' => false, 'data' => $response->error];
        return json_encode($result);
    }
    
    /* chain_getFinalisedHead endpoint API*/

    public function getFinalisedHead()
    {
        $response = json_decode($this->apiHandler->APIHandler(Chain::CHAIN_PREFIX . __FUNCTION__));
        $result = ($response->result) ? ['status' => true, 'data' => $response->result] : ['status' => false, 'data' => $response->error];
        return json_encode($result);
    }

    /* chain_getFinalizedHead endpoint API*/

    public function getFinalizedHead()
    {
        $response = json_decode($this->apiHandler->APIHandler(Chain::CHAIN_PREFIX . __FUNCTION__));
        $result = ($response->result) ? ['status' => true, 'data' => $response->result] : ['status' => false, 'data' => $response->error];
        return json_encode($result);
    }

    /* chain_getHead endpoint API*/

    public function getHead()
    {
        $response = json_decode($this->apiHandler->APIHandler(Chain::CHAIN_PREFIX . __FUNCTION__));
        $result = ($response->result) ? ['status' => true, 'data' => $response->result] : ['status' => false, 'data' => $response->error];
        return json_encode($result);
    }

    /* chain_getHeader endpoint API*/

    public function getHeader()
    {
        $response = json_decode($this->apiHandler->APIHandler(Chain::CHAIN_PREFIX . __FUNCTION__));
        $result = ($response->result) ? ['status' => true, 'data' => $response->result] : ['status' => false, 'data' => $response->error];
        return json_encode($result);
    }

    /* chain_getRuntimeVersion endpoint API*/

    public function getRuntimeVersion()
    {
        $response = json_decode($this->apiHandler->APIHandler(Chain::CHAIN_PREFIX . __FUNCTION__));
        $result = ($response->result) ? ['status' => true, 'data' => $response->result] : ['status' => false, 'data' => $response->error];
        return json_encode($result);
    }

    /* chain_subscribeAllHeads endpoint API*/

    public function subscribeAllHeads()
    {
        $response = json_decode($this->apiHandler->APIHandler(Chain::CHAIN_PREFIX . __FUNCTION__));
        $result = ($response->result) ? ['status' => true, 'data' => $response->result] : ['status' => false, 'data' => $response->error];
        return json_encode($result);
    }

    /* chain_subscribeFinalisedHeads endpoint API*/

    public function subscribeFinalisedHeads()
    {
        $response = json_decode($this->apiHandler->APIHandler(Chain::CHAIN_PREFIX . __FUNCTION__));
        $result = ($response->result) ? ['status' => true, 'data' => $response->result] : ['status' => false, 'data' => $response->error];
        return json_encode($result);
    }

    /* chain_subscribeFinalizedHeads endpoint API*/

    public function subscribeFinalizedHeads()
    {
        $response = json_decode($this->apiHandler->APIHandler(Chain::CHAIN_PREFIX . __FUNCTION__));
        $result = ($response->result) ? ['status' => true, 'data' => $response->result] : ['status' => false, 'data' => $response->error];
        return json_encode($result);
    }

    /* chain_subscribeNewHead endpoint API*/

    public function subscribeNewHead()
    {
        $response = json_decode($this->apiHandler->APIHandler(Chain::CHAIN_PREFIX . __FUNCTION__));
        $result = ($response->result) ? ['status' => true, 'data' => $response->result] : ['status' => false, 'data' => $response->error];
        return json_encode($result);
    }

    /* chain_subscribeNewHead endpoint API*/

    public function subscribeNewHeads()
    {
        $response = json_decode($this->apiHandler->APIHandler(Chain::CHAIN_PREFIX . __FUNCTION__));
        $result = ($response->result) ? ['status' => true, 'data' => $response->result] : ['status' => false, 'data' => $response->error];
        return json_encode($result);
    }

}
