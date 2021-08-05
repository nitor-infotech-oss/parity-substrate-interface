<?php
declare(strict_types=1);
namespace nitorInfoTechOss\SubstrateInterfacePackage;
require __DIR__ . '/../vendor/autoload.php';


// $obj = new SubstrateInterface("http://127.0.0.1:8000");
// echo $obj->rpc->rpc->methods();

/*Call selected method with input parameter  */
if(isset($_POST['method_name'])) {
    $methodName = $_POST['method_name'];
    $params = isset($_POST['params']) ? $_POST['params'] : [];
    $id = isset($_POST['id']) ? $_POST['id'] : 1;

    $obj = new SubstrateInterface("http://127.0.0.1:8000");

    switch($methodName){

        case 'rpc_methods' :
            echo  $obj->rpc->rpc->methods(); break;
        case 'system_name' :
            echo  $obj->rpc->system->name(); break;
        case 'system_chain' :
            echo  $obj->rpc->system->chain(); break;
        case 'system_health' :
            echo  $obj->rpc->system->health(); break;
        case 'system_version' :
            echo  $obj->rpc->system->version(); break;
        case 'system_peers' :
            echo  $obj->rpc->system->peers(); break;
        case 'system_properties' :
            echo  $obj->rpc->system->properties(); break;
       
    }
    
}
