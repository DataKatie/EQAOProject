<?php
session_start();
if(isset($_SESSION['userId'])){
	header("Location:quiz.html");
	}
else{
	echo "You need to <a href='login.php'>log in </a> or <a href = 'testregistrationform.php'> register </a> to take a quiz.";
	
	}	


?>