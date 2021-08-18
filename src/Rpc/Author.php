<?php

namespace nitorInfoTechOss\SubstrateInterfacePackage\Rpc;

use nitorInfoTechOss\SubstrateInterfacePackage\SubstrateInterface;

class Author
{
    const AUTHOR_PREFIX = 'author_';

    public $apiHandler;

    public function __construct(SubstrateInterface $apiHandler)
    {
        $this->apiHandler = $apiHandler;
    }


    /* author_pendingExtrinsics endpoint API*/

    public function pendingExtrinsics()
    {
        $response = json_decode($this->apiHandler->APIHandler(Author::AUTHOR_PREFIX . __FUNCTION__));
        $result = ($response->result) ? ['status' => true, 'data' => $response->result] : ['status' => false, 'data' => $response->error];
        return json_encode($result);
    }

    /* author_submitExtrinsic endpoint API*/

    public function submitExtrinsic(array $requestParameter)
    {
        $response = json_decode($this->apiHandler->APIHandler(Author::AUTHOR_PREFIX . __FUNCTION__, $requestParameter));
        $result = ($response->result) ? ['status' => true, 'data' => $response->result] : ['status' => false, 'data' => $response->error];
        return json_encode($result);
    }

}
