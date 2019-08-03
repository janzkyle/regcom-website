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
        $("#liremind").attr('class', 'sideactive');

    });
</script>

<div class="container section wrap" style="margin-top:51px; min-height:80vh;">
	<div class="nonsteps">
        <center><h1>Reminders</h1></center>
        <h3>AISIS ONLINE ENLISTMENT</h3>
        <ol class="reminder">
            <li><strong>Clear your hold orders AS SOON AS POSSIBLE.</strong> Students with hold orders cannot enlist online. You need to clear and lift your hold order with the concerned office/s before you can avail of internet enlistment and regular registration. Do this at least 1 week before online registration.</li>
            <li><strong>Make sure you remember your AISIS username and password.</strong> In case you forgot your password, you may request for a new one on <a href="http://aisisonline.ateneo.edu">AISIS Online</a>.</li>
            <li><strong>Reinstated Graduate students and students coming from LOA</strong> should proceed to the Office of the Registrar (Social Sciences Bldg., 1st Floor) 1 week before online registration to have their clearance and AISIS account activated. </li>
			<li><strong>Plan your schedules and make sure to have back-up schedules.</strong> This will help you enlist faster, in case the classes you have chosen are already closed. </li>            
			<!--li><strong>Special (non-degree, cross registrants and auditors) undergraduate students</strong> must submit their required documents to the Associate Dean of Academic Affairs 1 week before online registration.</li-->
            <li>Immediately click the <strong>“Confirm Enlistment” button</strong> every time you enlist in a class. Then go back to enlist for your other classes. Repeat until you have enlisted in all your classes.</li>
            <li>After enlisting your classes online and printing your Assessment Form, you may proceed directly to tuition payment. (See the Tuition Payment Options document for more details) <strong>Remember to check your enlisted subjects at the bottom of the form.</strong> (See the Sample Assessment Form)</li>
            <li><strong>Printing of Assessment Forms can only be done during your scheduled online enlistment time-slot,</strong> during the online Free-For-All schedule, or during the manual registration dates.</li>
            <li>
                To avoid long lines in the Cashier, pay online through the Electronic Payment System of: 
                <ul class="indent">
                    <li style="padding-bottom:0px">a. <a href="http://www.bpiexpressonline.com">BPI Express Online</a></li>
                    <li style="padding-bottom:0px">b. <a href="http://www.bdo.com.ph">BDO</a></li>
					<li style="padding-bottom:0px">c. <a href="https://personal.metrobankdirect.com">Metrobank</a></li>
					<li style="padding-bottom:0px">d. <a href="www.unionbankph.com">Unionbank</a></li>
                </ul>
                Make sure that you have paid online at least <strong>two banking days before <?php echo $dateffamanreg ?></strong>, and <strong>before applying for or validating your ID</strong>.<br>
                The Tuition Receipt is downloadable from AISIS on the 2nd banking day from the time payment was made.
				<strong>For off-campus payments</strong>, Cashier will not print the Tuition Receipt. Cashier will print the Tuition Receipt <strong>only for those who paid on-campus</strong>.
            </li>
            <li>
                If you opt to pay through check, checks should be addressed to <strong>Ateneo de Manila University</strong> and should specify the amount you are going to pay. Also, write the following at the back of the check before proceeding to the cashier stop. 
                <ul class="indent">
                    <li style="padding-bottom:0px">Name</li>
                    <li style="padding-bottom:0px">ID Number</li>
                    <li style="padding-bottom:0px">Year and Course</li>
                    <li style="padding-bottom:0px">Contact Information </li>
                </ul>
            </li>
            <li>You may also opt to pay over-the-counter or through other channels. See Tuition Payments documents for a more comprehensive list.</li>
            <!--li>If not required or needed (i.e. for Load Revision), the tuition receipt may be claimed from the cashier after late registration period.</li-->
            <li>After paying, <strong> check your enlisted subjects at the bottom of the receipt.</strong> This is to ensure that you are officially enrolled in the correct subjects. (See the Sample Tuition Fee Receipt)</li>
            <li>Remember to enlist in <strong>ALL advised subjects</strong> before proceeding to payment.</li>
        </ol>
        <h3>MANUAL REGISTRATION</h3>
        <ol class="reminder">
            <li>Before proceeding to Manual Registration, indicate all problems (e.g. no slots, conflict, etc.) with your enlistment in the <a href="http://reg-system-server.herokuapp.com/" target="_blank">Manual Registration System.</a>
			<li><strong>No ID, No REG.</strong> ID is strictly Ateneo ID or any ID with picture and signature (e.g. Driver’s License, Voter’s ID,Passport, etc.)</li>
            <li>For Undergraduates, the batch number for manual registration is different from the batch number for online enlistment. </li>
            <li>Come at your assigned manual registration enlistment schedule and proceed to your school’s assigned waiting area. All students must go through this. See Registration Procedures and Enlistment Schedule documents for this. </li>
            <li>
                Students from the <strong>John Gokongwei School of Management</strong> must observe the proper <strong>JGSOM Dress Code.</strong> LS students proxying for JGSOM students must also observe the proper JGSOM Dress Code. 
                <table class="dresscode">
                    <thead>
                        <td>Females</td>
                        <td>Males</td>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                No slippers. No open-toed footwear without back straps or heels<br>
                                No strapless, backless, belly-baring or spaghetti blouses with plunging necklines, micro-mini skirts, short shorts, low-slung pants, and skirts with very high slits
                            </td>
                            <td>
                                No muscle shirts, sandos and half-shirts<br>
                                No athletic shorts<br>
                                No slippers
                            </td>
                        </tr>
                    </tbody>
                </table>
            </li>
            <li>Proxying for undergraduate students is done on a 1 is to 1 ratio. Proxies must have their required documents in order to proxy. See Proxying Guidelines for instructions.</li>
            <li>Special (non-degree, cross registrants and auditors) undergraduate students must submit their required documents to the Associate Dean of Academic Affairs 1 week before</li>
            <li>Printing of Assessment Forms can only be done during your scheduled online enlistment time-slot, during the online Free-For-All schedule, or during your batch’s schedule. <strong>Remember to</strong> manually <strong>check your enlisted subjects at the bottom of the Assessment Form.</strong> (See the Sample Assessment Form)</li>
				<ul class="indent">
					<li style="padding-bottom:0px">a. Students can still print their assessment forms outside the campus as long as it is NOT their manual registration schedule or the online enlistment schedule of other year levels.</li>
				</ul>
			<li>Students may opt to pay online and over the counter at various channels in order to avoid long lines. See Tuition Payments Options for a more comprehensive list.</li>
            <li>After paying, <strong>check your officially enrolled subjects at the bottom of the receipt.</strong> This is to ensure that you are officially enrolled in the correct subjects. (See the Sample Tuition Fee Receipt) </li>
            <li>No proxies are allowed during ID application and validation.</li>
            <li>No Temporary IDs will be issued during Regular Registration on <?php echo $dategradmanreg ?>, <?php echo $datefreshmanreg ?>, <?php echo $dateffamanreg ?>. All students are advised to bring their old school ID’s time or any valid government-issued ID for registration.</li>
            <li>Students of Loyola School of Theology will have a delayed ID validation schedule which will be announced by the Associate Dean for Graduate Programs.</li>
            <li>Students should update their AISIS Contact information before enlistment to avoid any inconvenience. Important fields are current Mobile No., Parents contact information and Emergency contact information.</li>
				<ul class = "indent">
					<li style="padding-bottom:0px">a. Students may opt to update their student information after the release of their grades for the previous semester.</li>
					<li style="padding-bottom:0px">b. Students must update their information at least 1 week before the online registration.
				</ul>
			<li>Schedule for ID releasing for Upperclassmen and Graduate Students will be posted at the OSS Bulletin Board at Xavier Hall and on the Ateneo Student Blue Board on Facebook (<a href="http://www.facebook.com/AteneoSBB">www.facebook.com/AteneoSBB</a>).</li>
			<li>Strict ID-wearing Rule for <?php echo $semester ?> will be implemented on <?php echo $datestrictid ?>.</li>
        </ol>
    </div>
</div>
<?php include('footer.php') ?>