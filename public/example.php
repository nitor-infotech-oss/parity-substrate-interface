<?php

declare(strict_types=1);

namespace neha0921\SubstrateInterfacePackage;

require __DIR__ . '/../vendor/autoload.php';

?>
<html>

<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  <!-- Popper JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

  <!-- Latest compiled JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


  <link rel="stylesheet" href="css/style.css">
  <script src="js/app.js"></script>

</head>

<body>
  <div class="row">
    <div class="col-sm-8 first-panel">
      <form>
        <div class="alert alert-danger hidden" id="error-msg"></div>
        <div class="form-group">
          <label for="rpc-method-name">Choose Method</label>
          <select class="form-control" id="rpc-method-name">
            <option value="default">Select Method</option>
            <!-- <option value="system_name">System Name</option> -->
          </select>
        </div>
        <button type="button" class="btn btn-primary" onclick="addFields();"><i class="fa fa-plus"></i> Add Parameter</button>
        <div id="container">

        </div>
        <button type="button" class="btn btn-success" onclick="callRpcData();">Submit Method</button>
    </div>
    <div class="col-sm-8" id="second-panel">
      <h3>Result</h3>
      <div id="result-data" class="text-success">
      </div>
    </div>
  </div>
  </form>
</body>

</html>

<?php

/* $obj = new SubstrateInterface("http://127.0.0.1:8000");

echo "Name :: ". $obj->rpc->system->name().'<br>';

echo "chain :: ". $obj->rpc->system->chain().'<br>'; */

?>