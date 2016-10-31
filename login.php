<?php
require_once('Database.php');
$isSubmitted = false;
if(isset($_POST['btnsubmit']))
	$isSubmitted = true;

if($isSubmitted){
	$isValidLogin = Database::validate_user($_POST['userName'], $_POST['password']);	
	}
?>

<form method="post" action="login.php">
<p> User Name: <input type="text" name="userName" value="<?php if($isSubmitted){ echo $_POST['userName'];} ?>"/>
<p> Password: <input type="text" name="password" />
<input type="submit" name="btnsubmit" value="Submit" />
</form>
<a href="forgotpassword.php"> Forgot my password </a>

<?php
if($isSubmitted){
	if ($isValidLogin)
		echo "login succeeded";
	else 
		echo "login failed";	
	}


//$_SESSION["userId"] = Database::retrieve_id($_POST['userName']);
