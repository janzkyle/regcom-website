7<?php $accordionhtml = "$( '#accordion' ).accordion({active: 1});" ?>

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
        $("#lioldg").attr('class', 'sideactive');
    });
</script>

<div id="procedure" class="section wrap">
    <h1>Old Graduate</h1>

    <div class="panel">
        <div class="imageicon">
            <h3>Step 1</h3>
            <img src="images/onlinereg.png" height="100">
        </div>
        <div class="description">
            <h3>AISIS Online Enlistment</h3>
            <p>
                Date: <?php echo $dategradonline ?><br>
                Time: <?php echo $timegradonline ?><br>
                Check AISIS for hold orders, clear them 1 week before online registration<br>
                If you encounter any problems online, please proceed to manual registration (step 2)<br>
                Proceed to payment (step 4) after printing assessment form (<a href="payment.php">Payment Options</a>)
            </p>
        </div>
        <div style="clear:both;"></div>
    </div>

    <div class="panel">
        <div class="imageicon">
            <h3>Step 2</h3>
            <img src="images/checker.png" height="100">
        </div>
        <div class="description">
            <h3>Checkers</h3>
            <p>
                <strong>NO VALID ID NO ENTRY</strong><br>
                Date: <?php echo $dategradmanreg ?><br>
                Time: <br>
                <?php echo $timegradmanreg ?><br>
                Venue: <strong><?php echo $checkersvenue ?></strong><br>
                For proxies check: <a href="proxy.php">Proxy Documents and Reminders</a> <br>
                Before proceeding to Manual Registration, indicate all problems (e.g. no slots, conflict, etc.) <br>
                with your enlistment in the <a href="http://reg-system-server.herokuapp.com/" target="_blank">Manual Registration System.</a>
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
            <h3>Enlistment and Assessment</h3>
            <p>
                Venue: <strong><?php echo $gradvenue ?></strong><br>
                Make sure to have your assessment form before leaving the venue<br>
                Re-instated/LOA students must submit Personal Information Data Sheet
            </p>
        </div>
        <div style="clear:both;"></div>
    </div>

    <div class="panel">
        <div class="imageicon">
            <h3>Step 4</h3>
            <img src="images/cashier.png" height="100">
        </div>
        <div class="description">
            <h3>Cashier</h3>
            <p>
                Off-Campus Payment
                <p class="indent">
                    Date: <?php echo $dateoffcampus ?><br>
                    Details: <a href="payment.php">Off-campus payment options</a><br>
                    ID Application (the next registration procedure) will not require you to present your Official Receipt.<br>
                    <?php echo $offcampusnotes ?><br>
                </p><br>

                On-Campus Payment
                <p class="indent">
                    Date: <?php echo $dateoncampus ?><br>
                    Time: <?php echo $timeoncampus ?><br>
                    Bring: Printed assessment form<br>
                    Details: <a href="paymentdetails.php">On-campus payment details</a><br>
                    <?php echo $oncampusnotes ?>
                </p>
            </p>
        </div>
        <div style="clear:both;"></div>
    </div>

    <div class="panel">
        <div class="imageicon">
            <h3>Step 5</h3>
            <img src="images/id.png" height="100">
        </div>
        <div class="description">
            <h3>ID Application / Validation</h3>
            <p>
                <strong>ALL students are REQUIRED to apply for a new ID</strong><br>
                <strong>NO PROXIES for any ID matters</strong><br>
                <strong>LST Students have a delayed ID application</strong><br>

                <!--?php echo $idlinks ?-->

                Date:
                <p class="indent">
                    <?php echo $iddateint ?><br>
                    <?php echo $iddateintsat ?><br>
                </p>
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
        Printable pdf: <a href="<?php echo $link5oldg; ?>">Old Graduate Registration Procedure</a>
        <p><strong>*Valid ID:</strong> Any ID with a picture AND signature</p>
    </div>
    <div style="clear:both;"></div>
    <a href="newgrad.php" class="next">New Graduate ></a>
    <div style="clear:both;"></div>

</div>

<?php include('footer.php') ?>