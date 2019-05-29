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
            <li><a href="<?php echo $link1regsched2 ?>">Registration Schedules [pdf]</a></li>
            <li><a href="<?php echo $link2eta ?>">Expected Time of Arrival [pdf]</a></li>
            <li><a href="<?php echo $link3aunderg ?>">Undergraduate Registration Procedure [pdf]</a></li>
            <li><a href="<?php echo $link3bfresh ?>">Freshmen and Transferees Registration Procedure [pdf]</a></li>
            <li><a href="<?php echo $link3cintl ?>">Undergrad International Exchange Registration Procedure [pdf]</a></li>
            <li><a href="<?php echo $link4underglate ?>">Late Undergraduate Registration Procedure [pdf]</a></li>
            <li><a href="<?php echo $link5oldg ?>">Old Graduate Registration Procedure [pdf]</a></li>
            <li><a href="<?php echo $link6newg ?>">New Graduate Registration Procedure [pdf]</a></li>
            <li><a href="<?php echo $link7crossaud ?>">Cross Registrant and Auditors Registration Procedure [pdf]</a></li>
            <li><a href="<?php echo $link8late ?>">Late Graduate Registration Procedure [pdf]</a></li>
            <li><a href="<?php echo $link9gradscholar ?>">Graduate Students Scholarship Documents [pdf]</a></li>
            <li><a href="<?php echo $link10loadrev ?>">Load Revision Schedule [pdf]</a></li>
            <li><a href="<?php echo $link11proxy ?>">Proxy Guidelines [pdf]</a></li>
            <li><a href="<?php echo $link12rem ?>">General Reminders [pdf]</a></li>
            <li><a href="<?php echo $link13mistakes ?>">Frequently Made Mistakes [pdf]</a></li>
            <li><a href="<?php echo $link14dep ?>">Departments and Location [pdf]</a></li>
            <li><a href="<?php echo $link15onoff ?>">Payment Options On and Off Campus [pdf]</a></li>
            <li><a href="<?php echo $link16pay ?>">Payment Option Summary [pdf]</a></li>
            <li><a href="<?php echo $link17payshort ?>">Payment Option - Aisis [pdf]</a></li>
        </ul>
    </div>
    <a href="proxy.php" class="next">Proxy Guidelines</a>
    <div style="clear:both;"></div>
</div>

<?php include('footer.php') ?>