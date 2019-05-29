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

    <div class="container section wrap" style="margin-top:50px;">
        <div class="suggest">
            <!--<iframe src="https://docs.google.com/forms/d/1bve9FlZx_hqT4_eus09oaAzOqy_cQFcqQJes6R8I8SE/viewform?embedded=true" width="80%" height="1020" frameborder="0" marginheight="0" marginwidth="0" scrolling="no">Loading...</iframe>-->
            <h1>Suggestion Box</h1>
<!--<form action="https://docs.google.com/forms/d/1bve9FlZx_hqT4_eus09oaAzOqy_cQFcqQJes6R8I8SE/formResponse" method="POST" id="ss-form" target="_self" onsubmit="">-->

    <script type="text/javascript">var submitted=false;</script>
    <iframe name="hidden_iframe" id="hidden_iframe"
    style="display:none;" onload="if(submitted)
    {window.location='thanks.php';}"></iframe>
    <form action="https://docs.google.com/forms/d/e/1FAIpQLSeSwwKarTHklt6GIQqwemhZvrf75YJVUKgbIbVFIgvE4Xh9xQ/formResponse" method="POST" target="_self"
 onsubmit="submitted=true;">
    <ol role="list" class="ss-question-list" style="padding-left: 0">

    <div class="ss-form-question errorbox-good" role="listitem">

    <div dir="ltr" class="ss-item ss-item-required ss-paragraph-text">

    <div class="ss-form-entry">

    <label class="ss-q-item-label" for="entry_517440048">
    <div style="color: #e31b23; text-align:left;">*Required</div>
    <div style="text-align:left" class="ss-q-title">Hi! Please help us improve our service to you by giving us comments, suggestions, and stories about your experiences on the whole registration process, from AISIS online enlistment to manual registration. :)

    <label for="itemView.getDomIdToLabel()" aria-label="(Required field)"></label>

    <span style="color: #e31b23;" class="ss-required-asterisk" aria-hidden="true">*</span>
    </div>

    <div class="ss-q-help ss-secondary-text" dir="ltr"></div>
    </label>

    <textarea style="width:100%; border: 1px solid #eaeaea; margin: 24px 0;" name="entry.517440048" rows="8" cols="0" class="ss-q-long" id="entry.517440048" dir="auto" aria-label="Hi! Please help us improve our service to you by giving us comments, suggestions, and stories about your experiences on the whole registration process, from AISIS online enlistment to manual registration. :)" aria-required="true" required=""></textarea>

    <div class="error-message" id="1943720162_errorMessage"></div>

    </div>
    </div>
    </div> 

    <div class="ss-form-question errorbox-good" role="listitem">

    <div dir="ltr" class="ss-item ss-item-required ss-radio">

    <div style="text-align:left; margin-bottom: 24px;" class="ss-form-entry">

    <label class="ss-q-item-label" for="entry_1639030551"><div class="ss-q-title">Manual Registration Venue (if applicable):

    <label for="itemView.getDomIdToLabel()" aria-label="(Required field)"></label>

    <span style="color: #e31b23;" class="ss-required-asterisk" aria-hidden="true">*</span>
    </div>

    <div class="ss-q-help ss-secondary-text" dir="ltr"></div></label>

    <ul style="list-style:none;" class="ss-choices" role="radiogroup" aria-label="Manual Registration Venue (if applicable):  ">
        <li class="ss-choice-item">
            <label>
                <span class="ss-choice-item-control goog-inline-block">
                    <input type="radio" name="entry.1639030551" value="SOSE" id="group_1805595364_1" role="radio" class="ss-q-radio" aria-label="SOSE" required="" aria-required="true">
                </span>
    <span class="ss-choice-label">SOSE</span>
    </label>
    </li> 
    <li class="ss-choice-item">
        <label>
            <span class="ss-choice-item-control goog-inline-block">
                <input type="radio" name="entry.1639030551" value="SOM" id="group_1805595364_2" role="radio" class="ss-q-radio" aria-label="SOM" required="" aria-required="true"></span>
    <span class="ss-choice-label">SOM</span>
    </label>
    </li> 
    <li class="ss-choice-item">
        <label>
            <span class="ss-choice-item-control goog-inline-block">
                <input type="radio" name="entry.1639030551" value="SOH/SOSS" id="group_1805595364_3" role="radio" class="ss-q-radio" aria-label="SOH/SOSS" required="" aria-required="true"></span>
    <span class="ss-choice-label">SOH/SOSS</span>
    </label>
    </li> 
    <li class="ss-choice-item">
        <label>
            <span class="ss-choice-item-control goog-inline-block">
                <input type="radio" name="entry.1639030551" value="Graduate Schools" id="group_1805595364_4" role="radio" class="ss-q-radio" aria-label="Graduate Schools" required="" aria-required="true"></span>
    <span class="ss-choice-label">Graduate Schools</span>
    </label>
    </li> 
    <li class="ss-choice-item">
        <label>
            <span class="ss-choice-item-control goog-inline-block">
                <input type="radio" name="entry.1639030551" value="__other_option__" id="group_1805595364_5" role="radio" class="ss-q-radio ss-q-other-toggle" required="" aria-required="true"></span>
    <span class="ss-choice-label">Other:</span>
    </label>    
    <span class="ss-q-other-container goog-inline-block">
        <input type="text" name="entry.1639030551.other_option_response" value="" class="ss-q-other" id="entry_1805595364_other_option_response" dir="auto" aria-label="Other"></span>
    </li>
    </ul>
    <div class="error-message" id="1516489413_errorMessage"></div>
    </div>
    </div>
    </div> 

    <div class="ss-form-question errorbox-good" role="listitem">

    <div style="text-align:left; margin-bottom:24px;" dir="ltr" class="ss-item  ss-date"><div class="ss-form-entry">

    <label class="ss-q-item-label" for="entry_1223340531"><div class="ss-q-title">Date (if applicable):
    </div>

    <div class="ss-q-help ss-secondary-text" dir="ltr"></div></label>

    <div class="ss-q-date" role="group" aria-label="Date (if applicable):  "><div class="ss-datetime-box goog-inline-block" role="group"> 

    <select type= "date" tabindex="0" name="entry.1223340531_month" class="ss-month-dropdown" id="entry.1223340531_month" aria-label="Month"><option value="">Month</option>

     <option value="1">January</option>
     <option value="2">February</option>
     <option value="3">March</option>
     <option value="4">April</option>
     <option value="5">May</option>
     <option value="6">June</option>
     <option value="7">July</option>
     <option value="8">August</option>
     <option value="9">September</option>
     <option value="10">October</option>
     <option value="11">November</option>
     <option value="12">December</option>
    </select>   

    <select name="entry.1223340531_day" class="ss-day-dropdown" id="entry.1223340531_day" aria-label="Day of month">
        <option value="">Day</option>

     <option value="1">1</option>
     <option value="2">2</option>
     <option value="3">3</option>
     <option value="4">4</option>
     <option value="5">5</option>
     <option value="6">6</option>
     <option value="7">7</option>
     <option value="8">8</option>
     <option value="9">9</option>
     <option value="10">10</option>
     <option value="11">11</option>
     <option value="12">12</option>
     <option value="13">13</option>
     <option value="14">14</option>
     <option value="15">15</option>
     <option value="16">16</option>
     <option value="17">17</option>
     <option value="18">18</option>
     <option value="19">19</option>
     <option value="20">20</option>
     <option value="21">21</option>
     <option value="22">22</option>
     <option value="23">23</option>
     <option value="24">24</option>
     <option value="25">25</option>
     <option value="26">26</option>
     <option value="27">27</option>
     <option value="28">28</option>
     <option value="29">29</option>
     <option value="30">30</option>
     <option value="31">31</option>
    </select> 

    <div class="ss-datetime-box-spacer goog-inline-block"></div>
    </div>
    </div>
    </div>
    </div>
    </div>
    <input type="hidden" name="draftResponse" value="[,,&quot;6243019982391559902&quot;]
    ">
    <input type="hidden" name="pageHistory" value="0">


    <input type="hidden" name="fbzx" value="6243019982391559902">

    <div class="ss-item ss-navigate">
        <table id="navigation-table">
        <tbody>
            <tr>
                <td class="ss-form-entry goog-inline-block" id="navigation-buttons" dir="ltr">
                    <div>
                        <input style="padding: 12px; background-color:#2366c9; color: #ffffff; border: none; width: 200px;font-family: 'OpenSans-Semibold', sans-serif; cursor:pointer;" type="submit" name="submit" value="Submit" id="ss-submit" class="jfk-button jfk-button-action ">
                    </div>
                </td>
            </tr>
        </tbody>
        </table>
    </div>
    </ol>
    </form>
        <!--end of form/suggestion box-->
        </div>
        <div style="clear:both"></div>
    </div>
    <?php include('footer.php') ?>

    </body>
    <script type="text/javascript">
        function toggle_visibility(id) {
           var e = document.getElementById(id);
           if(e.style.display == 'block')
              e.style.display = 'none';
           else
              e.style.display = 'block';
        }
    </script>
    </body>
</html>