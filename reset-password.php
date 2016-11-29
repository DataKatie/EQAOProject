<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->  
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->  
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->

<?php
require_once('Database.php');
$err = true;
if(isset($_POST['btnSubmit'])){
    
    if(!(Database::user_exists($_POST['userName']))){
        $err =  false;
    }
    else{
        $userEmail = Database::retrieve_email($_POST['userName']);
        $userFullName = Database::retrieve_name($_POST['userName']);
        $token = bin2hex(openssl_random_pseudo_bytes(16));

        Database::update_token($_POST['userName'], $token);


        /**
         * This example shows settings to use when sending via Google's Gmail servers.
         */

//SMTP needs accurate times, and the PHP time zone MUST be set
//This should be done in your php.ini, but this is how to do it if you don't have access to that
        date_default_timezone_set('Etc/UTC');

        require('PHPMailerAutoload.php');

//Create a new PHPMailer instance
        $mail = new PHPMailer;

//Tell PHPMailer to use SMTP
        $mail->isSMTP();

//Enable SMTP debugging
// 0 = off (for production use)
// 1 = client messages
// 2 = client and server messages
        $mail->SMTPDebug = 0;

//Ask for HTML-friendly debug output
        $mail->Debugoutput = 'html';

//Set the hostname of the mail server
        $mail->Host = 'ssl://smtp.gmail.com';

//Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
        $mail->Port = 465;

//Set the encryption system to use - ssl (deprecated) or tls
        $mail->SMTPSecure = 'ssl';

//Whether to use SMTP authentication
        $mail->SMTPAuth = true;

//Username to use for SMTP authentication - use full email address for gmail
        $mail->Username = "eqaotestprep@gmail.com";

//Password to use for SMTP authentication
        $mail->Password = "katieistheboss";

//Set who the message is to be sent from
        $mail->setFrom('eqaotestprep@gmail.com', 'EduTech');

//Set an alternative reply-to address
//$mail->addReplyTo('replyto@example.com', 'First Last');

//Set who the message is to be sent to
        $mail->addAddress($userEmail, $userFullName);

//Set the subject line
        $mail->Subject = 'Your EduTech password';

//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body
        $mail->msgHTML("<h2>Dear Edutech user, <br> Please follow the link to update your password: <a href=localhost/finalProject/updateForgottenPassword.php?userName=".$_POST['userName']."&token=".$token.">Update Password </a> <br> 
Or, paste this link into your browser: localhost/finalProject/updateForgottenPassword.php?userName=".$_POST['userName']."&token=".$token."</h2>");

//Replace the plain text body with one created manually
        $mail->AltBody = "Dear Edutech user, please click or paste the following url into your browser to update your password: localhost/finalProject/updateForgottenPassword.php?userName=".$_POST['userName']."&token=".$token;

//Attach an image file
//$mail->addAttachment('images/phpmailer_mini.png');

//send the message, check for errors
        if (!$mail->send()) {
            $error =  "Mailer Error: " . $mail->ErrorInfo;
            echo '<script language="javascript">';
            echo 'alert("'.$error.'")';
            echo '</script>';
        } else {
            $error = "Your username and password have been emailed to" . $userEmail;
            echo '<script language="javascript">';
            echo 'alert("'.$error.'")';
            echo '</script>';
            // echo "Your username and password have been emailed to" . $userEmail;
        }
    }


}

?>

<head>
    <title>Edu-Tech</title>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">    
    <link rel="shortcut icon" href="favicon.ico">  
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,400italic,500,500italic,700,700italic,900,900italic,300italic,300' rel='stylesheet' type='text/css'> 
    <link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,700,300,100' rel='stylesheet' type='text/css'>
    <!-- Global CSS -->
    <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">   
    <!-- Plugins CSS -->    
    <link rel="stylesheet" href="assets/plugins/font-awesome/css/font-awesome.css">
    <link rel="stylesheet" href="assets/plugins/flexslider/flexslider.css">
    <!-- Theme CSS -->
    <link id="theme-style" rel="stylesheet" href="assets/css/styles-2.css">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <style>
        footer ul.social.list-inline li a {
            display: block;
            height: 50px;
            width: 50px;
            line-height: 50px;
            font-size: 25px;
            border-radius: 100%;
            color: white;
            text-align: center;
        }

        .profile-picture {
            display: inline-block;
            width: 150px;
            height: 150px;
            border-radius: 50%;
            background-repeat: no-repeat;
            background-position: center center;
            background-size: cover;
        }

        footer ul.social.list-inline { margin: 0; text-align: center;}
        footer ul.social.list-inline li.social-github a { background-color: #333333; }
        footer ul.social.list-inline li.social-github a:hover { background-color: white; }
        footer ul.social.list-inline li.social-twitter a { background-color: #1da1f2; }
        footer ul.social.list-inline li.social-twitter a:hover { background-color: white; }
        footer ul.social.list-inline li.social-facebook a { background-color: #3b5998; }
        footer ul.social.list-inline li.social-facebook a:hover { background-color: white; }
        footer ul.social.list-inline li.social-google-plus a { background-color: #dd4b39; }
        footer ul.social.list-inline li.social-google-plus a:hover { background-color: white; }
        footer .footer { text-align: center; padding: 50px 0; }
    </style>
</head> 

<body class="resetpass-page access-page has-full-screen-bg">
    <div class="upper-wrapper">
        <!-- ******HEADER****** -->
        <header class="header">  
            <div class="container">       
                <h1 class="logo">
                    <a href="index.html"><span class="logo-icon"></span><span class="text">Edu-Tech</span></a>
                </h1><!--//logo-->
                                     
            </div><!--//container-->
        </header><!--//header-->
        
        <!-- ******resetpass Section****** --> 
        <section class="resetpass-section access-section section">
            <div class="container">
                <div class="row">
                    <div class="form-box col-md-6 col-sm-8 col-xs-12 col-md-offset-3 col-sm-offset-2 xs-offset-0">     
                        <div class="form-box-inner">
                            <h2 class="title text-center">Password Reset</h2>    
                            <p class="intro">Please enter your username below and we'll email you a link to create a new password.</p>
                            <div class="row">
                                <div class="form-container">
                                    <form class="resetpass-form" method="post" action="reset-password.php">
                                        <?php
                                        if (!$err)
                                            echo '<div class="alert alert-danger">
                                                            <strong>Invalid username</strong> 
                                                  </div>'
                                        ?>
                                        <div class="form-group email">
                                            <label class="sr-only" for="reset-email">Email</label>
                                            <input id="reset-username" type="text" class="form-control resetpass-userName" placeholder="username" name="userName">
                                        </div><!--//form-group-->  
                                        <button type="submit" class="btn btn-block btn-cta-primary" name="btnSubmit" value="Submit">Reset Password</button>
                                    </form>
                                    <p class="lead text-center">Don't have a Edu-Tech account yet? <a class="signup-link" href="testRegistrationForm.php">Create your account now</a></p>
                                    <p class="lead text-center">Take me back to the <a href="login.php">login</a> page</p>
                                </div><!--//form-container-->
                            </div><!--//row-->
                        </div><!--//form-box-inner-->
                    </div><!--//form-box-->
                </div><!--//row-->
            </div><!--//container-->
        </section><!--//contact-section-->
    </div><!--//upper-wrapper-->

    <footer class="footer footer-main">
        <div class="footer-content">
            <div class="container">
                <div class="row">
                    <div class="footer-col connect col-xs-12">
                        <div class="footer-col-middle">
                            <ul class="social list-inline">
                                <li class="social-twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li class="social-facebook"><a href="#"><i class="fa fa-facebook"></i></a> </li>
                                <li class="social-google-plus"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            </ul>
                        </div><!--//footer-col-inner-->
                    </div><!--//foooter-col-->
                    <div class="clearfix"></div>
                </div><!--//row-->
            </div><!--//container-->
        </div><!--//footer-content-->
        <div class="bottom-bar">
            <div class="container">
                <small class="copyright">Copyright Edu-Tech Inc. </a></small>
            </div><!--//container-->
        </div><!--//bottom-bar-->
    </footer><!--//footer-->

 
    <!-- Javascript -->          
    <script type="text/javascript" src="assets/plugins/jquery-1.12.3.min.js"></script>
    <script type="text/javascript" src="assets/plugins/bootstrap/js/bootstrap.min.js"></script> 
    <script type="text/javascript" src="assets/plugins/bootstrap-hover-dropdown.min.js"></script>
    <script type="text/javascript" src="assets/plugins/back-to-top.js"></script>
    <script type="text/javascript" src="assets/plugins/jquery-placeholder/jquery.placeholder.js"></script>
    <script type="text/javascript" src="assets/plugins/FitVids/jquery.fitvids.js"></script>
    <script type="text/javascript" src="assets/plugins/flexslider/jquery.flexslider-min.js"></script> 
    <script type="text/javascript" src="assets/js/main.js"></script>
    
            
</body>
</html>



