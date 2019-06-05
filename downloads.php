<?php $accordionhtml = "$( '#accordion' ).accordion({active: 3});" ?>

<?php include('header.php') ?>
<?php include('nav.php') ?>
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
<script>
    $(function() {
        $("#lidoc").attr('class', 'sideactive');
    });
</script>

<div id="procedure" class="section wrap" style="min-height: 80vh;">
    <h1>Downloads</h1>
    <div class="nonsteps">
        <ul>
            <li><a href="<?php echo $link1intregsched ?>">Intersession Registration Schedule [pdf]</a></li>
            <li><a href="<?php echo $link2batchsched ?>">Undergraduate and Graduate Level Batch Schedules [pdf]</a></li>
            <li><a href="<?php echo $link3ugradproc ?>">Undergraduate Registration Procedures [pdf]</a></li>
            <li><a href="<?php echo $link4ugradlateproc ?>">Undergraduate Late Registration Procedures [pdf]</a></li>
            <li><a href="<?php echo $link5gradproc ?>">Graduate Registration Procedures [pdf]</a></li>
            <li><a href="<?php echo $link6newgradproc ?>">New Graduate Registration Procedures [pdf]</a></li>
            <li><a href="<?php echo $link7crossaudproc ?>">Cross Registrant and Auditors Registration Procedures [pdf]</a></li>
            <li><a href="<?php echo $link8gradlateproc ?>">Graduate Late Registration Procedures [pdf]</a></li>
            <li><a href="<?php echo $link9gradscholar ?>">Graduate Scholarship Documents [pdf]</a></li>
            <li><a href="<?php echo $link10loadrev ?>">Load Revision Procedures [pdf]</a></li>
            <li><a href="<?php echo $link11proxy ?>">Proxy Guidelines [pdf]</a></li>
            <li><a href="<?php echo $link12genrem ?>">General Reminders [pdf]</a></li>
            <li><a href="<?php echo $link13mistakes ?>">Undergraduates Frequently Made Mistakes [pdf]</a></li>
            <li><a href="<?php echo $link14deps ?>">Loyola Schools Departments and Locations [pdf]</a></li>
            <li><a href="<?php echo $link15onoffpay ?>">On Campus and Off Campus Payments [pdf]</a></li>
            <li><a href="<?php echo $link16aisispay ?>">AISIS Linked Payment Option [pdf]</a></li>
            <li><a href="<?php echo $link17paysumm ?>">Tuition Payment Options Summary [pdf]</a></li>
 
        </ul>
    </div>
    <a href="proxy.php" class="next">Proxy Guidelines</a>
    <div style="clear:both;"></div>
</div>

<?php include('footer.php') ?>