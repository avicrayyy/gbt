$(document).ready(function(){
    var isOkay;
    $(".needs-validation").blur(function(){
        var input = $(this);
        var input_name = $(this).attr('name');
        var input_value = $(this).val();
        if(input_value != ''){
            $.ajax({
                url: "/index.php/register/validate",
                method: "POST",
                data:   {
                            name:input_name,
                            value:input_value
                        },
                success: function(data,status,x){
                    if(data != "okay"){
                        $("."+input_name+"-message").text(data);

                    }
                    else{
                        $("."+input_name+"-message").text('');
                    }
                }
            });
        }
        else{
            $("."+input_name+"-message").text(input_name.toUpperCase()+" can't be empty");
        }

        $(".needs-validation").each(function(){
            isOkay = true;
            var input = $(this);
            var input_name = $(this).attr('name');
            var input_value = $(this).val();
            if(input_value != ''){
                $.ajax({
                    url: "/index.php/register/validate",
                    method: "POST",
                    data:   {
                                name:input_name,
                                value:input_value
                            },
                    success: function(data,status,x){
                        if(data != "okay"){
                            isOkay = false;
                        }
                    }
                });
            }
            else{
                isOkay = false;
            }
        }); 
    });

    $(".reg-form").submit(function(){
        return isOkay;
    });        
});