<?php $accordionhtml = "$( '#accordion' ).accordion({active: 2});" ?>

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
        $("#lioncamp").attr('class', 'sideactive');
    });
</script>

        <div id="procedure" class="section wrap">
            <h1>On-Campus Tuition Payment Details</h1>
            <div class="nonsteps">
                <h3>On-Campus Tuition Payment Options</h3>
                Tuition and Fees may be paid at the Cashier’s Office at the Ground Floor of Xavier Hall, windows 3-7, from 8:00 AM to 4:00 PM, Monday to Friday, and from 8:00 AM to 12:00 NN on Saturday.<br><br>
                <strong>A. CASH/CHECK</strong><br>
                Check should be made payable to Ateneo de Manila University. Write down the following details at the back of the check: Student’s Complete Name, Student No., Year Level and Course, and Contact Details. Checks with erasure/alteration in date, payee’s name and amount in words and in figures will not be accepted even if countersigned by the issuer.<br><br>
                <strong>B. DEBIT CARDS</strong><br>
                Bancnet, Megalink, & Expressnet Debit Cards may be used in place of check or cash. Point of Sale (POS) terminals are available. There’s no need to issue a check against an ATM account nor bring cash.<br><br>
                <strong>C. ACCEPTABLE CREDIT CARDS</strong><br>
                <ol>
                    <li class="indent">Visa and Mastercard</li>
                </ol>
                <br><br>

                <h3>Manual Registration On-Campus Payment Schedule</h3>
                Date: <?php echo $dateoncampus ?><br>
                Time: <?php echo $timeoncampus ?><br>
                
                <p><strong>Xavier Hall, 1st Floor </strong></p>
                <ol>
                    <li class="indent">Cash</li>
                    <li class="indent">Cash/Check</li>
                </ol>
                <p><strong>Berchmans Hall, Room 106, 1st Floor</strong></p>
                <ol>
                    <li class="indent">Check</li>
                    <li class="indent">Credit Card Combinations</li>
                    <li class="indent">Zero-payment Scholars</li>
                    <li class="indent">Debit Cards</li>
                </ol>
*Note: Berchmans 106 is only available during manual registration dates. All transactions in other dates are done in Xavier Hall.<br>
                <strong>Checks must have the following information listed at the back:</strong>
                <ul>
                    <li class="indent">Student’s Complete Name</li>
                    <li class="indent">Year and Course</li>
                    <li class="indent">Student ID Number</li>
                    <li class="indent">Contact Details</li>
                </ul>
            </div>
            <div style="clear:both;"></div>
            <a href="payment.php" class="next">Payment Options ></a>
            <div style="clear:both;"></div>
        </div>
<?php include('footer.php') ?>