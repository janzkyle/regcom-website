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
        $("#liunderg").attr('class', 'sideactive');

    });
</script>

<div id="procedure" class="section wrap">
    <h1>Undergraduates</h1>

    <div class="panel">
        <div class="imageicon">
            <h3>Step 1</h3>
            <img src="images/onlinereg.png" height="100">
        </div>
        <div class="description">
            <h3>AISIS Online Enlistment</h3>
            <p>
                Check: <a href="batch.php">Batch Schedule</a><br>
                Check AISIS for hold orders, clear them 1 week before online registration<br>
                If you encounter any problems online, please proceed to manual registration (step 2)<br>
                If you have no problems, print your assessment form then proceed to step 4, payment (<a href="payment.php">Payment Options</a>)<br>
                OAA scholars must have their assessment forms stamped by OAA before payment<br>
                For other concerns check: <a href="faq.php">Frequently Asked Questions</a><br>
                <ul>Date:
                    <!-- <?php echo $undergdateonline ?> <br> -->
                    <li class="indent"><?php echo $dateinteronlineday1 ?> - Undergraduates <strong>required</strong> to take Intersession classes</li>
                    <li class="indent"><?php echo $dateinteronlineday2 ?> - Undergraduates <strong>required</strong> and <strong>not required</strong> to take Intersession classes</li>
                    <!--li class = "indent"><?php echo $dateseniorsonline ?> - Seniors and Superseniors</li>
                    <li class = "indent"><?php echo $datejuniorsonline ?> - Juniors and Undergraduate International Exchange Students</li>
                    <li class = "indent"><?php echo $datesophomoresonline ?> - Sophomores</li>
					<li class = "indent"><?php echo $datefreshmenonline ?> - Freshmen</li-->
                </ul> <br>
                <?php echo $onlinenotes ?>
            </p>
        </div>
        <div style="clear:both;"></div>
    </div>
    <div class="panel">
        <div class="imageicon">
            <h3>Step 2</h3>
            <img src="images/lines.png" height="100">
        </div>
        <div class="description">
            <h3>Lines and Waiting</h3>
            <p>
                <strong>NO VALID ID NO ENTRY*</strong><br>
                <ul>Dates:
                    <!-- <?php echo $dateundergmanreg ?> -->
                    <li class="indent"><?php echo $dateintermanualday1 ?> - All Year Levels (Batching Applies)</li>
                    Time: <?php echo $officehours ?><br>
                    <li class="indent"><?php echo $dateintermanualday2 ?> - All Year Levels (Free-for-all)</li>
                    Time: <?php echo $sathours ?><br>
                    <!--li class = "indent"><?php echo $datesophseniorsmanreg ?> - Sophomores, Seniors and Superseniors</li>
                    <li class = "indent"><?php echo $datejuniorsmanreg ?> - Juniors and Undergraduate International Exchange Students</li>
                    <li class = "indent"><?php echo $datefreshmanreg ?> - Freshmen</li>
                    <li class = "indent"><?php echo $dateffamanreg ?> - All year levels (Free-for-all)</li-->
                </ul>
                Come during your <a href="batch.php">batch schedule</a>
                <ul>Venue:
                    <li class="indent">SOM (<?php echo $somwaitvenue ?>)</li>
                    <li class="indent">SOH/SOSS (<?php echo $sohsosswaitvenue ?>)</li>
                    <li class="indent">SOSE (<?php echo $sosewaitvenue ?>)</li>
                </ul>
                For proxies check: <a href="proxy.php">Proxy Documents and Reminders</a><br>
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
                <ul>Venue:
                    <li class="indent">SOM (<?php echo $somenlistvenue ?>)</li>
                    <li class="indent">SOH/SOSS (<?php echo $sohsossenlistvenue ?>)</li>
                    <li class="indent">SOSE (<?php echo $soseenlistvenue ?>)</li>
                    <li class="indent">Special Students (ADAA)</li>
                </ul>
                Make sure to have a back up schedule<br>
                Make sure to have your assessment form before leaving the venue<br>
                Printing of assessment form can only be done on your <a href="batch.php">scheduled date</a><br>
                <?php echo $assessmentnotes ?>
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

                <!--?php echo $idlinks ?>
                <?php echo $idfreshmen ?>
                <-->
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
                Time:
                <?php echo $idtime ?><br>
                Venue: <?php echo $idvenue ?><strong></strong><br>
                You ARE NOT OFFICIALLY ENROLLED if you haven’t validated your ID<br>
                Strict ID implementation: <?php echo $datestrictid ?><br><br>
                <?php echo $idnotes ?><br>
            </p>
        </div>
        <div style=" clear:both;">
        </div>
    </div>

    <div class="nonsteps" style="margin-bottom:36px;">
        Printable pdf: <a href="<?php echo $link3aunderg ?>">Undergraduate Registration Procedure</a>
        <p><strong>*Valid ID:</strong> Any ID with a picture AND signature</p>
    </div>

    <div style="clear:both;"></div>
    <a href="lateundergrad.php" class="next">Late Registration w/ Fine ></a>
    <div style="clear:both;"></div>

</div>

<?php include('footer.php') ?>