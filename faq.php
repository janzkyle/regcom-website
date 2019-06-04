<?php $accordionhtml = "$( '#accordion' ).accordion();" ?>

<?php include('header.php') ?>
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
        $("#lifaqs").attr('class', 'active');
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

    <h1>Frequently Asked Questions</h1>
    <div class="questioncontain">
        <div>
            <div class="question wrap">
                <a onclick="toggle_visibility('one');"><button>I want to get my ID validated. What are the things that I need to get this accomplished?</button></a>
                <div id="one">
                    None. Just make sure you have paid for your tuition. If you paid off-campus (and online), you have to wait for two to three (2-3) banking days before validating your ID.
                </div>
            </div>
            <div class="question wrap">
                <a onclick="toggle_visibility('two');"><button>How can I obtain a load revision form?</button></a>
                <div id="two">
                    A load revision form can be downloaded only once through your aisis account. In the case that you weren't able to save a copy, please proceed to Associate Dean for Academic Affairs (ADAA) or Registrar's Office (R.O.)
                </div>
            </div>
        </div>

        <div>  
            <div class="question wrap">
                <a onclick="toggle_visibility('three');"><button>What are the downloadable forms available on the Ateneo Integrated Student Information System (AISIS)?</button></a>
                <div id="three">
                    There are two forms. One is the Load Revision Form. The load revision form is for adding/withdrawing classes, changing sections, and changing of subject status. Lastly, the second is the form for change of degree program/application for minor or specialization. 
                </div>
            </div>
            <div class="question wrap">
                <a onclick="toggle_visibility('four');"><button>How can I obtain my tuition receipt?</button></a>
                <div id="four">
                     Your tuition receipt will be available on aisis (after 2-3 banking days for off-campus payments). If you paid on-campus, the cashier will also print one for you.
                </div>
            </div>
        </div>

        <div>  
            <div class="question wrap">
                <a onclick="toggle_visibility('five');"><button>I enlisted but did not confirm</button></a>
                <div id="five">
                    Enlistment cannot be completed without confirmation. If you do not confirm, your slots will not be registered and you will not be officially enrolled in the classes you chose. To avoid losing your slots, and losing the classes you want, click the confirm button after choosing your classes. You may print your assessment form afterwards.
                </div>
            </div>
            <div class="question wrap">
                <a onclick="toggle_visibility('six');"><button>I am a non-degree student and I need to get my undergrad forms. I am lost and do not know where to go.</button></a>
                <div id="six">
                    Students that require special assistance are required to go to the venue for SOSE Enlistment. Non-degree students, as well as those returning from LOA, may go to the SOSE Enlistment venue during manual registration to enlist.
                </div>
            </div>
        </div>

        <div>
            <div class="question wrap">
                <a onclick="toggle_visibility('seven');"><button>I went to print my assessment form in the accounting office.</button></a>
                <div id="seven">
                    Printing  of  assessment  forms  are  not  done  in  the  Accounting  Office. You should go to the enlistment venues, instead. You may print your assessment form during assigned manual registration dates in the designated venue assigned to your school. Make sure that you have already completed the enlistment process and only require the printed version of the assessment form. People who only need to print their assessment form do not need to follow the batching schedule. 
                </div>
            </div>
            <div class="question wrap">
                <a onclick="toggle_visibility('eight');"><button>I am not part of the varsity team of any sports yet I enlisted in a varsity subject.</button></a>
                <div id="eight">
                    Students  who  are  part  of  the  varsity  of  any  sport  are  entitled  to  a  special  Physical  Education  subject wherein only varsity players can enter and enlist in (PE261, PE262, PE263, and PE264). Only the regular PE subjects are available to those who are not part of any varsity team and they should get that PE. If it turns out that they were not able to enlist in a regular PE and mistakenly enlisted in a varsity class PE, then the problem can be fixed during the start of manual enlistment.
                </div>
            </div>
        </div>

        <div>
            <div class="question wrap">
                <a onclick="toggle_visibility('nine');"><button>I belong to the 1st batch. I went to school for manual registration at 8:00 in the morning but they told me I could not enlist yet.</button></a>
                <div id="nine">
                    The  batching  system  during  the  manual  registration  period  is  different  from  that  of  the  online  enlistment process. To  avoid  confusion,  please  check  your <a href="batch.php">batch  number  and the  corresponding  batch  schedule  for manual registration</a>.
                </div>
            </div>
            <div class="question wrap">
                <a onclick="toggle_visibility('ten');"><button>I do not know what paired subjects mean. I enlisted in different sections for EN11 and LIT13</button></a>
                <div id="ten">
                    Subjects  such  as  English  and  Literature,  and  Science  subjects  with  both  Lecture  and  Laboratory,  are considered  paired  subjects.  Students  are  required  to  be  a  part  of  only  one  section for  paired  subjects  so they must make sure that they do not enlist in different sections. 
                </div>
            </div>
        </div>

        <div>
            <div class="question wrap">
                <a onclick="toggle_visibility('eleven');"><button>I think I might have more units than I need. I will have to enlist manually to take some subjects out.</button></a>
                <div id="eleven">
                    For  freshmen  and  sophomores,  NSTP,  PE  and  INTAC  are  non-academic  courses  and  as  such,  they  are not included in the academic load. Even if you enlist for these classes, you will not be overloaded and you will be able to complete the enlistment process. On the other hand, juniors, seniors, and superseniors who still have to enlist in NSTP, PE, or INTAC will have these courses added to their academic load. 
                </div>
            </div>
            <div class="question wrap">
                <a onclick="toggle_visibility('twelve');"><button>I started processing my load revision forms during manual registration to save time.</button></a>
                <div id="twelve">
                    Load revision forms can be obtained during the manual registration period, upon presentation of the tuition receipt or acknowledgment receipt. However, the processing of these load revision forms can only be done once classes for the semester have begun.<br>
                    For more details on the process of load revision, please refer to the <a href="loadrev.php">Load Revision Schedule.</a>
                </div>
            </div>
        </div>

    </div>
</div>
    
<?php include('footer.php') ?>
