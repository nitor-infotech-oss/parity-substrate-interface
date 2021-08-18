<?php

namespace nitorInfoTechOss\SubstrateInterfacePackage\Rpc;

use nitorInfoTechOss\SubstrateInterfacePackage\SubstrateInterface;

class Grandpa
{
    const GRANDPA_PREFIX = 'grandpa_';

    public $apiHandler;

    public function __construct(SubstrateInterface $apiHandler)
    {
        $this->apiHandler = $apiHandler;
    }


    /* grandpa_roundState endpoint API*/

    public function roundState()
    {
        $response = json_decode($this->apiHandler->APIHandler(Grandpa::GRANDPA_PREFIX . __FUNCTION__));
        $result = ($response->result) ? ['status' => true, 'data' => $response->result] : ['status' => false, 'data' => $response->error];
        return json_encode($result);
    }

    /* grandpa_subscribeJustifications endpoint API*/

    public function subscribeJustifications()
    {
        $response = json_decode($this->apiHandler->APIHandler(Grandpa::GRANDPA_PREFIX . __FUNCTION__));
        $result = ($response->result) ? ['status' => true, 'data' => $response->result] : ['status' => false, 'data' => $response->error];
        return json_encode($result);
    }


}
