<?php $accordionhtml = "$( '#accordion' ).accordion();" ?>

<?php include('header.php') ?>
<?php include('nav.php') ?>
<?php
$file_handle = fopen("vars.txt", "r");
$result = array();
while (!feof($file_handle)) {
    $line_of_text = fgets($file_handle);
    $parts = explode(':', trim($line_of_text), 2);
    ${strtolower($parts[0])} = trim($parts[1]);
}

fclose($file_handle);
?>
<script>
    $(function() {
        $("#lilatefine").attr('class', 'sideactive');
    });
</script>


<div id="procedure" class="section wrap">
    <h1>Late Undergraduate</h1>
    <div class="panel">
        <div class="imageicon">
            <h3>Step 1</h3>
            <img src="images/regform.png" height="100">
        </div>
        <div class="description">
            <h3>Regform Distribution</h3>
            <p>
                Date: <?php echo $datelate ?><br>
                Time: <?php echo $timeloadrev ?><br>
                Venue: <strong>Registrar's Office (Social Sciences bldg, 1st floor)</strong><br>
                Bring: <strong>Valid ID (NO VALID ID NO ENTRY)*</strong>
            </p>
        </div>
        <div style="clear:both;"></div>
    </div>
    <div class="panel">
        <div class="imageicon">
            <h3>Step 2</h3>
            <img src="images/subject.png" height="100">
        </div>
        <div class="description">
            <h3>Sign Ups for Subjects</h3>
            <p>
                Date: <?php echo $datelate ?><br>
                Time: <?php echo $timeloadrev ?><br>
                Venue: <strong>Department/s Concerned</strong><br>
                Bring: <strong>Valid ID (NO VALID ID NO ENTRY)*</strong>, Regform with approval of concerned departments<br>
            </p>

        </div>
        <div style="clear:both;"></div>
    </div>
    <div class="panel">
        <div class="imageicon">
            <h3>Step 3</h3>
            <img src="images/enlist.png" height="100">
        </div>
        <div class="description">
            <h3>Enlistment and Registrar's Signature</h3>
            <p>
                Date: <?php echo $datelate ?><br>
                Time: <?php echo $timeloadrev ?><br>
                Venue: <strong>Registrar's Office (Social Science bldg, 1st floor)</strong><br>
                Bring: <strong>Valid ID (NO VALID ID NO ENTRY)*</strong>, Regform with approval of concerned departments
            </p>
            </p>
        </div>
        <div style="clear:both;"></div>
    </div>
    <div class="panel">
        <div class="imageicon">
            <h3>Step 4</h3>
            <img src="images/assess.png" height="100">
        </div>
        <div class="description">
            <h3>Assessment</h3>
            <p>
                Date: <?php echo $datelate ?><br>
                Time: <?php echo $timeloadrev ?><br>
                Venue: <strong>Central Accounting Office (Faber Hall, 2nd floor)</strong><br>
                Bring: <strong>Valid ID (NO VALID ID NO ENTRY)*</strong>, Regform
            </p>
        </div>
        <div style="clear:both;"></div>
    </div>
    <div class="panel">
        <div class="imageicon">
            <h3>Step 5</h3>
            <img src="images/cashier.png" height="100">
        </div>
        <div class="description">
            <h3>Cashier</h3>
            <p>
                Date: <?php echo $datelate ?><br>
                Time: <?php echo $timeloadrev ?><br>
                Venue: <strong>Xavier Hall, 1st floor</strong><br>
                Bring: Printed assessment form<br>
                <strong>*Late on-campus and off-campus payment will have a surcharge of P250.00</strong>
            </p>
        </div>
        <div style="clear:both;"></div>
    </div>
    <div class="panel">
        <div class="imageicon">
            <h3>Step 6</h3>
            <img src="images/id.png" height="100">
        </div>
        <div class="description">
            <h3>ID Application / Validation</h3>
            <p>
                <strong>ALL students are REQUIRED to apply for a new ID</strong><br>
                <strong>NO PROXIES for any ID matters</strong><br>

                Dates:<br>
                <!--p class="indent">
                    Freshmen: <?php echo $iddatefresh ?> <br>
                    Sophomores: <?php echo $iddatesoph ?> <br>
                    Juniors: <?php echo $iddatejunior ?> <br>
                    Seniors: <?php echo $iddatesenior ?> <br>
                    Free For All: <?php echo $iddateffa ?> <br>
                </p-->
                <!--Intersession-->
                <p class="indent">
                    <?php echo $iddateint ?><br>
                    <?php echo $iddateintsat ?><br>
                </p>
                Time: <?php echo $idtime ?><br>
                Venue: <strong><?php echo $idvenue ?></strong><br>
                Strict ID implementation: <?php echo $datestrictid ?><br><br>
                <strong>You ARE NOT OFFICIALLY ENROLLED if you haven’t validated your ID</strong><br>
                
            </p>
        </div>
        <div style="clear:both;"></div>
    </div>
    <div class="nonsteps" style="margin-bottom:36px;">
        Printable pdf: <a href="<?php echo $link4underglate ?>">Late Undergraduate Registration Procedure</a>
        <p><strong>*Valid ID:</strong> Any ID with a picture AND signature</p>
    </div>
    <div style="clear:both;"></div>
    <a href="oldgrad.php" class="next">Old Graduate ></a>
    <div style="clear:both;"></div>
</div>



<?php include('footer.php') ?>