<?php

namespace nitorInfoTechOss\SubstrateInterfacePackage;

use nitorInfoTechOss\SubstrateInterfacePackage\Rpc\Rpc;

class SubstrateInterface
{
    const API_URL = "http://127.0.0.1:8000";

    public $rpc;

    public $APIurl;

    public $httpMethod;

    /* Constuctor of the class which get call first*/
    public function __construct($APiURL = "")
    {
        if (!empty($APiURL)) {
            $this->APIurl = ($APiURL);
            $this->httpMethod = 'POST';
        }
        $rpc = new Rpc($this);
        $this->rpc = (object)[
            'rpc' => $rpc,
            'system' => $rpc->get_system(),
            'state' => $rpc->get_state(),
            'author' => $rpc->get_author(),
            'chain' => $rpc->get_chain(),
            'grandpa' => $rpc->get_grandpa(),
            'keypair' => $rpc->get_keypair(),
            'runtime' => $rpc->get_runtime()
        ];
        return $this;
    }


    /* Function which call any API through CRUL
    Input parameter :: URL, HTTP method (GET, POST..) and Body payload.
    Output :: API response
    */
    public function APIHandler($MethodName, $param = [], $id = 1)
    {
        /* Set input payload */
        $inputData = [
            "jsonrpc" => "2.0",
            "method" => $MethodName,
            "params" => $param,
            "id" => $id
        ];

        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => $this->APIurl,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => $this->httpMethod,
            CURLOPT_POSTFIELDS => json_encode($inputData),
            CURLOPT_HTTPHEADER => array(
                'Content-Type: application/json'
            ),
        ));

        $response = curl_exec($curl);
        curl_close($curl);

        return $response;
    }
}
