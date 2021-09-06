<?php

namespace nitorInfoTechOss\SubstrateInterfacePackage\Rpc;

use nitorInfoTechOss\SubstrateInterfacePackage\SubstrateInterface;

class Runtime
{
    const RUNTIME_PREFIX = 'runtime_';

    public $apiHandler;

    public function __construct(SubstrateInterface $apiHandler)
    {
        $this->apiHandler = $apiHandler;
    }


    /* runtime_getMetadata endpoint API*/

    public function getMetadata(array $requestParameter)
    {
        $response = json_decode($this->apiHandler->APIHandler(Runtime::RUNTIME_PREFIX . __FUNCTION__, $requestParameter));
        $result = ($response->result) ? ['status' => true, 'data' => $response->result] : ['status' => false, 'data' => $response->error];
        return json_encode($result);
    }

    /* runtime_getMetadataModules endpoint API*/

    public function getMetadataModules(array $requestParameter)
    {
        $response = json_decode($this->apiHandler->APIHandler(Runtime::RUNTIME_PREFIX . __FUNCTION__, $requestParameter));
        $result = ($response->result) ? ['status' => true, 'data' => $response->result] : ['status' => false, 'data' => $response->error];
        return json_encode($result);
    }

    /* runtime_getMetadataCallFunctions endpoint API*/

    public function getMetadataCallFunctions(array $requestParameter)
    {
        $response = json_decode($this->apiHandler->APIHandler(Runtime::RUNTIME_PREFIX . __FUNCTION__, $requestParameter));
        $result = ($response->result) ? ['status' => true, 'data' => $response->result] : ['status' => false, 'data' => $response->error];
        return json_encode($result);
    }

    /* runtime_getMetadataStorageFunctions endpoint API*/

    public function getMetadataStorageFunctions(array $requestParameter)
    {
        $response = json_decode($this->apiHandler->APIHandler(Runtime::RUNTIME_PREFIX . __FUNCTION__, $requestParameter));
        $result = ($response->result) ? ['status' => true, 'data' => $response->result] : ['status' => false, 'data' => $response->error];
        return json_encode($result);
    }

    /* runtime_getMetadataEvents endpoint API*/

    public function getMetadataEvents(array $requestParameter)
    {
        $response = json_decode($this->apiHandler->APIHandler(Runtime::RUNTIME_PREFIX . __FUNCTION__, $requestParameter));
        $result = ($response->result) ? ['status' => true, 'data' => $response->result] : ['status' => false, 'data' => $response->error];
        return json_encode($result);
    }

    /* runtime_getMetadataEvent endpoint API*/

    public function getMetadataEvent(array $requestParameter)
    {
        $response = json_decode($this->apiHandler->APIHandler(Runtime::RUNTIME_PREFIX . __FUNCTION__, $requestParameter));
        $result = ($response->result) ? ['status' => true, 'data' => $response->result] : ['status' => false, 'data' => $response->error];
        return json_encode($result);
    }

    /* runtime_getMetadataConstants endpoint API*/

    public function getMetadataConstants(array $requestParameter)
    {
        $response = json_decode($this->apiHandler->APIHandler(Runtime::RUNTIME_PREFIX . __FUNCTION__, $requestParameter));
        $result = ($response->result) ? ['status' => true, 'data' => $response->result] : ['status' => false, 'data' => $response->error];
        return json_encode($result);
    }

    /* runtime_getTypeRegistry endpoint API*/

    public function getTypeRegistry()
    {
        $response = json_decode($this->apiHandler->APIHandler(Runtime::RUNTIME_PREFIX . __FUNCTION__));
        $result = ($response->result) ? ['status' => true, 'data' => $response->result] : ['status' => false, 'data' => $response->error];
        return json_encode($result);
    }
    
    /* runtime_getType endpoint API*/

    public function getType(array $requestParameter)
    {
        $response = json_decode($this->apiHandler->APIHandler(Runtime::RUNTIME_PREFIX . __FUNCTION__,$requestParameter));
        $result = ($response->result) ? ['status' => true, 'data' => $response->result] : ['status' => false, 'data' => $response->error];
        return json_encode($result);
    }

    /* runtime_getCustomTypes endpoint API*/

    public function getCustomTypes()
    {
        $response = json_decode($this->apiHandler->APIHandler(Runtime::RUNTIME_PREFIX . __FUNCTION__));
        $result = ($response->result) ? ['status' => true, 'data' => $response->result] : ['status' => false, 'data' => $response->error];
        return json_encode($result);
    }

