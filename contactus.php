<?php
 if($_SERVER["REQUEST_METHOD"]=="POST"){
     $mysubject = FILTER_var($_POST["subject"],FILTER_SANITIZE_STRING);
     $mymail    = FILTER_var($_POST["mail"],FILTER_SANITIZE_EMAIL);
     $mymsg     = FILTER_var($_POST["msg"],FILTER_SANITIZE_STRING);

     $formerrors = array();
      if(strlen($mymsg) < 10){
         $formerrors[]="The text can't be less than 10 characters";
     }
         if(strlen($mysubject) < 3){
             $formerrors[]="The subject can't be less than 3 characters";
         }
     

     $myemail = "khaledbibo707@gmail.com";
     $header  = $mymail;
     $thesubject = $mysubject;
     $themsg = $mymsg;

     if(empty($formerrors)){

        require 'phpmailer/PHPMailerAutoload.php';

            $mail = new PHPMailer;

            $mail->isSMTP();                                      // Set mailer to use SMTP
            $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
            $mail->SMTPAuth = true;                               // Enable SMTP authentication
            $mail->Username = 'khaledbibo707@gmail.com';                 // SMTP username
            $mail->Password = '32002800';                           // SMTP password
            $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
            $mail->Port = 587;                                    // TCP port to connect to

            $mail->setFrom($mymail);
            $mail->addAddress('khaledbibo707@gmail.com');     // Add a recipient
            $mail->addReplyTo($mymail);

            $mail->isHTML(true);                                  // Set email format to HTML

            $mail->Subject = 'The subject is' . $mysubject;
            $mail->Body    = $themsg;

            if(!$mail->send()) {
                echo 'Message could not be sent.';
                echo 'Mailer Error: ' . $mail->ErrorInfo;
            } else {
                echo '<div class="alert alert-success" role="alert">The Message has been sent</div>';
            }

         $success = '<div class="alert alert-success" role="alert">The Message has been sent</div>';
     }
 }
