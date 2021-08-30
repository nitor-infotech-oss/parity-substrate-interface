<?php

namespace nitorInfoTechOss\SubstrateInterfacePackage\Rpc;

use nitorInfoTechOss\SubstrateInterfacePackage\Exception\ValueErrorException;
use nitorInfoTechOss\SubstrateInterfacePackage\SubstrateInterface;

class Chain
{
    const CHAIN_PREFIX = 'chain_';

    public $apiHandler;
    public $__get_block_handler = array();

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

    /* chain_getBlock endpoint API 
    @params*/

    public function get_block(
        string $block_hash = NULL,
        int $block_number = 0,
        bool $ignore_decoding_errors = False,
        bool $include_author = False,
        bool $finalized_only = False
    ) {
        if ($block_hash && $block_number) {
            throw new ValueErrorException("Either block_hash or block_number should be be set");
        }

        if ($block_number) {
            $block_hash = $this->get_block_hash($block_number);
            if (!$block_hash) {
                return;
            }
        }

        if ($block_hash && $finalized_only) {
            throw new ValueErrorException('finalized_only cannot be True when block_hash is provided');
        }

        if (!$block_hash) {
            # Retrieve block hash
            if ($finalized_only) {
                $block_hash = $this->getFinalisedHead();
            } else {
                $block_hash = $this->getHead();
            }
        }
        $this->__get_block_handler = [
            'block_hash' => $block_hash,
            'ignore_decoding_errors' => $ignore_decoding_errors,
            'header_only' => False,
            'include_author' => $include_author
        ];

        return $this->__get_block_handler;
    }

    /* get_block_hash endpoint API*/

    public function get_block_hash($block_number)
    {
        $response = json_decode($this->apiHandler->APIHandler(Chain::CHAIN_PREFIX . __FUNCTION__, array($block_number)));
        // $result = ($response->result) ? ['status' => true, 'data' => $response->result] : ['status' => false, 'data' => $response->error];
        return $response->result;
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
        // $result = ($response->result) ? ['status' => true, 'data' => $response->result] : ['status' => false, 'data' => $response->error];
        return $response->result;
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
        // $result = ($response->result) ? ['status' => true, 'data' => $response->result] : ['status' => false, 'data' => $response->error];
        return $response->result;
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
