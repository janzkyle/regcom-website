<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Manual Registration Details</title>
	<meta charset="utf-8">
        <!-- css link -->
        <link href="css/reset.css" rel="stylesheet" type="text/css">
        <link href="css/style.css" rel="stylesheet" type="text/css">
        <link href="css/navstyle.css" rel="stylesheet" type="text/css">

        <!--font-->
        <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

        <!-- favicon link -->
        <link rel="icon" href="images/favicon.ico">

        <!--js link-->
        <script src="js/jquery-1.8.2.min.js"></script>
        <script src="js/jquery-ui.js"></script>
        <script src="js/script.js"></script>

        <title>Ateneo Registration Committee</title>

        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
        <meta name="author" content="Ateneo Registration Committee">
        <!--description that appears for the website when searched-->
        <meta name="desription" content="This is the official website of Ateneo Registration Committee (RegCom), a body of selected student volunteers who are tasked by the Registrar’s Office (RO) to enforce and facilitate the registration process.">
        <!--tell the search engine the contents of your website-->
        <meta name="keywords" content="Ateneo, Regcom, Ateneo Regcom, Ateneo Registration Comittee, Registration, admu, ateneo de manila university, registrars office, aisis, aisis online">
        <script>
          (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
          (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
          m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
          })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

          ga('create', 'UA-48792662-1', 'auto');
          ga('send', 'pageview');




          window.onload = function() {
			var id = $_POST[id];
			if (id != ""){
			  $(this)[0].target="_self";
			  $(this)[0].action="complete.php";  
			  }
			};




        </script>
        <style type="text/css">
            .backbutton,
            .backbutton
            {
              font-family: 'OpenSans-Semibold', sans-serif;
              border: 3px solid #3c3c3c;
              padding: 10px;
              background-color: #2366C9;
              color: white;
              width: 100px;
              text-align: center;
              margin-top: -12px;
            }
            .backbutton:hover,
            .backbutton:hover
            {
              border: 3px solid #2366C9;
                background-color: white;
              text-align: center;
              color: #3c3c3c;
              -webkit-transition: .3s;
                 -moz-transition: .3s;
                 -o-transition: .3s;
                  -ms-transition: .3s;
                  transition: .3s;
            }
        </style>
	
<?php
$answers = $_POST;
$name = $answers[name];
$id = $answers[id];
$year = $answers[year];
$course = $answers[course];
$school = $answers[school];
$email = $answers[email];
$special = $answers[special];
$token = $answers[token];

 ?>	
</head>
<body>

<!-- Hello <?php echo $name ?><br>
Email <?php echo $email ?><br>
Special <?php echo $special ?><br>
ID: <?php echo $id ?><br>
Year: <?php echo $year ?><br>
Course: <?php echo $course ?><br>
School: <?php echo $school  ?><br>
Token: <?php echo $token  ?><br> -->
<p style="text-align: center; margin-top: 30px; margin-bottom: 25px;">Please take note of, screen capture or print the following for your manual registration.<BR>
The <b>reference code</b> will be used during your manual registration.</p>
<div id="app">
	<h1 style="text-align: center; margin-bottom: 21px;">Reference Slip</h1>
    <h2 style="text-align: left; margin-bottom: 10px;">Student Information</h2>
                <div class="id_input">ID Number</div>
                <input id='id_input' class="wrap" type='text' placeholder='Enter your ID number here'/>
                <br>
                <label class="name">Name</label>
                <input id='name' class="wrap" type='text' readonly />
                <br>
                <label class="year">Year</label>
                <input id='year' class="wrap" type='text' readonly />
                <br>
                <label class="course">Course</label>
                <input id='course' class="wrap" type='text' readonly />
                <br>
    <h2 style="text-align: left; margin-top: 12px; margin-bottom: 10px;">Manual Registration Details</h2>  
                <label class="manual">Manual Registration Batch Number</label>
                <input id='manual' class="wrap" type='text' readonly />
                <br>
                <label class="venue">Waiting Venue</label>
                <input id='venue' class="wrap" type='text' readonly />
                <br>
                <label class="datetime">Date and Time</label>
                <input id='datetime' class="wrap" type='text' readonly />
                <br>
                <button id="search">Search</button>
                <div style="clear:both"></div>

    <h2 style="text-align: right; margin-bottom: 30px; color: red;">Reference Code: <?php echo $token  ?></h2> 
    <button style="float: right;" id="back" class="backbutton" onclick="location.href = 'http://regcom.ateneo.edu';">Back</button>
