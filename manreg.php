<!DOCTYPE html>
<html lang='en'>
    <head>
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
        <script src="js/jquery-1.10.2.min.js"></script>
        <script src="js/jquery-ui.js"></script>
        <script src="js/script.js"></script>
<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="http://hashids.org/public/js/lib/hashids.min.js"></script>
<script src="jquery.redirect.js"></script>

<style type="text/css">
.form-style-5{
    max-width: 500px;
    padding: 10px 20px;
    background: #fff;
    margin: 10px auto;
    padding: 20px;
    background: #fff;
    border-radius: 8px;
    font-family: "OpenSans-Light",sans-serif;
  }
.form-style-5 fieldset{
    border: none;
}
.form-style-5 legend {
    font-size: 1.4em;
    margin-bottom: 10px;
}
.form-style-5 label {
    display: block;
    margin-bottom: 8px;
}
.form-style-5 input[type="text"],
.form-style-5 input[type="date"],
.form-style-5 input[type="datetime"],
.form-style-5 input[type="email"],
.form-style-5 input[type="number"],
.form-style-5 input[type="search"],
.form-style-5 input[type="time"],
.form-style-5 input[type="url"],
.form-style-5 textarea,
.form-style-5 select {
    font-family: "OpenSans-Light",sans-serif;
    color: #3C3C3C;
    background: #EAEAEA;
    border: none;
    border-radius: 4px;
    font-size: 16px;
    margin: 0;
    outline: 0;
    padding: 7px;
    width: 100%;
    box-sizing: border-box; 
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box; 
    background-color: #EAEAEA;
    color:#3C3C3C;
    -webkit-box-shadow: 0 1px 0 rgba(0,0,0,0.03) inset;
    box-shadow: 0 1px 0 rgba(0,0,0,0.03) inset;
    margin-bottom: 30px;
    
}
.form-style-5 input[type="text"]:focus,
.form-style-5 input[type="date"]:focus,
.form-style-5 input[type="datetime"]:focus,
.form-style-5 input[type="email"]:focus,
.form-style-5 input[type="number"]:focus,
.form-style-5 input[type="search"]:focus,
.form-style-5 input[type="time"]:focus,
.form-style-5 input[type="url"]:focus,
.form-style-5 textarea:focus,
.form-style-5 select:focus{
    background: #3c3c3c;
    color: #EAEAEA;
}
.help-block{
    font-family: "Open Sans", Helvetica, Times, serif;
    color: #2366C9;
    font-size: 12px;
    margin-top: -30px;
    margin-bottom: 12px;
    outline: 0;
    padding: 0px;
    width: 100%;
}
.form-style-5 select{
    -webkit-appearance: menulist-button;
    height:35px;
}
.form-style-5 .number {
    background: #2366C9;
    color: #fff;
    height: 30px;
    width: 30px;
    display: inline-block;
    font-size: 0.8em;
    margin-right: 4px;
    line-height: 30px;
    text-align: center;
    text-shadow: 0 1px 0 rgba(255,255,255,0.2);
    border-radius: 15px 15px 15px 0px;
}

.form-style-5 button[type="submit"],
.form-style-5 button[type="button"]
{
  font-family: 'OpenSans-Semibold', sans-serif;
  border: 3px solid #3c3c3c;
  padding: 12px;
  background-color: #2366C9;
  color: white;
  width: 200px;
  margin-top: -12px;
}
.form-style-5 button[type="submit"]:hover,
.form-style-5 button[type="button"]:hover
{
  border: 3px solid #2366C9;
    background-color: white;
  color: #3c3c3c;
  -webkit-transition: .3s;
     -moz-transition: .3s;
     -o-transition: .3s;
      -ms-transition: .3s;
      transition: .3s;
}
</style>
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

        </script>
    </head>
    <body>
        <div id="nav">
            <ul>
                <a href="index.html"><li><img src="images/logo.jpg" alt="ateneo regcom" height="50"></li></a>
                <a onclick="toggle_visibility('menu');"><li class="menu"><strong>Menu</strong></li></a>
                <div style="clear:both;"></div>
            </ul>
        </div>
        <nav>
            <ul id="menu">
                <a href="index.html"><li>Home</li></a>
                <a href="procedure.html"><li>Procedure</li></a>
                <a href="batch.html"><li>Batch Schedule</li></a>
                <a href="faq.html"><li>FAQs</li></a>
                <a href="http://ls.ateneo.edu/class_schedule.php" target="_blank"><li>Offered Classes</li></a>
                <a href="http://aisis.ateneo.edu" target="_blank"><li>AISIS</li></a>
            </ul>
        </nav>
        <div class="container section wrap" style="margin-top:50px; text-align: left;">



