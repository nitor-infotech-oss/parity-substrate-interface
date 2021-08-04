<?php

namespace neha0921\SubstrateInterfacePackage\traits;

use neha0921\SubstrateInterfacePackage\Models\SubstrateBase;

trait System
{
    /* system_name endpoint API*/
    
    public function name()
    {
        $response = $this->APIHandler('system_'.__FUNCTION__);
        $_name = $response['result'];
        return $response;
    }

     /* system_name endpoint API*/
    
     public function chain()
     {
         $response = $this->APIHandler('system_'.__FUNCTION__);
         $_chain = $response['result'];
         return $_chain;
     }

      /* system_name endpoint API*/
    
    public function health()
    {
        $response = $this->APIHandler('system_'.__FUNCTION__);
        $_health = $response['result'];
        return $_health;
        // return response()->json($this->_health);
    }

}