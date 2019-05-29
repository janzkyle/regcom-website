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
        $("#lioffcamp").attr('class', 'sideactive');
    });
</script>

<div id="procedure" class="section wrap">
    <h1>Off-Campus Tuition Payment Option Summary</h1>
    
    <div class="nonsteps">
        <h3>Off-Campus Tuition Payment Options</h3>
        More detailed: <a href="<?php echo $link15onoff ?>">Payment Options On and Off Campus [pdf]</a><br><br>

        Please note that all Tuition payments made through online facilities may only be recognized after 2-3 banking days.
        <?php echo $offcampusnotes ?> <br><br>
        Therefore, make sure that you paid online or off-campus at least two banking days before first day of classes to avoid the late surcharge of Php 250.<br><br>
	ID application/validation for those who paid online or off-campus may also be done only after 2-3 banking days.<br><br>
        Tuition Receipt is downloadable from the AISIS on the 2nd banking day from the time payment is made following these steps:
        <ol>
        <li class = 'indent'> Log in to AISIS </li>
        <li class = 'indent'> Click ‘PRINT TUITION RECEIPT’ link </li>
        <li class = 'indent'> Choose school year and semester </li>
        <li class = 'indent'> Receipt may be viewed, printed or saved as PDF by clicking the corresponding links </li>
        </ol><br>
        For off-campus payments, Cashier will not print the Tuition Receipt. Only for those who paid on-campus will Cashier print the
        Tuition Receipt.<br><br>
        ID Application (the next registration procedure) will not require you to present your Official Receipt.<br><br>
    
        <strong>A. BDO BILLS PAYMENT FACILITY</strong><br>
        You need to be enrolled in BDO Internet Banking before you can access this facility. To enroll, please visit <a href="https://www.bdo.com.ph">BDO</a>.<br>
        <ol>
            <li class="indent">Via ATM</li>
            <li class="indent">Via Phone</li>
            <li class="indent">Via Internet (enrollment of merchant is required)</li>
        </ol><br>
        <strong>B. BDO – OVER-THE-COUNTER (OTC)</strong><br>
        BDO OTC offers payment of tuition in any BDO Branch. This is available whether or not you are a BDO account holder<br><br>
        
        <strong>C. BPI BILLS PAYMENT FACILITY</strong><br>
        This facility requires the enrollment of bills through BPI. Enrollment may be through phone (89-100), through branch of account (BOA) or through an online method at <a href="https://www.bpiexpressonline.com">BPI</a>.
        <ol>
            <li class="indent">Via ATM</li>
            <li class="indent">Via Phone</li>
            <li class="indent">Via Internet or EOL payment (express online payment)</li>
        </ol><br>
        <strong>D. BPI – OVER-THE-COUNTER (OTC)</strong><br>
        BPI OTC offers payment of tuition to any BPI Branch. This is available whether or not you are a BPI account holder.<br><br>
        
        <strong>E. METROBANK BILLS PAYMENT via Metrobankdirect</strong><br>
        You need to be enrolled in Metrobankdirect before you can access this facility. To enroll, please visit your Metrobank depository branch.<br><br>
        <strong>F. METROBANK – OVER-THE-COUNTER (OTC)</strong><br>
        Payment of tuition may be made in any Metrobank Branch via the OTC Facility. Metrobank account holders or not can pay via this facility.<br><br>
        
        <strong>G. UNIONBANK ONLINE PAYMENT</strong><br>
        Only ATM accounts can do online payment.<br><br>
        <strong>H. UNIONBANK – OVER-THE-COUNTER (OTC)</strong><br>
        Unionbank OTC offers payment of tuition to any Unionbank Branch. This is available whether or not you are a Unionbank account holder.<br><br>
        
        <h3>AISIS Linked Online Tuition Payment Options</h3>
        Please note that all Official Receipts paid through online facilities may only be claimed after 2 –3 banking days. <br><br>
        Present validated bank receipts AND confirmation acknowledgement receipt at window 1 of the Cashier’s Ground Office, Floor of Xavier Hall 
        <strong>after the manual registration days.</strong><br><br>
        <ul>
            <li><strong>A. BANCNET</strong></li>
            <li><strong>B. VISA/MASTERCARD</strong> - good for the 1st installment upon registration</li>
        </ul>
        
        Online payments only applicable during online and manual registration only.
    </div>
    
    <div style="clear:both;"></div>
    <a href="downloads.php" class="next">Downloads ></a>
    <div style="clear:both;"></div>
    
</div>

<?php include('footer.php') ?>