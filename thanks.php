<html>
<<?php $accordionhtml = "$( '#accordion' ).accordion();" ?>

<?php include('header.php') ?>
<?php         
    $file_handle = fopen("vars.txt", "r");
    $result = array();
    while (!feof($file_handle) ) {
        $line_of_text = fgets($file_handle);
        $parts = explode(':', trim($line_of_text), 2);
        ${strtolower($parts[0])} = trim($parts[1]);
    }

    fclose($file_handle);
?>

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
        <a href="batch.html"><li class="active">Batch Schedule</li></a>
        <a href="faq.html"><li>FAQs</li></a>
        <a href="http://ls.ateneo.edu/class_schedule.php" target="_blank"><li>Offered Classes</li></a>
        <a href="http://aisis.ateneo.edu" target="_blank"><li>AISIS</li></a>
    </ul>
</nav>
<div class="thanks section wrap" style="margin-top:50px; min-height:80vh">
    <h1>Thank You For Your Suggestion</h1>
    your response has been received. 
    <br><br>
    <a href="index.html"><button>Home</button></a>
    </div>
    <div style="clear:both"></div>
</div>

<?php include('footer.php') ?>

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