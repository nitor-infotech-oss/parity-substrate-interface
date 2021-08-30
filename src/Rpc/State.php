<?php

namespace nitorInfoTechOss\SubstrateInterfacePackage\Rpc;

use nitorInfoTechOss\SubstrateInterfacePackage\Exception\SubstrateRequestException;
use nitorInfoTechOss\SubstrateInterfacePackage\SubstrateInterface;

class State
{
    const STATE_PREFIX = 'state_';

    public $apiHandler;

    public function __construct(SubstrateInterface $apiHandler)
    {
        $this->apiHandler = $apiHandler;
    }


    /* state_call endpoint API*/

    public function call(array $requestParameter)
    {
        $response = json_decode($this->apiHandler->APIHandler(State::STATE_PREFIX . __FUNCTION__, $requestParameter));
        $result = ($response->result) ? ['status' => true, 'data' => $response->result] : ['status' => false, 'data' => $response->error];
        return json_encode($result);
    }
    /* state_getMetadata endpoint API*/

    public function getMetadata()
    {
        $response = json_decode($this->apiHandler->APIHandler(State::STATE_PREFIX . __FUNCTION__));
        $result = ($response->result) ? ['status' => true, 'data' => $response->result] : ['status' => false, 'data' => $response->error];
        return json_encode($result);
    }

    /* state_getRuntimeVersion endpoint API*/

    public function getRuntimeVersion()
    {
        $response = json_decode($this->apiHandler->APIHandler(State::STATE_PREFIX . __FUNCTION__));
        $result = ($response->result) ? ['status' => true, 'data' => $response->result] : ['status' => false, 'data' => $response->error];
        return json_encode($result);
    }
    /* state_subscribeRuntimeVersion endpoint API*/

    public function subscribeRuntimeVersion()
    {
        $response = json_decode($this->apiHandler->APIHandler(State::STATE_PREFIX . __FUNCTION__));
        $result = ($response->result) ? ['status' => true, 'data' => $response->result] : ['status' => false, 'data' => $response->error];
        return json_encode($result);
    }
    /* state_subscribeStorage endpoint API*/

    public function subscribeStorage()
    {
        $response = json_decode($this->apiHandler->APIHandler(State::STATE_PREFIX . __FUNCTION__));
        $result = ($response->result) ? ['status' => true, 'data' => $response->result] : ['status' => false, 'data' => $response->error];
        return json_encode($result);
    }
    /* state_unsubscribeRuntimeVersion endpoint API*/

    public function unsubscribeRuntimeVersion()
    {
        $response = json_decode($this->apiHandler->APIHandler(State::STATE_PREFIX . __FUNCTION__));
        $result = ($response->result) ? ['status' => true, 'data' => $response->result] : ['status' => false, 'data' => $response->error];
        return json_encode($result);
    }
    /* state_unsubscribeStorage endpoint API*/

    public function unsubscribeStorage()
    {
        $response = json_decode($this->apiHandler->APIHandler(State::STATE_PREFIX . __FUNCTION__));
        $result = ($response->result) ? ['status' => true, 'data' => $response->result] : ['status' => false, 'data' => $response->error];
        return json_encode($result);
    }

    /* state_getStorage endpoint API*/

    public function getStorage(array $requestParameter)
    {
        $response = json_decode($this->apiHandler->APIHandler(State::STATE_PREFIX . __FUNCTION__, $requestParameter));
        $result = ($response->result) ? ['status' => true, 'data' => $response->result] : ['status' => false, 'data' => $response->error];
        return json_encode($result);
    }

    /* state_getStorageAt endpoint API*/

   /*  public function getStorageAt($block_hash,$metadata_decoder = NULL)
    {
        ini_set('get_block_events will be replaced by get_events', 1);
        error_reporting(E_WARNING);
        
        if ($metadata_decoder && $metadata_decoder['version']['index'] >= 9){
            $storage_hash = Constants::STORAGE_HASH_SYSTEM_EVENTS_V9;
        }else{
            $storage_hash = Constants::STORAGE_HASH_SYSTEM_EVENTS;
        }
        
        $response = json_decode($this->apiHandler->APIHandler(State::STATE_PREFIX . __FUNCTION__, array($storage_hash, $block_hash)));
    
        if ($response->error){
            throw new SubstrateRequestException($response->error->message);
        }
    
        if ($response->result){
    
            if ($metadata_decoder){
                # Process events
                $events_decoder = EventsDecoder(
                    $data = ScaleBytes($response->result),
                    $metadata = metadata_decoder,
                    $runtime_config = self.runtime_config
                );
                $events_decoder.decode();
    
                return $events_decoder;
    
        }else{
                return $response;
        }
    }else{
            throw new SubstrateRequestException("Error occurred during retrieval of events");
        }
    } */

    /* state_getStorageHash endpoint API*/

    public function getStorageHash(array $requestParameter)
    {
        $response = json_decode($this->apiHandler->APIHandler(State::STATE_PREFIX . __FUNCTION__, $requestParameter));
        $result = ($response->result) ? ['status' => true, 'data' => $response->result] : ['status' => false, 'data' => $response->error];
        return json_encode($result);
    }

    /* state_getStorageSize endpoint API*/

    public function getStorageSize(array $requestParameter)
    {
        $response = json_decode($this->apiHandler->APIHandler(State::STATE_PREFIX . __FUNCTION__, $requestParameter));
        $result = ($response->result) ? ['status' => true, 'data' => $response->result] : ['status' => false, 'data' => $response->error];
        return json_encode($result);
    }

    /* state_queryStorage endpoint API*/

    public function queryStorage(array $requestParameter)
    {
        $response = json_decode($this->apiHandler->APIHandler(State::STATE_PREFIX . __FUNCTION__, $requestParameter));
        $result = ($response->result) ? ['status' => true, 'data' => $response->result] : ['status' => false, 'data' => $response->error];
        return json_encode($result);
    }

    
}
