<?php 
require_once('Database.php');



if(isset($_GET['userName']) && isset($_GET['token'])){
$userName = $_GET['userName'];
$token = $_GET['token'];

$verified = Database::validate_token($userName, $token);
if ($verified){
	
	echo "Thank you for registering! Please <a href='login.php'>login</a>";
	
	}

else {
	
	echo "Access denied";
	
	}	

}

else {
	
	echo "oops! This page is not available. Please <a href='testRegistrationPage.php'>register </a>";
	
	
	}

?>