<div class="form-style-5">

<form class="form-horizontal" action="" method="post" id="input-form" target="no-target">


<!-- Form Name -->
<h1>Manual Registration Form</h1>

<legend><span class="number">1</span>Student Info</legend>
<!-- Text input-->
  <label class="col-md-4 control-label" for="nameInput">Full Name</label>  
  <div class="col-md-5">
    <input id="nameInput" name="nameInput" type="text" placeholder="Last Name, First Name MI." class="form-control input-md" required="">
      <p class="help-block">Last Name, First Name MI.</span>  
  </div>

<!-- Text input-->
  <label class="col-md-4 control-label" for="emailInput">Email Address</label>  
  <div class="col-md-5">
    <input id="emailInput" name="emailInput" type="text" placeholder="" class="form-control input-md" required="">
      
  </div>

<!-- Text input-->
  <label class="col-md-4 control-label" for="idInput">ID Number</label>  
  <div class="col-md-2">
    <input id="idInput" name="idInput" type="text" placeholder="" class="form-control input-md" required="">
      
  </div>

<!-- Select Basic -->
  <label class="col-md-4 control-label" for="yearInput">Year</label>
  <div class="col-md-2">
      <select id="yearInput" name="yearInput" class="form-control">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="GRAD">GRAD</option>
      </select>
  </div>
  <label class="col-md-4 control-label" for="schoolInput">School</label>
  <div class="col-md-2">
      <select id="schoolInput" name="schoolInput" class="form-control">
        <option value="SOSE">SOSE</option>
        <option value="SOSS">SOSS</option>
        <option value="SOH">SOH</option>
        <option value="SOM">SOM</option>
      </select>
  </div>

<!-- Prepended checkbox -->
  <label class="col-md-4 control-label" for="specialInput">Special Student?</label>
       
  <div class="col-md-4">
      <div class="input-group">
        <input id="specialInput" name="specialInput" type="hidden" value="">
		<input id="specialInput" name="specialInput" class="form-control" type="checkbox" value="Yes">Yes
      </div>
       <p class="help-block" style="margin-top: 0px;">LOA, Cross-registrant, Auditor, etc.</p>
  </div>

<!-- Text input-->
  <label class="col-md-4 control-label" for="courseInput">Course</label>  
  <div class="col-md-2">
    <input id="courseInput" name="courseInput" type="text" placeholder="" class="form-control input-md" required="">
    <p class="help-block">abbreviated</span>  
  </div>


<legend><span class="number">2</span>Concerns</legend>

<!-- Multiple Radios (inline) -->
<!-- Select Basic -->
  <label class="col-md-4 control-label" for="numSubjectsInput">How many subjects are a matter of concern in your manual registration?</label>
  <div class="col-md-6">
      <select id="numSubjectsInput" name="numSubjectsInput" class="form-control">
        <option value="0">0</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3 or more">3 or more</option>
      </select>
  </div>

<!-- Select Basic -->
  <label class="col-md-4 control-label" for="concern1Input">Concern #1</label>
  <div class="col-md-6">
      <select id="concern1Input" name="concern1Input" class="form-control">
        <option value="Re-advisement only">Re-advisement only</option>
        <option value="Enlist in class with open slots">Enlist in class with open slots</option>
        <option value="Enlist in tagged class">Enlist in tagged class</option>
        <option value="Conflict with other subjects">All open classes offered conflict with other subjects</option>
        <option value="Other">Other</option>
      </select>
  </div>

<!-- Search input-->
  <label class="col-md-4 control-label" for="subject1Input">Subject Code of Concern #1 (if applicable)</label>
  <div class="col-md-4">
      <input id="subject1Input" name="subject1Input" type="search" placeholder="" class="form-control input-md">
      <p class="help-block">Ex. ITM 11, EN 12, etc.</p>
  </div>

