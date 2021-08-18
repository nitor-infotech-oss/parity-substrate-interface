<?php

namespace nitorInfoTechOss\SubstrateInterfacePackage\Rpc;

use nitorInfoTechOss\SubstrateInterfacePackage\SubstrateInterface;

class Rpc
{
    const RPC_PREFIX = 'rpc_';
    public $system;
    private $apiHandler;
    public function __construct(SubstrateInterface $apiHandler)
    {
        $this->apiHandler = $apiHandler;
        $this->system = new System($apiHandler);
        $this->state = new State($apiHandler);
        $this->author = new Author($apiHandler);
        $this->chain = new Chain($apiHandler);
        $this->grandpa = new Grandpa($apiHandler);
        $this->keypair = new Keypair($apiHandler);
        $this->runtime = new Runtime($apiHandler);
    }

    public function get_system()
    {
        return ($this->system);
    }
    public function get_state()
    {
        return ($this->state);
    }
    public function get_author()
    {
        return ($this->author);
    }
    public function get_chain()
    {
        return ($this->chain);
    }
    public function get_grandpa()
    {
        return ($this->grandpa);
    }
    public function get_keypair()
    {
        return ($this->keypair);
    }
    public function get_runtime()
    {
        return ($this->runtime);
    }

    /* rpc_methods endpoint API*/

    public function methods()
    {

        $response = json_decode($this->apiHandler->APIHandler(Rpc::RPC_PREFIX . __FUNCTION__));
        $result = ($response->result) ? ['status' => 1, 'data' => $response->result] : ['status' => 0, 'data' => $response->error];
        return json_encode($result);
    }

    /* subscribe_newHead endpoint API*/

    public function subscribe_newHead()
    {
        $response = json_decode($this->apiHandler->APIHandler(__FUNCTION__));
        $result = ($response->result) ? ['status' => true, 'data' => $response->result] : ['status' => false, 'data' => $response->error];
        return json_encode($result);
    }
    /* unsubscribe_newHead endpoint API*/

    public function unsubscribe_newHead()
    {
        $response = json_decode($this->apiHandler->APIHandler(__FUNCTION__));
        $result = ($response->result) ? ['status' => true, 'data' => $response->result] : ['status' => false, 'data' => $response->error];
        return json_encode($result);
    }
}
