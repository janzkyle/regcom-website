<?php $accordionhtml = "$( '#accordion' ).accordion();" ?>

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
        $("#lifresh").attr('class', 'sideactive');
    });
</script>


<div id="procedure" class="section wrap">
            <h1>Freshmen and Transferees</h1>
            <div class="panel">
                <div class="imageicon">
                    <h3>Step 1</h3>
                    <!-- <img src="images/aisis.png" height="100">
                </div>
                <div class="description">
                    <h3>AISIS and Google Account Activation</h3>
                    <p>
                        <?php echo $freshaisispredate ?> (Pre-confirmation)<br>
                        <?php echo $freshaisisconfdate ?>5 (Confirmation Proper)<br>
                        <strong>Update AISIS student personal information on or before May 16, 2015</strong>
                    </p>
                </div>
                <div style="clear:both;"></div>
            </div>
            <div class="panel">
                <div class="imageicon">
                    <h3>Step 2</h3> -->
                    <img src="images/onlinereg.png" height="100">
                </div>
                <div class="description">
                    <h3>AISIS Online Enlistment and Assessment</h3>
                    <p>
                        Check: <a href="batch.php">Batch Schedule</a><br>

                        Date: <!--?php echo $undergdateonline ?--><?php echo $datefreshmenonline ?><br>
                        <ul>Time:
                           <li class = "indent">Batch 1 : <?php echo $timebatchone ?></li>
                           <li class = "indent">Batch 2 : <?php echo $timebatchtwo ?></li>
                           <li class = "indent">Free-For-All : <?php echo $timeffaonline ?></li>
                        </ul>
                        Check AISIS for hold orders, clear them 1 week before online registration<br>
                        If you encounter any problems online, please proceed to manual registration (step 2)<br>
                        Proceed to payment (step 4) after printing assessment form (<a href="payment.php">Payment Options</a>)<br>
                        OAA scholars must have their assessment forms stamped by OAA before payment<br>
                        For other concerns check: <a href="faq.php">Frequently Asked Questions</a>
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
                        Dates: <!--?php echo $dateundergmanreg ?--><?php echo $datefreshmanreg ?><br>
                        Time: <?php echo $officehours ?> (July 27), <?php echo $sathours ?> (Aug 5 and 8) <br> 
                        Come during your <a href="batch.php">batch schedule</a>
                        <ul>Venues:
                           <li class = "indent">SOM (<?php echo $somwaitvenue ?>)</li>
                           <li class = "indent">SOH/SOSS (<?php echo $sohsosswaitvenue ?>)</li>
                           <li class = "indent">SOSE/Special Students (<?php echo $sosewaitvenue ?>)</li>
                        </ul>
                        For proxies check: <a href="proxy.php">Proxy Documents and Reminders</a>

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
                        Dates: <!--?php echo $dateundergmanreg ?--><?php echo $datefreshmanreg ?><br>
                        Time: <?php echo $officehours ?> (July 27), <?php echo $sathours ?> (Aug 5 and 8) <br> 
                        <ul>Venues:
                           <li class = "indent">SOM (<?php echo $somenlistvenue ?>)</li>
                           <li class = "indent">SOH/SOSS (<?php echo $sohsossenlistvenue ?>)</li>
                           <li class = "indent">SOSE/Special Students (<?php echo $soseenlistvenue ?>)</li>
                        </ul>
                        Make sure to have a back up schedule<br>
                        Make sure to have your assessment form before leaving the venue<br>
                        Printing of assessment form can only be done on your <a href="batch.php">scheduled date</a>
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
                            Date: <?php echo $dateoffcampusfresh ?> and <?php echo $dateoffcampus ?><br>
                            Details: <a href="payment.php">Off-campus payment options</a><br>
                            Official receipts will be available when class begins<br>
                        </p><br>
                        On-Campus Payment
                        <p class="indent">
                            Date: <?php echo $dateoncampusfresh ?> and <?php echo $dateoncampus ?><br>
                            Time: <?php echo $timeoncampusfresh ?><br>
                            Bring: Printed assessment form<br>
                            Details: <a href="paymentdetails.php">On-campus payment details</a>
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
                    <h3>ID Claiming</h3>
                    <p>
                        <strong>NO PROXIES for any ID matters</strong><br>
                        Date: <?php echo $freshiddate ?><br>
                        Time: <?php echo $officehours ?><br>
                        Venue: <strong><?php echo $idvenue ?></strong><br>

                        Tuition receipt is NOT needed for claiming your ID<br>
                        For those who paid online, you need not present a receipt as long as you come 2-3 banking days after payment<br>
                        Ateneo IDs are not needed during OrSem, any valid ID will do.<br>
                        Strict ID implementation: <?php echo $datestrictid ?><br>
                    </p>
                </div>
                <div style="clear:both;"></div>
            </div>
            <div class="nonsteps" style="margin-bottom:36px;">
                Printable pdf: <a href="<?php echo $link3bfresh ?>">Freshmen and Transfereess Registration Procedure</a>
            </div>
            <div style="clear:both;"></div>
            <a href="lateundergrad.php" class="next">Late Registration w/ Fine ></a>
            <div style="clear:both;"></div>
        </div>


<?php include('footer.php') ?>