<!-- Textarea -->
  <label class="col-md-4 control-label" for="other1Input">Other details of Concern #1</label>
  <div class="col-md-4">                     
      <textarea class="form-control" id="other1Input" name="other1Input"></textarea>

  </div>
<div class="input-group">
        <input id="haveConcern2" name="haveConcern2" class="form-control" type="checkbox" value="Yes"> I have another concern.
      </div>
<br>
<div style="display:none;" id="divConcern2">
<!-- Select Basic -->
  <label class="col-md-4 control-label" for="concern2Input">Concern #2</label>
  <div class="col-md-6">
      <select id="concern2Input" name="concern2Input" class="form-control">
        <option value="Enlist in class with open slots">Enlist in class with open slots</option>
        <option value="Enlist in tagged class">Enlist in tagged class</option>
        <option value="Conflict with other subjects">All open classes offered conflict with other subjects</option>
        <option value="Other">Other</option>
      </select>
  </div>

<!-- Text input-->
  <label class="col-md-4 control-label" for="subject2Input">Subject Code of Concern #1 (if applicable)</label>  
  <div class="col-md-4">
    <input id="subject2Input" name="subject2Input" type="text" placeholder="" class="form-control input-md">
    <p class="help-block">Ex. ITM 11, EN 12, etc.</span>  
  </div>

<!-- Textarea -->
  <label class="col-md-4 control-label" for="other2Input">Other details of Concern #2</label>
  <div class="col-md-4">                     
      <textarea class="form-control" id="other2Input" name="other2Input"></textarea>
  </div>
  <div class="input-group">
    <input id="haveConcern3" name="haveConcern3" class="form-control" type="checkbox" value="Yes"> I have another concern.
  </div>    
<br>
</div>


<div style="display:none;" id="divConcern3">
<!-- Select Basic -->
  <label class="col-md-4 control-label" for="concern3Input">Concern #3</label>
  <div class="col-md-4">
      <select id="concern3Input" name="concern3Input" class="form-control">
        <option value="Enlist in class with open slots">Enlist in class with open slots</option>
        <option value="Enlist in tagged class">Enlist in tagged class</option>
        <option value="Conflict with other subjects">All open classes offered conflict with other subjects</option>
        <option value="Other">Other</option>
      </select>
  </div>

<!-- Text input-->
  <label class="col-md-4 control-label" for="subjectInput3">Subject Code of Concern #3 (if applicable)</label>  
  <div class="col-md-4">
    <input id="subject3Input" name="subject3Input" type="text" placeholder="" class="form-control input-md">
    <p class="help-block">ex. ITM 11, EN 12, etc.</span>  
  </div>

<!-- Textarea -->
  <label class="col-md-4 control-label" for="other3Input">Other details of Concern #3</label>
  <div class="col-md-4">                     
      <textarea class="form-control" id="other3Input" name="other3Input"></textarea>
  </div>
  <div class="input-group">
    <input id="haveConcern4" name="haveConcern4" class="form-control" type="checkbox" value="Yes"> I have another concern.
  </div>  
  <br>
</div>
  

<div style="display:none;" id="divConcern4">
<!-- Select Basic -->
<!-- Textarea -->
  <label class="col-md-4 control-label" for="othersInput">List all other concerns</label>
    <div class="col-md-4">                     
      <textarea class="form-control" id="othersInput" name="othersInput" placeholder="Subject Code - Concern - Other details"></textarea>
  </div>
</div>
<!-- Button -->
  <label class="col-md-4 control-label" for="submit"></label>
  <div class="col-md-4">
    
    <button id="form-submit" type="submit">SUBMIT</button>

  </div>

</form>


</div>
<iframe src="#" id="no-target" name="no-target" style="visibility:hidden"></iframe>

<script type="text/javascript">
    window.onload = function() {

      
    };