</br>
</div>
    
</br>
<script>

        $(document).ready(function(){
            	var idnum = <?php echo $id  ?>;
				var special = "";
				<?php
				  echo "var school = '{$school}';";
				?>
                <?php
                  echo "special = '{$special}';";
                ?>
				$("#id_input").val(idnum);

                var file;
                if (idnum >= 120000 && idnum < 122500){
                    file = "data/120000.csv";
                }
                else if(idnum >= 122500 && idnum < 125000){
                    file = "data/122500.csv";
                }
                else if(idnum >= 125000 && idnum < 127500){
                    file = "data/125000.csv";
                }
                else if(idnum >= 127500 && idnum < 130000){
                    file = "data/127500.csv";
                }
                else if(idnum >= 130000 && idnum < 132500){
                    file = "data/130000.csv";
                }
                else if(idnum >= 132500 && idnum < 135000){
                    file = "data/132500.csv";
                }
                else if(idnum >= 135000 && idnum < 137500){
                    file = "data/135000.csv";
                }
                else if(idnum >= 137500 && idnum < 140000){
                    file = "data/137500.csv";
                }
                else if(idnum >= 140000 && idnum < 142500){
                    file = "data/140000.csv";
                }
                else if(idnum >= 142500 && idnum < 145000){
                    file = "data/142500.csv";
                }
                else if(idnum >= 145000 && idnum < 147500){
                    file = "data/145000.csv";
                }
                else if(idnum >= 147500 && idnum < 150000){
                    file = "data/147500.csv";
                }
                else if(idnum >= 150000 && idnum < 152500){
                    file = "data/150000.csv";
                }
                else if(idnum >= 152500 && idnum < 155000){
                    file = "data/152500.csv";
                }
                else if(idnum >= 155000 && idnum < 157500){
                    file = "data/155000.csv";
                }
                else if(idnum >= 157500 && idnum < 160000){
                    file = "data/157500.csv";
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

                            if(tempStudent[0] == idnum ){
                                found = true;
                                $("#manual").val(tempStudent[2]);
                                $("#name").val(tempStudent[3] + ", " +tempStudent[4]);
                                $("#year").val(tempStudent[5]);
                                $("#course").val(tempStudent[6]);

                                if(tempStudent[2] == 1){
									$("#datetime").val("8:00 - 10:00am June 2, 2016");
                                } else if (tempStudent[2] == 2){
									$("#datetime").val("10:00 - 12:00nn June 2, 2016");
                                } else if (tempStudent[2] == 3){
									$("#datetime").val("1:00 - 2:00pm June 2, 2016");
                                } else if (tempStudent[2] == 4){
									$("#datetime").val("2:00 - 3:00pm June 2, 2016");
                                }
					
								alert(special);
                                if(school == "SOSE" || special =="Yes"){
                                	$("#venue").val("Sec A 202");
                                } else if (school == "SOM"){
                                	$("#venue").val("CTC 105");
                                } else if (school == "SOSS"){
                                	$("#venue").val("Faura AVR");
                                } else if (school == "SOH"){
                                	$("#venue").val("Faura AVR");
                                } else if (year == "GRAD"){
                                	$("#venue").val("CSR");
                                }

                            }
                        }
                        if(found == false){
                            alert("ID number not found");
                        } 
                    },  
                    "html"  
                );         
        });
    </script>
</body>
</html>