<?php

namespace nitorInfoTechOss\SubstrateInterfacePackage\Rpc;

use nitorInfoTechOss\SubstrateInterfacePackage\SubstrateInterface;

class Keypair
{
    const KEYPAIR_PREFIX = 'keypair_';

    public $apiHandler;

    public function __construct(SubstrateInterface $apiHandler)
    {
        $this->apiHandler = $apiHandler;
    }


    /* keypair_create endpoint API*/

    public function create(array $requestParameter)
    {
        $response = json_decode($this->apiHandler->APIHandler(Keypair::KEYPAIR_PREFIX . __FUNCTION__, $requestParameter));
        $result = ($response->result) ? ['status' => true, 'data' => $response->result] : ['status' => false, 'data' => $response->error];
        return json_encode($result);
    }

    /* keypair_inspect endpoint API*/

    public function inspect(array $requestParameter)
    {
        $response = json_decode($this->apiHandler->APIHandler(Keypair::KEYPAIR_PREFIX . __FUNCTION__, $requestParameter));
        $result = ($response->result) ? ['status' => true, 'data' => $response->result] : ['status' => false, 'data' => $response->error];
        return json_encode($result);
    }

    
    /* keypair_sign endpoint API*/

    public function sign(array $requestParameter)
    {
        $response = json_decode($this->apiHandler->APIHandler(Keypair::KEYPAIR_PREFIX . __FUNCTION__, $requestParameter));
        $result = ($response->result) ? ['status' => true, 'data' => $response->result] : ['status' => false, 'data' => $response->error];
        return json_encode($result);
    }

    /* keypair_verify endpoint API*/

    public function verify(array $requestParameter)
    {
        $response = json_decode($this->apiHandler->APIHandler(Keypair::KEYPAIR_PREFIX . __FUNCTION__, $requestParameter));
        $result = ($response->result) ? ['status' => true, 'data' => $response->result] : ['status' => false, 'data' => $response->error];
        return json_encode($result);
    }


}
