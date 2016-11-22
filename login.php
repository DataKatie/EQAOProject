
<!DOCTYPE html>
<<<<<<< HEAD

=======
>>>>>>> origin/master
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->  
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->  
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->  
<?php
require_once('Database.php');
session_start();

$isSubmitted = false;
if(isset($_POST['btnsubmit']))
{
	$isSubmitted = true;
	$_SESSION['userName']=$_POST['userName'];
	$_SESSION['userId']=Database::retrieve_id($_POST['userName']);
	$_SESSION['lastTime']=time();

		if($isSubmitted){
			$isValidLogin = Database::validate_user($_POST['userName'], $_POST['password']);
			//Remember Me
			//saves the username and password in cookie

			if(isset($_POST['autologin']))
			{
				$remember = $_POST['autologin'];
				if($remember = 1)
				{
					setcookie("userName",$_POST['userName'],time()+3600*24);
					setcookie("password",($_POST['password']),time()+3600*24);
				}

			}
			else
			{
				unset($_COOKIE['userName']);
				unset($_COOKIE['password']);
				setcookie("userName",'',time()-3600*24);
				setcookie("password",'',time()-3600*24);
			}






}

}
?>
<<<<<<< HEAD
=======

>>>>>>> origin/master
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

<body class="home-page">  
	<form method="post" action="login.php">
		<p> User Name: <input type="text" name="userName" value="<?php if(isset($_COOKIE['userName'])) { echo $_COOKIE['userName']; } ?>"/> </p>
		<p> Password: <input type="password" name="password" value="<?php if(isset($_COOKIE['password'])) { echo $_COOKIE['password']; } ?>"/></p>
			<input type="checkbox" name="autologin" value="1">Remember Me
			<input type="submit" name="btnsubmit" value="Submit" />
	</form>
	<a href="forgotpassword.php"> Forgot my password </a>
</body>
</html>    
<?php

?>
<?php
if($isSubmitted){
	if ($isValidLogin)
		//echo "login succeeded";
		header("Location:welcome.php");
	else
		echo "login failed";
}
?>