$("input[type=checkbox]").change(function() {
    $(this).attr("value", $(this).attr("checked") ? "Yes": "No");
});
   

    $('#input-form').one('submit',function(){

        postToGoogle();
          // $(this)[0].target="_self";
          // $(this)[0].action="complete.php";
    });
    function postToGoogle() {
            var idInput = $('#idInput').val();
            var hashids = new Hashids("RegCom ManReg", 0,"ABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890");
            var d = new Date();
            var idGenerated = hashids.encode(d.getMinutes(), Number(idInput));
            var schoolInput = $('#schoolInput').val();
            var nameInput = $('#nameInput').val();
            var emailInput = $('#emailInput').val();
            var yearInput = $('#yearInput').val();
            var courseInput = $('#courseInput').val();
            var specialInput = $('#specialInput').val();
            var numSubjectsInput = $('#numSubjectsInput').val();
            var concern1Input = $('#concern1Input').val();
            var subject1Input = $('#subject1Input').val();
            var other1Input = $('#other1Input').val();
            var concern2Input = $('#concern2Input').val();
            var subject2Input = $('#subject2Input').val();
            var other2Input = $('#other2Input').val();
            var concern3Input = $('#concern3Input').val();
            var subject3Input = $('#subject3Input').val();
            var other3Input = $('#other3Input').val();
            var othersInput = $('#othersInput').val();
            $.ajax({ 
            url: "https://docs.google.com/forms/d/1g7fN_qGXQjqPw3NgU7t5Ufe5IZEPUAUJ0NbvlYFtw6o/formResponse",
            data: {"entry.1329941513": idInput, 
            "entry.355256085": idGenerated, 
            "entry.1837157512": schoolInput, 
            "entry.741811277": emailInput, 
            "entry.252078535": nameInput, 
            "entry.1278666724": yearInput,
            "entry.96900929": courseInput,
            "entry.562626949": specialInput,
            "entry.1680073452": numSubjectsInput,
            "entry.1815634403": concern1Input,
            "entry.23812806": subject1Input,
            "entry.1663334365": other1Input,
            "entry.1032710130": concern2Input,
            "entry.1123680553": subject2Input,
            "entry.826358915": other2Input,
            "entry.1149669693": concern3Input,
            "entry.784148624": subject3Input,
            "entry.825039363": other3Input,
            "entry.854267080": othersInput
          }, 
            type: "POST",
            dataType: "xml",
            statusCode: {
                0: function() { 
                  $.redirect('complete.php', { id: idInput, year: yearInput, token: idGenerated, school: schoolInput, special: specialInput});
                },
                200: function() {
                }
            }
        });



   }



</script>
<script type="text/javascript">
$('#haveConcern2').change(function() {
    $('#divConcern2').toggle();
});
$('#haveConcern3').change(function() {
    $('#divConcern3').toggle();
});
$('#haveConcern4').change(function() {
    $('#divConcern4').toggle();
});

</script>
            <div style="clear:both"></div>
        </div>
        <footer>
            <div class="container section">
                <h1>Contact Us</h1>
                <div class="contact">
                    <div>
                        For any questions and/or concerns, feel free to reach us through the following online channels:
                        <div class="socialicon">
                            <a href="https://www.facebook.com/RegComHelpdesk"><i class="fa fa-facebook-square fa-5x"></i></a>
                            <a href="https://twitter.com/AteneoRegcom"><i class="fa fa-twitter-square fa-5x"></i></a>
                        </div>
                        You may also visit the RegCom promo boards along the EDSA Walk.
                        <br><br>
                        Room 209 2nd Floor
                        <br>
                        Manuel V. Pangilinan Center for Student Leadership,
                        <br>
                        Ateneo de Manila University
                        <br>
                        Katipunan Avenue,
                        Loyola Heights, Quezon City 
                    </div>
                    <div>
                        <strong>Office of the Registrar</strong><br>
                        426-6001 loc. 5130-5136
                        <br><br>
                        <strong>Office of the Associate Dean for Graduate Programs</strong><br>
                        426-6001 loc. 5141-5142
                        <br><br>
                        <strong>Office of the Associate Dean for Academic Affairs</strong><br>
                        426-6001 loc. 5011-5012
                        <br><br>
                        <strong>Office for Student Services</strong><br>
                        426-6001 loc. 5020, 5021
                        <br><br>
                        <strong>Office of Admission and Aid</strong><br>
                        426-6001 loc. 5154 – 5155
                    </div>
                </div>
                <div class="copyright">Ateneo Registration Committee. Copyright 2015 All Rights Reserved.</div>
            </div>
        </footer>
    </body>
    <script type="text/javascript">
        function toggle_visibility(id) {
           var e = document.getElementById(id);
           if(e.style.display == 'block')
              e.style.display = 'none';
           else
              e.style.display = 'block';
        }
    </script>
    </body>
</html>