<?php 
 $answers = $_POST;
 $url1 = "http:/regcom.ateneo.edu/complete.php"; // This is the URL address of the custom web page

 $var1 = "?fullName[first]=".urlencode($answers[fullname][0]);
 $var2 = "&fullName[last]=".urlencode($answers[fullname][1]);
 $url2 = $url1.$var1.$var2;
 header("location:$url2");
?>