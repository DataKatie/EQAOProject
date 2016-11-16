<?php 
require_once("Database.php");
 
$WrongArray = array();
$wrongList = substr($_POST['wrongAnswers'], 1);
$WrongArray = explode(',',$wrongList);
//echo $WrongArray;

$numOfRightAns = (20 - count($WrongArray));
$result = "";
if($numOfRightAns < 12)
	$result = "failing to meet";
else if ($numOfRightAns == 12 ||$numOfRightAns == 13)
	$result = "approaching";
else if ($numOfRightAns == 14 || $numOfRightAns == 15)
	$resuslt = "meeting";
else
	$result = "exceeding";
	
echo "Yours score is " . $numOfRightAns . "/20  You are ". $result . " provincial expectations";	

echo "You had difficulty with the following concepts";

$substrandArray = Database::retrieve_substrands($WrongArray);

foreach ($substrandArray as $substrand){
	echo "<li> ". $substrand . "</li>";
	}		

 ?>