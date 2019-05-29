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
        $("#limap").attr('class', 'sideactive');
    });
</script>



<div id="procedure" class="section wrap" style="min-height: 80vh;">
            <h1>Campus Map</h1>
            <img class="fancybox" src="images/map.png" width="100%">
            <div class="nonsteps">
                <h3>Loyola School Departments and Location</h3>
                <div class="tablecontain">
                    <table class="department">
                        <tbody>
                            <tr>
                                <td class="subtitle">Department</td>
                                <td class="subtitle">Building</td>
                                <td class="subtitle">Floor</td>
                            </tr>
                            <tr>
                                <td>Asian Studies</td>
                                <td>Leong Hall</td>
                                <td>2nd</td>
                            </tr>
                            <tr>
                                <td>Biology</td>
                                <td>SEC bldg A</td>
                                <td>1st</td>
                            </tr>
                            <tr>
                                <td>Chemistry</td>
                                <td>Schmitt Bldg</td>
                                <td>1st</td>
                            </tr>
                            <tr>
                                <td>Chinese Studies</td>
                                <td>Leong Hall</td>
                                <td>2nd</td>
                            </tr>
                            <tr>
                                <td>Communications</td>
                                <td>Social Sciences Bldg</td>
                                <td>3rd</td>
                            </tr>
                            <tr>
                                <td>Computer Science (DISCS)</td>
                                <td>Faura Hall</td>
                                <td>2nd</td>
                            </tr>
                            <tr>
                                <td>Development Studies</td>
                                <td>Leong Hall</td>
                                <td>4th</td>
                            </tr>
                            <tr>
                                <td>ECCE</td>
                                <td>PLDT-CTC</td>
                                <td>3rd</td>
                            </tr>
                            <tr>
                                <td>Economics</td>
                                <td>Leong Hall</td>
                                <td>4th</td>
                            </tr>
                            <tr>
                                <td>Education</td>
                                <td>Social Sciences Bldg</td>
                                <td>3rd</td>
                            </tr>
                            <tr>
                                <td>English</td>
                                <td>Dela Costa</td>
                                <td>1st</td>
                            </tr>
                            <tr>
                                <td>Environmental Science</td>
                                <td>Manila Observatory</td>
                                <td>3rd</td>
                            </tr>
                            <tr>
                                <td>European Studies</td>
                                <td>Leong Hall</td>
                                <td>3rd</td>
                            </tr>
                            <tr>
                                <td>Filipino</td>
                                <td>Dela Costa</td>
                                <td>3rd</td>
                            </tr>
                            <tr>
                                <td>Fine Arts</td>
                                <td>Arete</td>
                                <td>2nd</td>
                            </tr>
                            <tr>
                                <td>Health Sciences</td>
                                <td>PLDT-CTC</td>
                                <td>4th</td>
                            </tr>
                            <tr>
                                <td>History</td>
                                <td>Leong Hall</td>
                                <td>2nd</td>
                            </tr>
                            <tr>
                                <td>Interdisciplinary Studies</td>
                                <td>Dela Costa</td>
                                <td>2nd</td>
                            </tr>
                            <tr>
                                <td>Japanese Studies</td>
                                <td>Leong Hall</td>
                                <td>2nd</td>
                            </tr>
                            <tr>
                                <td>Korean Studies</td>
                                <td>Leong Hall</td>
                                <td>3rd</td>
                            </tr>
                            <tr>
                                <td>School of Management</td>
                                <td>JGSOM</td>
                                <td>5th</td>
                            </tr>
                            <tr>
                                <td>Management Information Systems (DISCS)</td>
                                <td>Faura Hall</td>
                                <td>2nd</td>
                            </tr>
                            <tr>
                                <td>Mathematics</td>
                                <td>SEC Bldg A</td>
                                <td>3rd</td>
                            </tr>
                            <tr>
                                <td>Modern Languages (French, German, Spanish, etc.)</td>
                                <td>Dela Costa</td>
                                <td>2nd</td>
                            </tr>
                            <tr>
                                <td>Philosophy</td>
                                <td>Dela Costa</td>
                                <td>2nd</td>
                            </tr>
                            <tr>
                                <td>Physics</td>
                                <td>Faura Hall</td>
                                <td>3rd</td>
                            </tr>
                            <tr>
                                <td>Political Science</td>
                                <td>Leong Hall</td>
                                <td>3rd</td>
                            </tr>
                            <tr>
                                <td>Psychology</td>
                                <td>Leong Hall</td>
                                <td>3rd</td>
                            </tr>
                            <tr>
                                <td>Sociology and Anthropology</td>
                                <td>Leong Hall</td>
                                <td>1st</td>
                            </tr>
                            <tr>
                                <td>Theology</td>
                                <td>Dela Costa</td>
                                <td>3rd</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div style="clear:both;"></div>
        </div>

<?php include('footer.php') ?>