<?php

require_once('Database.php');
require_once('Validate.php');

$isSubmitted = false;
if(isset($_POST['btnSubmit']))
	$isSubmitted = true;

if(isset($_GET['userName']) && isset($_GET['token'])){
$userName = $_GET['userName'];
$token = $_GET['token'];

$verified = Database::validate_token($userName, $token);
if ($verified){
	echo "<form method='post' action='updateForgottenpassword.php?userName=".$userName."&token=".$token."'>";
	
	echo "UserName: <input type='text' name = 'userName' value = '".$userName."'/></br>";
	echo "New Password: <input type='password' name = 'password'/> </br>";
	echo "Verify Password: <input type='password' name = 'password1'/> </br>";
	echo "<input type='submit' name='btnSubmit' value='Submit'/>";
	echo "</form>";
		if($isSubmitted){
					$validPassword = validateComplete($_POST['password'], "Password must be at least 8 characters long and must include
					both letters and numbers", 
					'/^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$/');
					$matchingPassword = $_POST['password'] == $_POST['password1'];
					if(!$matchingPassword)
						echo "Passwords do not match";
					
					if($validPassword && $matchingPassword){
					Database::update_password($userName, $_POST['password']);
					echo "password updated successfully. Please <a href='login.php'>return to login page </a>"	;			
					} 
		
		}

	
	
	
	}

else {
	
	echo "Access denied";
	
	}	

}

else {
	
	echo "oops! This page is not available. Please <a href='login.php'>login </a>";
	
	
	}
?>