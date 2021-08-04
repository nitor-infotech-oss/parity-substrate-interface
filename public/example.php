<?php

declare(strict_types=1);

namespace neha0921\SubstrateInterfacePackage;

require __DIR__ . '/../vendor/autoload.php';

?>


<?php

$obj = new ApiHandler("http://127.0.0.1:8000");

echo "Name :: ". $obj->rpc->system->name().'<br>';

echo "chain :: ". $obj->rpc->system->chain().'<br>';

?>