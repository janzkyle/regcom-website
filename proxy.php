<?php $accordionhtml = "$( '#accordion' ).accordion({active: 4});" ?>

<?php include('header.php') ?>
<?php include('nav.php') ?>
<script>
    $(function() {
        $("#liproxy").attr('class', 'sideactive');
    });
</script>

        <div id="procedure" class="section wrap" style="min-height: 80vh;">
            <h1>Proxy Guidelines</h1>
            <div class="nonsteps">
            	<h3>Requirements</h3>
	            <ul>
	            	<li>Student's valid ID (with signature and picture)</li>
					     *Note: ID can be digital or photocopy
	            	<li>Proxy's valid ID (with signature and picture)</li>
	            	<li>Type-written or word-processed authorization letter (<a href="files/proxyletter.docx">Sample Letter Template</a>)</li>
	            	<li>AISIS username & password of student (undergraduates only)</li>
	            </ul>
	            <h3>Authorization Letter Guidelines (include the following in the letter)</h3>
	            <ul>
	                <li>Complete details of student's registration concerns/problems</li>
	            	<li>Date letter was written</li>
	            	<li>Date or duration of validity of the letter</li>
	            	<li>Name of proxy and authorization</li>
	            	<li>Student's signature over printed name</li>
                    <li><a href="files/proxyletter.docx">Sample Letter Template</a></li>
	            </ul>
	            <h3>Other Reminders</h3>
	            <ul>
	            	<li>One-to-one Policy for undergraduates (1 student 1 proxy)</li>
	            	<li>A Student and their proxy can enlist at the same time when they are of the same batch and school (SOSE, SOM, SOH, SOSS)</li>
	            	<li>Student proxy for School of Management must observe proper dress code</li>
                    <li>Proxies must know the classes and back-up schedule in case the classes are closed.</li>
	            </ul>
            </div>
            <a href="loadrev.php" class="next">Load Revision Schedule ></a>
            <div style="clear:both;"></div>
        </div>
<?php include('footer.php') ?>