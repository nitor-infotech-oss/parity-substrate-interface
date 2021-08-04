<?php
declare(strict_types=1);
namespace neha0921\SubstrateInterfacePackage;
require __DIR__ . '/../vendor/autoload.php';


$obj = new ApiHandler("http://127.0.0.1:8000");
echo $obj->rpc->system->name();

/*Call selected method with input parameter  */
/* if(isset($_POST['method_name'])) {
    $methodName = 'system_name';//$_POST['method_name'];
    $params = isset($_POST['params']) ? $_POST['params'] : [];
    $id = isset($_POST['id']) ? $_POST['id'] : 1;

    if($methodName == 'rpc_methods'){
       
    }else{
        $tempExplode = explode('_',$methodName);
        if(isset($tempExplode[1])){
            return $obj->rpc->$tempExplode[0]->$tempExplode[1];
        }
    }
    
} */
// echo $obj->rpc->system->name();
?>