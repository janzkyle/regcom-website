<!DOCTYPE html>
<!--Regcom 2015 website created by Web Sub-Committee Head Jennifer Lee-->
<html lang='en'>
    <head>
        <meta charset="utf-8">
        <!-- css link -->
        <link href="css/reset.css" rel="stylesheet" type="text/css">
        <link href="css/style.css" rel="stylesheet" type="text/css">
        <link href="css/navstyle.css" rel="stylesheet" type="text/css">

        <!--font-->
        <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

        <!-- favicon link -->
        <link rel="icon" href="images/favicon.ico">

        <!--js link-->
        <script src="js/jquery-1.10.2.min.js"></script>
        <script src="js/jquery-ui.js"></script>

        <title>Ateneo Registration Committee</title>

        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
        <meta name="author" content="Ateneo Registration Committee">
        <!--description that appears for the website when searched-->
        <meta name="desription" content="This is the official website of Ateneo Registration Committee (RegCom), a body of selected student volunteers who are tasked by the Registrar’s Office (RO) to enforce and facilitate the registration process.">
        <!--tell the search engine the contents of your website-->
        <meta name="keywords" content="Ateneo, Regcom, Ateneo Regcom, Ateneo Registration Comittee, Registration, admu, ateneo de manila university, registrars office, aisis, aisis online">
        <script src="js/masonry.pkgd.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function() {
                <?php echo $accordionhtml ?>
                //setTimeout(toggle_sidebar,0);
                $('.option').click(function(event){
                    event.preventDefault();
                    toggle_sidebar();
                });
            });
            function toggle_sidebar(){
                $('#accordion').toggle('slide', { direction: 'left' }, 500);
            }
            function toggle_visibility(id) {
               var e = document.getElementById(id);
               if(e.style.display == 'block')
                  e.style.display = 'none';
               else
                  e.style.display = 'block';
            }
        </script>
        <script>
          (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
          (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
          m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
          })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

          ga('create', 'UA-48792662-1', 'auto');
          ga('send', 'pageview');

        </script>
    </head>
    <body>
        <div id="nav">
            <ul>
                <a href="index.html"><li><img src="images/logo.jpg" alt="ateneo regcom" height="50"></li></a>
                <a onclick="toggle_visibility('menu');"><li class="menu"><strong>Menu</strong></li></a>
                <div style="clear:both;"></div>
            </ul>
        </div>
        <nav>
            <ul id="menu">
                <a href="index.html"><li id="lihome">Home</li></a>
                <a href="procedure.php"><li id="liprocedure">Procedure</li></a>
                <a href="batch.php"><li id="libatch">Batch Schedule</li></a>
                <a href="faq.php"><li id="lifaqs">FAQs</li></a>
                <a href="http://reg-system-server.herokuapp.com/" target="_blank"><li>ManReg System</li></a>
                <a href="http://ls.ateneo.edu/class_schedule.php" target="_blank"><li>Offered Classes</li></a>
                <a href="http://aisis.ateneo.edu" target="_blank"><li>AISIS</li></a>
                
            </ul>
        </nav>