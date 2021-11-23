<?php

namespace nitorInfoTechOss\SubstrateInterfacePackage;

use nitorInfoTechOss\SubstrateInterfacePackage\Rpc\Keypair;
use nitorInfoTechOss\SubstrateInterfacePackage\Rpc\Rpc;
use nitorInfoTechOss\SubstrateInterfacePackage\Rpc\Transaction;

class SubstrateInterface
{
    const API_URL = "http://127.0.0.1:8000";

    public $rpc, $tx, $token_symbol, $token_decimals;

    public $APIurl;

    public $httpMethod;

    /* Constuctor of the class which get call first*/
    public function __construct($APiURL = '', $websocket = 'None', $ss58_format = 'None', $type_registry = 'None', $type_registry_preset = 'None', $cache_region = 'None', $address_type = 'None', $runtime_config = 'None', $use_remote_preset = False)
    {
        if (!empty($APiURL)) {
            $this->APIurl = ($APiURL);
            $this->httpMethod = 'POST';
            $this->websocket = $websocket;
            $this->ss58_format = $ss58_format;
            $this->type_registry = $type_registry;
            $this->type_registry_preset = $type_registry_preset;
            $this->cache_region = $cache_region;
            $this->address_type = $address_type;
            $this->runtime_config = $runtime_config;
            $this->use_remote_preset = $use_remote_preset;
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

        $tx = new Transaction($this);
        $this->tx = (object)[
            'balances' => $tx->get_balances(),
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

    /* ss58_format endpoint API*/

    public function ss58_format()
    {
        if ($this->ss58_format == 'None' || !$this->ss58_format) {
            $properies = json_decode($this->rpc->system->properties(), true);
            if (!empty($properies)) {
                $this->ss58_format =  $properies['data']['ss58Format'];
            } else {
                $this->ss58_format =  42;
            }
        }

        return $this->ss58_format;
    }

    /* token_decimals endpoint API*/

    public function token_decimals()
    {
        if ($this->token_decimals == 'None') {
            $properies = json_decode($this->rpc->system->properties(), true);
            if (!empty($properies)) {
                $this->token_decimals =  $properies['data']['tokenDecimals'];
            } else {
                $this->token_decimals =  42;
            }
        }

        return $this->token_decimals;
    }

    /* token_symbol endpoint API*/

    public function token_symbol()
    {
        if ($this->token_symbol == 'None') {
            $properies = json_decode($this->rpc->system->properties(), true);
            if (!empty($properies)) {
                $this->token_symbol =  $properies['data']['tokenSymbol'];
            } else {
                $this->token_symbol =  42;
            }
        }

        return $this->token_symbol;
    }

    /* Set Signer endpoint API*/

    public function setSigner($KeySet)
    {
        /* $this->public_key = $KeySet['public_key'];
        $this->private_key = $KeySet['private_key'];
        $this->address_type = $KeySet['address_type'];
        $this->ss58_address = $KeySet['ss58_address']; */

        $response = json_decode($this->APIHandler("keypair_sign", [$KeySet]));
        $this->signature = ($response->result) ? $response->result->signature : NULL;
        return $this->signature;
    }

    /* Compose Call API
    Composes a call payload which can be used as an unsigned extrinsic or a proposal.

    Parameters
    ----------
    call_module: Name of the runtime module e.g. Balances
    call_function: Name of the call function e.g. transfer
    call_params: This is a dict containing the params of the call. e.g. `{'dest': 'EaG2CRhJWPb7qmdcJvy3LiWdh26Jreu9Dx6R1rXxPmYXoDk', 'value': 1000000000000}`
    block_hash: Use metadata at given block_hash to compose call

    Returns
    -------
    GenericCall
    */

    public function compose_call($call_module, $call_function, $call_params = 'None', $block_hash = 'None')
    {
        if($call_params == 'None'){
            $call_params = json_encode([]) ;
        }
        $this->block_hash = $block_hash;
        
        return $this->block_hash;
    }
}
?>