?>
<!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="UTF-8"/>
            <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
            <meta name="viewport" content="width=device-width, initial-scale=1"/>
            <!-- The above 3 meta tags *must* come first in the head -->
            <meta name="description" content="Hotel"/>
            <!-- tab title -->
            <title>Trust-pa</title>
            <!-- tab fav Icon -->
            <link rel="icon" type="image/png" sizes="16x16" href="favicon/16x16.png">
            <!-- Bootstrap plug in css file -->
            <link href="Css/bootstrap.css" rel="stylesheet" />
            <!-- font awesome plug in css file -->
            <link href="Css/font-awesome.min.css" rel="stylesheet"/>
            <!-- Google font -->
            <link href="https://fonts.googleapis.com/css?family=Oswald&display=swap" rel="stylesheet">
            <!-- the main Css style file -->
            <link href="Css/a.css" rel="stylesheet"/> 
            <!-- the wow animate Css style file -->
            <link href="Css/animate.min.css" rel="stylesheet"/>
            <!--
            The next HTML5 shiv and Respond js files for IE8 support of HTML5 elements
            and media queries
            -->
            <script src="js/html5shiv.min.js"></script>
            <script src="js/respond.min.js"></script>
        </head>
        <body>
            
           <header>
            <nav class="navbar navbar-default navbar-fixed-top">
                    <div class="container-fluid">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="index.php"><img src="Images/logo.png" alt="trust-logo"/></a>
                        </div>

                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="index.php">Home <span class="sr-only">(current)</span></a></li>
                            <li><a href="projects.html">Projects</a></li>
                            <li><a href="earthing.html">Earthing & Lightning</a></li>
                            <li><a href="hiring.php">Hiring</a></li>
                            <li><a  class="on-active" href="contactus.php">Contact Us</a></li>
                            
                        </ul>
                        
                        
                        </div><!-- /.navbar-collapse -->
                    </div><!-- /.container-fluid -->
                    </nav>

                    <section class="title">

                        <h1>TRUST</h1>
                        <p>
                            For Power & Automation Services<br/>
                            Your Trust is Our Goal
                        </p>

                    </section>
                    
                    <div class="slideshow-container">
                    <!-- The next 3 div tags for background Images -->
                        <div class="mySlides  fade  first">
                        <img src="Images/Home1.jpg" alt="background" style="width:100%"/>
                        </div>
                    
                        <div class="mySlides  fade">
                        <img src="Images/Home2.jpg" alt="background" style="width:100%"/>
                        </div>
                    
                        <div class="mySlides  fade">
                        <img src="Images/Home3.jpg" alt="background" style="width:100%"/>
                        </div>
                    </div> 
           </header>   

            <!-- start map div -->
            <div class="map">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 iframe-part">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d854.211833293626!2d29.74769777081553!3d31.086173347355842!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14f595708f2456dd%3A0xa0a52d66a2d8aa0e!2z2KrYsdin2LPYqiDZhNiu2K_Zhdin2Kog2YPZh9ix2KjYp9ihINin2YTZgtmI2Ykg2YjYp9mE2KrYrdmD2YUg2KfZhNin2YTZiQ!5e0!3m2!1sar!2seg!4v1580769900408!5m2!1sar!2seg" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                        </div>
                        
                        <div class="col-md-12 form-part">
                            <div class="error">
                                <?php
                                  if(!empty($formerrors)){
                                      foreach($formerrors as $error){
                                          echo $error ;
                                      }
                                  } 
                                ?>
                            </div>
                            <?php if(isset($success)){echo $success;} ?>

                            <form class="map-form" action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
                                <h3>Contact us !</h3>
                                <div class="form-group">
                                   <input class="form-control  map-input" type="text" name="subject" required placeholder="Your Subject"/>
                                </div>
                                
                                <div class="form-group">
                                   <input class="form-control  map-input" type="email" name="mail" required placeholder="@mail.com"/>
                                </div>
                                <textarea class="form-control" name="msg" required placeholder="Your text here !"></textarea>
                                <input type="submit" class="form-control  btn btn-primary" value="send"/>
                                  
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end map div -->
            
            <!-- start footer -->
            <footer>
                <div class="container">
                    <div class="row">
                        <div class="foot col-md-3">
                            <h4>Trust</h4>
                            <p>
                            For Power & Automation Services </br>
                             Your Trust is Our Goal
                            </p>
                           
                        </div>
                        
                         <div class="foot col-md-3">
                             <h4 class="link">Trust-pa</h4>
                             <ul>
                                 <li><a href="index.php">Home</a></li>
                                 <li><a href="projects.html">Projects</a></li>
                                 <li><a href="earting.html">Earthing & Lightning</a></li>
                                 <li><a href="hiring.php">Hiring</a></li>
                                 <li><a href="contactus.php">Contact Us</a></li>
                             </ul>
                        </div>
                        
                         <div class="foot col-md-3">
                             <h4 class="link">Links</h4>
                             <ul>
                                 <li><a href="https://facebook.com">facebook</a></li>
                                 <li><a href="https://twitter.com/">Twitter</a></li>
                                 <li><a href="https://linkedin.com">Linked In</a></li> 
                             </ul>
                        </div>
                        
                        
                         <div class="foot col-md-3">
                             <h4>Contact</h4>
                             <p>Sales     +2 0127 7717837</p>
                             <p>trust.co13@outlook.com</p>
                             <p>
                                Km 17.5, Alex Matrouh Rd, Abou Youssef, Beside
                                Orman School, Agami, Alexandria
                             </p>
                             
                        </div>
                        
                        <div class="copyright col-md-12">2017 &copy; Trust For 
                            Power & Automation Services - All rights reserved
                            <br/>
                            Designed by Khaled Suliman
                        </div>
                        
                    </div> <!-- end row class -->
                </div>
            </footer>
            
            <script src="js/jquery-3.2.1.min.js"></script> <!-- JQuery js file -->
            <script src="js/bootstrap.min.js"></script>  <!-- Bootstrap js file -->
            <script src="js/a.js"></script> <!-- the main Java Script file -->
            <script src="js/wow.min.js"></script> <!-- wow js file -->
            <script>new WOW().init();</script> <!-- activate wow.js -->
        </body>
    </html>