getAllMethods();

function callRpcData() {
    var resultData = '';
    var paramsVal = [];
    var methodName = $("#rpc-method-name").val();
    paramsTemp = ($("input[name=param]").val()) ? $("input[name=param]").val() : [];
    paramsVal.push(paramsTemp);
    $.ajax({
        method: "POST",
        url: "CallHandler.php",
        data: { method_name: methodName, params : paramsVal },
        success: function (result) {
            var data = JSON.parse(result);
            var obj = data.result;
            if(data.result){
                $("#error-msg").addClass('hidden');
            if(jQuery.type( data.result ) === "string"){
                $("#result-data").text(data.result);
            }else{

            for (const [key, value] of Object.entries(obj)) {
                 dataVal = `${value}`.split(',');
                 if(dataVal.length > 1){
                 resultData = resultData + `${key}`+ ' : <br>'; 
                 jQuery.each(dataVal, function(index, item) {
                    resultData = resultData + index+ ' : ' +item+'<br>'; 
                });
            }else{
                resultData = resultData + `${key}`+ ' : ' +`${value}`+'<br>';
            }
              }

            $("#result-data").html('<p style="color:#000;">-Object</p>'+resultData);
        }
    }else{
        $("#error-msg").removeClass('hidden');
        $("#error-msg").html(data.error.message);
        
    }
        }
    });
}
function getAllMethods() {
    $("#rpc-method-name").html("<option value='default'>Loading...</option>");
    $.ajax({
        method: "POST",
        url: "CallHandler.php",
        data: { method_name: 'rpc_methods'},
        success: function (result) {
            
            var data = JSON.parse(result);
            console.log(data);

            optionData = data.result.methods;

            // Add options
            $("#rpc-method-name").html("");
            for (var i in optionData) {
                $('#rpc-method-name').append('<option value=' + optionData[i] + '>' + optionData[i] + '</option>');
            }

            // $("#rpc-method-name").val(data.result.methods);//this is what you want
        }
    });
}

function addFields(){
    var html = '';
    html += '<div class="form-group">';
    html += '<label for="rpc-parameter">Parameter</label>';
    html += '<input type="text" name="param" class="form-control">';
    html += '</div>';

    $('#container').append(html);
}