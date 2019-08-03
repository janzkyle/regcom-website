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
                Enlistment cannot be completed without confirmation. If you do not confirm, your slots will not be registered and you will not be officially enrolled in the classes you chose. 
                People often lose their slots because they do not confirm and wrongly believe that they have completed the online enlistment process. If this happens to you, 
                it may cause you to have to go to manual registration and enlist again. To avoid losing your slots, and losing the classes you want, click the confirm button after choosing your classes. You may print your assessment form afterwards.
                </div>
            </div>
            <div class="question wrap">
                <a onclick="toggle_visibility('six');"><button>I am a non-degree student and I need to get my undergrad forms. I am lost and do not know where to go.</button></a>
                <div id="six">
                    Students that require special assistance are to go to Associate Dean of Academic Affairs (ADAA). Non-degree, cross registrants, and audit students may go to the ADAA during 
                    manual registration to enlist. The people inside that venue will know how to direct you through the steps of enlistment.
                </div>
            </div>
        </div>

        <div>
            <div class="question wrap">
                <a onclick="toggle_visibility('seven');"><button>I went to print my assessment form in the accounting office.</button></a>
                <div id="seven">
                    Printing of assessment forms are not done in the Accounting Office. You should go to the assessment venue, instead. <b>You may print your assessment form at <?php echo $assessmentvenue ?></b>.
                    Make sure that you have already completed the enlistment process and only require the printed version of the assessment form. You can also print your assessment forms outside the campus if it is NOT the day of your scheduled manual registration or the enlistment schedule of other year levels.
                </div>
            </div>
            <div class="question wrap">
                <a onclick="toggle_visibility('eight');"><button>I am not part of the varsity team of any sports yet I enlisted in a varsity subject.</button></a>
                <div id="eight">
                Students who are part of the varsity of any sport are entitled to a special Physical Education subject wherein only varsity players can enter and enlist in 
                (PHYED 171, PHYED 171.10, PHYED 171.20, and PHYED 171.30). Only the regular PE subjects are available to those who are not part of any varsity team and they should get that PE. 
                If it turns out that they were not able to enlist in a regular PE and mistakenly enlisted in a varsity class PE, then the problem can be fixed during the start of manual enlistment.
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
                <a onclick="toggle_visibility('ten');"><button>I do not know what paired subjects mean. I enlisted in different sections for BIO 11.01 and BIO 11.02.</button></a>
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
    <br>

</div>
    
<?php include('footer.php') ?>
