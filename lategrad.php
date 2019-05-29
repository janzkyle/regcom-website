<?php $accordionhtml = "$( '#accordion' ).accordion({active: 1});" ?>

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
        $("#lilate").attr('class', 'sideactive');
    });
</script>


<div id="procedure" class="section wrap">
            <h1>Late Graduate</h1>
            <div class="panel">
                <div class="imageicon">
                    <h3>Step 1</h3>
                    <img src="images/regform.png" height="100">
                </div>
                <div class="description">
                    <h3>Admission Slip, ID Number, AISIS Account, Regform Distribution</h3>
                    <p>
                        Date: <?php echo $dategradlate ?><br>
                        Time: <?php echo $timegradlate ?><br>
                        Venue: 
                        <ul>
                            <li class = "indent">New Students: <strong><?php echo $gradlatenewinitvenue ?></strong></li>
                            <li class = "indent">Old Students, Cross Registrant, Auditors and International Students: <strong><?php echo $gradlateinitvenue ?></strong></li>
                        </ul>
                        Bring: <strong>Valid ID (NO VALID ID NO ENTRY)*</strong>, Permit to cross register (for cross registrants)
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
                        Date: <?php echo $dategradlate ?><br>
                        Time: <?php echo $timegradlate ?><br>
                        Venue: <strong>Department/s Concerned</strong><br>
                        Bring: <strong>Valid ID (NO VALID ID NO ENTRY)*</strong>, Regform <br>
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
                        Date: <?php echo $dategradlate ?><br>
                        Time: <?php echo $timegradlate ?><br>
                        Venue: <strong><?php echo $gradlateenlistvenue ?></strong><br>
                        Bring: <strong>Valid ID (NO VALID ID NO ENTRY)*</strong>, Regform <br>
                        Submit: <strong> Personal Information Data Sheet </strong>
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
                        Date: <?php echo $dategradlate ?><br>
                        Time: <?php echo $timegradlate ?><br>
                        Venue: <strong><?php echo $gradlateassesvenue ?></strong><br>
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
                        Date: <?php echo $dategradlate ?><br>
                        Time: 8 am - 12 nn, 1 - 4 pm (Weekdays); 8am - 12nn (Saturday)<!-- <?php echo $timegradmanreg ?> --><br>
                        Venue: <strong>Xavier Hall, 1st flr</strong><br>
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
						<?php echo $idlinks ?>
						<?php echo $idfreshmen ?>
                        Date: Jan 24-26 <br>
                        Time: <?php echo $idtime ?><br>
                        Venue: <strong><?php echo $idvenue ?></strong><br>
                        You ARE NOT OFFICIALLY ENROLLED if you haven’t validated your ID<br>
                        Strict ID implementation: <?php echo $datestrictid ?><br><br>
                        <?php echo $idnotes ?><br>
                    </p>
                </div>
                <div style="clear:both;"></div>
            </div>
            <div class="nonsteps" style="margin-bottom:36px;">
                Printable pdf: <a href="<?php echo $link8late ?>">Late Graduate Registration Procedure</a>
                <p><strong>*Valid ID:</strong> Any ID with a picture AND signature</p>
            </div>
            <div style="clear:both;"></div>
            <a href="paymentdetails.php" class="next">Payment Details ></a>
            <div style="clear:both;"></div>
        </div>


<?php include('footer.php') ?>