    /* runtime_setCustomTypes endpoint API*/

    public function setCustomTypes(array $requestParameter)
    {
        $response = json_decode($this->apiHandler->APIHandler(Runtime::RUNTIME_PREFIX . __FUNCTION__,$requestParameter));
        $result = ($response->result) ? ['status' => true, 'data' => $response->result] : ['status' => false, 'data' => $response->error];
        return json_encode($result);
    }

    /* runtime_addCustomType endpoint API*/

    public function addCustomType(array $requestParameter)
    {
        $response = json_decode($this->apiHandler->APIHandler(Runtime::RUNTIME_PREFIX . __FUNCTION__,$requestParameter));
        $result = ($response->result) ? ['status' => true, 'data' => $response->result] : ['status' => false, 'data' => $response->error];
        return json_encode($result);
    }

    /* runtime_removeCustomType endpoint API*/

    public function removeCustomType(array $requestParameter)
    {
        $response = json_decode($this->apiHandler->APIHandler(Runtime::RUNTIME_PREFIX . __FUNCTION__,$requestParameter));
        $result = ($response->result) ? ['status' => true, 'data' => $response->result] : ['status' => false, 'data' => $response->error];
        return json_encode($result);
    }

    /* runtime_resetCustomTypes endpoint API*/

    public function resetCustomTypes()
    {
        $response = json_decode($this->apiHandler->APIHandler(Runtime::RUNTIME_PREFIX . __FUNCTION__));
        $result = ($response->result) ? ['status' => true, 'data' => $response->result] : ['status' => false, 'data' => $response->error];
        return json_encode($result);
    }

    /* runtime_getState endpoint API*/

    public function getState(array $requestParameter)
    {
        $response = json_decode($this->apiHandler->APIHandler(Runtime::RUNTIME_PREFIX . __FUNCTION__, $requestParameter));
        $result = ($response->result) ? ['status' => true, 'data' => $response->result] : ['status' => false, 'data' => $response->error];
        return json_encode($result);
    }

    /* runtime_getMetadataErrors endpoint API*/

    public function getMetadataErrors(array $requestParameter)
    {
        $response = json_decode($this->apiHandler->APIHandler(Runtime::RUNTIME_PREFIX . __FUNCTION__, $requestParameter));
        $result = ($response->result) ? ['status' => true, 'data' => $response->result] : ['status' => false, 'data' => $response->error];
        return json_encode($result);
    }

    /* runtime_getMetadataError endpoint API*/

    public function getMetadataError(array $requestParameter)
    {
        $response = json_decode($this->apiHandler->APIHandler(Runtime::RUNTIME_PREFIX . __FUNCTION__, $requestParameter));
        $result = ($response->result) ? ['status' => true, 'data' => $response->result] : ['status' => false, 'data' => $response->error];
        return json_encode($result);
    }

    /* runtime_decodeScale endpoint API*/

    public function decodeScale(array $requestParameter)
    {
        $response = json_decode($this->apiHandler->APIHandler(Runtime::RUNTIME_PREFIX . __FUNCTION__, $requestParameter));
        $result = ($response->result) ? ['status' => true, 'data' => $response->result] : ['status' => false, 'data' => $response->error];
        return json_encode($result);
    }

    /* runtime_encodeScale endpoint API*/

    public function encodeScale(array $requestParameter)
    {
        $response = json_decode($this->apiHandler->APIHandler(Runtime::RUNTIME_PREFIX . __FUNCTION__, $requestParameter));
        $result = ($response->result) ? ['status' => true, 'data' => $response->result] : ['status' => false, 'data' => $response->error];
        return json_encode($result);
    }

    /* runtime_createSignaturePayload endpoint API*/

    public function createSignaturePayload(array $requestParameter)
    {
        $response = json_decode($this->apiHandler->APIHandler(Runtime::RUNTIME_PREFIX . __FUNCTION__, $requestParameter));
        $result = ($response->result) ? ['status' => true, 'data' => $response->result] : ['status' => false, 'data' => $response->error];
        return json_encode($result);
    }
    /* runtime_submitExtrinsic endpoint API*/

    public function submitExtrinsic(array $requestParameter)
    {
        $response = json_decode($this->apiHandler->APIHandler(Runtime::RUNTIME_PREFIX . __FUNCTION__, $requestParameter));
        $result = ($response->result) ? ['status' => true, 'data' => $response->result] : ['status' => false, 'data' => $response->error];
        return json_encode($result);
    }
    
}
