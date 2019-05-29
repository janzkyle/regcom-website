	
<!-- 
    This is the code used in the batch numbers
    This part of the code is embedded at the end of batch.php

    As a security measure, obfuscation is performed on the following code
    and can be executed by downloading a software from
    http://www.javascriptobfuscator.com/signin.aspx

    Just make an account, and download the software
-->

    <script>
        $(document).ready(function(){
            $("#search").click(function(){
                var file;
                if ($("#id_input").val() >= 120000 && $("#id_input").val() < 122500){
                    file = "data/120000.csv";
                }
                else if($("#id_input").val() >= 122500 && $("#id_input").val() < 125000){
                    file = "data/122500.csv";
                }
                else if($("#id_input").val() >= 130000 && $("#id_input").val() < 132500){
                    file = "data/130000.csv";
                }
                else if($("#id_input").val() >= 132500 && $("#id_input").val() < 135000){
                    file = "data/132500.csv";
                }
                else if($("#id_input").val() >= 135000 && $("#id_input").val() < 137500){
                    file = "data/135000.csv";
                }
                else if($("#id_input").val() >= 140000 && $("#id_input").val() < 142500){
                    file = "data/140000.csv";
                }
                else if($("#id_input").val() >= 142500 && $("#id_input").val() < 145000){
                    file = "data/142500.csv";
                }
                else if($("#id_input").val() >= 145000 && $("#id_input").val() < 147500){
                    file = "data/145000.csv";
                }
                else if($("#id_input").val() >= 150000 && $("#id_input").val() < 152500){
                    file = "data/150000.csv";
                }
                else if($("#id_input").val() >= 152500 && $("#id_input").val() < 155000){
                    file = "data/152500.csv";
                }
                else if($("#id_input").val() >= 155000 && $("#id_input").val() < 157500){
                    file = "data/155000.csv";
                }
                else if($("#id_input").val() >= 160000 && $("#id_input").val() < 162500){
                    file = "data/160000.csv";
                }
                else if($("#id_input").val() >= 162500 && $("#id_input").val() < 165000){
                    file = "data/162500.csv";
                }
                else if($("#id_input").val() >= 170000 && $("#id_input").val() < 172500){
                    file = "data/170000.csv";
                }
                else if($("#id_input").val() >= 172500 && $("#id_input").val() < 175000){
                    file = "data/172500.csv";
                }
                else{
                    file = "data/others.csv"
                }
                 $.get(  
                    file,  
                    {language: "html", version: 5},  
                    function(response){  
                        
                        var temp = new String(response);
                        console.log(temp);
                        var array = new Array();
                        array = temp.split("\n");
                        
                        var length = array.length,
                        element = null;
                        var found = false;
                        for (var i = 0; i < length; i++) {
                            element = array[i];
                            tempStudent = element.split(",");
                            array[i] = tempStudent;

                            if(tempStudent[0] == $("#id_input").val() ){
                                found = true;
                                $("#online").val(tempStudent[1]);
	                            $("#manual").val(tempStudent[2]);
	                            $("#name").val(tempStudent[3] + "," +tempStudent[4]);
	                            $("#course").val(tempStudent[5]);
	                            $("#year").val(tempStudent[6]);
	                            $("#semester").val(tempStudent[7]);
	                        }
                        }
                        if(found == false){
                            alert("ID number not found");
                        } 
                    },  
                    "html"  
                );
            });
            $('#id_input').keypress(function(e){
                if(e.which == 13){//Enter key pressed
                    $('#search').click();//Trigger search button click event
                }
            });
            $('#id_input').submit(function(){
                    event.preventDefault().
                    $('#search').click();//Trigger search button click event
            });          
        });
    </script>