<?php
require_once('Database.php');
session_start();
$file = 'login.php';

	
   
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

	<form method="post" action="login.php">
		<p> User Name: <input type="text" name="userName" value="<?php if(isset($_COOKIE['userName'])) { echo $_COOKIE['userName']; } ?>"/>
		<p> Password: <input type="password" name="password" value="<?php if(isset($_COOKIE['password'])) { echo $_COOKIE['password']; } ?>"/>
			<input type="checkbox" name="autologin" value="1">Remember Me
			<input type="submit" name="btnsubmit" value="Submit" />
	</form>
	<a href="forgotpassword.php"> Forgot my password </a>
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
