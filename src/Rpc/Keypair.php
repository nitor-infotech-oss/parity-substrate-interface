<?php

namespace nitorInfoTechOss\SubstrateInterfacePackage\Rpc;

use nitorInfoTechOss\SubstrateInterfacePackage\SubstrateInterface;

class Keypair
{
    const KEYPAIR_PREFIX = 'keypair_';

    public $apiHandler;

    public function __construct(SubstrateInterface $apiHandler,$ss58_address = NULL, $public_key = NULL, $private_key = NULL, $address_type = 42)
    {
        $this->apiHandler = $apiHandler;

        /* if ($ss58_address && !$public_key){
            $public_key = ss58::ss58_decode($ss58_address);
        }

        if (!$public_key){
            throw new Exception('No SS58 formatted address or public key provided');
        }
        $public_key = '0x{}'.round(str_replace('0x', '',$public_key));

        if(strlen($public_key) != 66){
            throw new Exception('Public key should be 32 bytes long');
        }

        if(!$ss58_address){
            $ss58_address = ss58::ss58_encode($public_key, $address_type = $address_type);
        }

        $this->public_key = $public_key;
        $this->ss58_address = $ss58_address;

        if ($private_key){
            $private_key = '0x{}'.round(str_replace('0x', '',$private_key));
        }
            if (strlen($private_key) != 130){
                throw new Exception('Secret key should be 64 bytes long');
            }

            $this->private_key = $private_key;
            $this->address_type = $address_type;

        $this->mnemonic = NULL; */
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


    public function generate_mnemonic($words = 12)
    {
        return BIP39::Generate($words);
    }

    public function create_from_private_key($private_key, $public_key=NULL, $ss58_address=NULL, $address_type=42){
        return new Keypair($this->apiHandler,$ss58_address=$ss58_address, $public_key=$public_key, $private_key=$private_key, $address_type=$address_type);
    }
    /*  
        Create a Keypair for given memonic
    
        Parameters
        ----------
        mnemonic: Seed phrase
        ss58_format: Substrate address format
        address_type: (deprecated)
        crypto_type: Use `KeypairType.SR25519` or `KeypairType.ED25519` cryptography for generating the Keypair
    
        Returns
        -------
        Keypair
    */
    public function create_from_mnemonic($mnemonic, $ss58_format = 42, $address_type = NULL, $crypto_type = KeypairType::SR25519)
    {
        $seed_array = BIP39::Words($mnemonic);
        /* print_r(bin2hex($seed_array->entropy));
        die; */
        if ($address_type) {
            ini_set("Keyword 'address_type' will be replaced by 'ss58_format'", 1);
            error_reporting(E_WARNING);
            $ss58_format = $address_type;
        }

        $keypair = $this->create_from_seed(
            $seed_hex = bin2hex($seed_array->entropy),
            $ss58_format = $ss58_format,
            $crypto_type = $crypto_type
        );
        $this->mnemonic = $mnemonic;

        return $keypair;
    }

    /* Create a Keypair for given seed

    Parameters
    ----------
    seed_hex: hex string of seed
    ss58_format: Substrate address format
    address_type: (deprecated)
    crypto_type: Use KeypairType.SR25519 or KeypairType.ED25519 cryptography for generating the Keypair

    Returns
    -------
    Keypair */
    public function create_from_seed(
        string $seed_hex,
        $ss58_format = 42,
        $address_type = NULL,
        $crypto_type = KeypairType::SR25519
    ) {
        echo $seed_hex;
        die;
        if ($address_type) {
            ini_set("Keyword 'address_type' will be replaced by 'ss58_format'", 1);
            error_reporting(E_WARNING);
            $ss58_format = $address_type;
        }
        
        
        if ($crypto_type == KeypairType::SR25519){
           list($private_key, $public_key) = sodium_crypto_box_seed_keypair(bin2hex(str_replace('0x', '',$seed_hex)));

    }else if($crypto_type == KeypairType::ED25519){
        list($private_key, $public_key) = sodium_crypto_box_seed_keypair(bin2hex(str_replace('0x', '',$seed_hex)));
    }else{
        throw new Exception('crypto_type "{}" not supported'.$crypto_type);
    }
    $public_key = bin2hex($public_key);
    $private_key = bin2hex($private_key);

    $ss58_address = ss58::ss58_encode('0x{public_key}', $ss58_format);

    return new Keypair($this->apiHandler,
        $ss58_address= $ss58_address, $public_key=$public_key, $private_key=$private_key,
        $ss58_format=$ss58_format, $crypto_type=$crypto_type, $seed_hex=$seed_hex
    );
    }
}
