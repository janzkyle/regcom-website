<?php $accordionhtml = "$( '#accordion' ).accordion({active: 4});" ?>

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
        $("#liloadrev").attr('class', 'sideactive');
    });
</script>

<div id="procedure" class="section wrap" style="min-height: 80vh;">
    <h1 style="margin-bottom: 0;">Load Revision Schedule</h1>
    <p><center style="margin-bottom: 24px;"><?php echo $semester ?></center></p>
    <div class="nonsteps">
         <div class="tablecontain">
            <table class="loadrev">
                <tbody>
                <h2>Load Revision Deadlines</h2>
                    <tr>
                        <td style="padding-top: 24px;" class="subtitle"><?php echo $deadlineloadrev1 ?></td>
                        <td style="padding-top: 24px;" class="subtitle"><?php echo $deadlineloadrev1day ?>
                    </tr>
                    <tr>
                        <td>
                            <span class="underline">Time:</span><br>
                            <?php echo $officehours ?><br><br>
                            <span class="underline">Venue:</span><br>
                            <?php echo $loadrevvenue ?>
                        </td>
                        <td>
                            <strong>Load Revision forms are now available in your AISIS account</strong><br>
                            Deadline of the submission of completed load revision form for undergraduate and graduate students<br>
                            <div class="indent">
                                - Withdrawal/Addition of course(s)<br>
                                - Change of section<br>
                                - Change of subject from audit to credit<br>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td style="padding-top: 24px;" class="subtitle"><?php echo $deadlineloadrev2 ?></td>
                        <td style="padding-top: 24px;" class="subtitle"><?php echo $deadlineloadrev2day ?>
                    </tr>
                    <tr>
                        <td>
                            <span class="underline">Time:</span><br>
                            <?php echo $officehours ?><br><br>
                            <span class="underline">Venue:</span><br>
                            <?php echo $loadrevvenue ?>
                        </td>
                        <td>
                            Deadline of the submission of completed load revision form for undergraduate and graduate students<br>
                            <div class="indent">
                                -  Changing of status from Credit to Audit
                            </div>
                           
                        </td>
                    </tr>

                    <tr>
                        <td style="padding-top: 24px;" class="subtitle"><?php echo $deadlineloadrev3 ?></td>
                        <td style="padding-top: 24px;" class="subtitle"><?php echo $deadlineloadrev3day ?>
                    </tr>
                    <tr>
                        <td>
                            <span class="underline">Time:</span><br>
                            <?php echo $sathours ?><br><br>
                            <span class="underline">Venue:</span><br>
                            <?php echo $loadrevvenue ?>
                        </td>
                        <td>
                            Deadline of the submission of completed load revision form for undergraduate and graduate students<br>
                            <div class="indent">
                                - Withdrawal from a Class with Permission<br>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
                        
                <table class="loadrev">
                    <tbody>
                    <h2>Form for Change of Degree Program or Application for Minor/Specialization</h2>
                        <tr>
                        <td style="padding-top: 24px;" class="subtitle"><?php echo $deadlineloadrev1 ?></td>
                        <td style="padding-top: 24px;" class="subtitle"><?php echo $deadlineloadrev1day ?></td>
                        </tr>    
                    <tr>    
                        <td>
                            <span class="underline">Time:</span><br>
                                <?php echo $officehours ?><br><br>
                                <span class="underline">Venue:</span><br>
                                <?php echo $loadrevvenue ?>
                            </td>
                        <td>
                            Deadline of the submission of completed load revision form for undergraduate and graduate students<br>
                            <div class="indent">
                                    - Change of degree program
                            </div>
                    
            			</td>              
                 	</tr>
                	</tbody>
            </table>
        </div>
        <h4>*Note: there is no deadline for application of minor/specialization </h4><br><br>
        <p class="detail" style="width: 80%">Load revision forms can be obtained from your AISIS Account. However, <strong>the processing of these load re
        vision forms can only be done once the Second Semester has begun.</strong></p>
    </div>
        
    <div class="nonsteps" style="margin-bottom:36px;">
        Printable pdf: <a href="<?php echo $link10loadrev ?>">Load Revision Procedure</a>
    </div>
    
    <a href="map.html" class="next">Campus Map ></a>
    <div style="clear:both;"></div>
</div>


<?php include('footer.php') ?>