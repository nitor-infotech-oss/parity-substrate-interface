<?php

namespace nitorInfoTechOss\SubstrateInterfacePackage\Rpc;

use nitorInfoTechOss\SubstrateInterfacePackage\SubstrateInterface;

class Balances
{

    public $apiHandler;

    public function __construct(SubstrateInterface $apiHandler)
    {
        $this->apiHandler = $apiHandler;
    }


    /* transfer endpoint API*/

    public function transfer($destAddr, $value)
    {
        $this->apiHandler->destAddr = $destAddr;
        $this->apiHandler->value= $value;
        $inputPara = json_encode(['dest' => $destAddr, 'value' => $value]);
        $paramerter = [$this->apiHandler->ss58_address,"Balances","transfer", $inputPara,$this->apiHandler->private_key];
        $response = json_decode($this->apiHandler->APIHandler('runtime_createExtrinsic',$paramerter));
        $result = ($response->result) ? ['status' => true, 'data' => $response->result] : ['status' => false, 'data' => $response->error];
        return json_encode($result);
    }

    

}
