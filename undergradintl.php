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
        $("#liintl").attr('class', 'sideactive');
    });
</script>

<div id="procedure" class="section wrap">
    <h1>Undergraduate International Exchange Students</h1>
    <div class="panel">
        <div class="imageicon">
            <h3>Step 1</h3>
            <img src="images/onlinereg.png" height="100">
        </div>
        <div class="description">
            <h3>AISIS Online Enlistment and Assessment</h3>
            <p>
                Check: <a href="batch.php">Batch Schedule</a><br>
                Date: <?php echo $dateintlonline ?> <br>
                <ul>Time: <?php echo $timeintlonline ?>; <?php echo $timeffaonline ?>
                   <!--li class = "indent"></li-->
                </ul>
                Check AISIS for hold orders, clear them 1 week before online registration<br>
                If you encounter any problems online, please proceed to manual registration (step 2)<br>
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
                Dates: <?php echo $dateintlmanreg ?> <br>
                Time: <?php echo $timeintlmanreg ?>  <br>
                Venue: <?php echo $intlwaitvenue ?>  <br>
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
                Dates: <?php echo $dateintlmanreg ?> <br>
                Time: <?php echo $timeintlmanreg ?>  <br>
                Venues: <?php echo $intlwaitvenue ?> <br>
                Make sure to have a back up schedule <br>
                Make sure you save your assessment form and send it via email to the 
                International Exchange Student Coordinator (jcervantes@ateneo.edu) 
                to signify completion of the enlistment process before leaving the venue<br>
                Printing of assessment form can only be done on your <a href="batch.php">scheduled date</a>
            </p>
        </div>
        <div style="clear:both;"></div>
    </div>
    
    <div class="panel">
        <div class="imageicon">
            <h3>Step 4</h3>
            <img src="images/id.png" height="100">
        </div>
        <div class="description">
            <h3>ID Application / Validation</h3>
            <p>
                <strong>ALL students are REQUIRED to apply for a new ID</strong><br>
                <strong>NO PROXIES for any ID matters</strong><br>
                Date: <?php echo $iddateintl ?><br>
                Time: <?php echo $idtime ?>    <br>
                Venue: <?php echo $idvenue ?>  <br>
                You ARE NOT OFFICIALLY ENROLLED if you haven’t validated your ID<br>
                Strict ID implementation: <?php echo $datestrictid ?><br><br>
                <?php echo $idnotes ?><br>
            </p>
        </div>
        <div style="clear:both;"></div>
    </div>
        
    <div class="nonsteps" style="margin-bottom:36px;">
        Printable pdf: <a href="<?php echo $link3cintl ?>">Undergraduate International Exchange Registration Procedure</a>
    </div>
    <div style="clear:both;"></div>
    <a href="lateundergrad.php" class="next">Late Registration w/ Fine ></a>
    <div style="clear:both;"></div>
    
</div>


<?php include('footer.php') ?>