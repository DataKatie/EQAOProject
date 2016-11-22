<?php 
require_once("Database.php");
session_start();
 
$WrongArray = array();
$wrongList = substr($_POST['wrongAnswers'], 1);
$WrongArray = explode(',',$wrongList);
//echo $WrongArray;
$strandArray = Database::get_strand_scores($WrongArray);

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
	
echo "Your score is " . $numOfRightAns . "/20  You are ". $result . " provincial expectations <br>";	
echo  "<h4> Strand results: </h4>
		<li> Number Sense: ".(4-$strandArray['NumberSense'])."/4 </li> 
		<li>Geometry: ".(4-$strandArray['Geometry'])."/4 </li> 
		<li> Meaasurement: ".(4-$strandArray['Measurement'])."/4 </li> 
		<li> Patterning and Algebra: ".(4-$strandArray['Patterning'])."/4 </li> 
		<li> Data Management and Probability: ".(4-$strandArray['Data'])."/4 </li> ";
echo "Ujjawa put a bar graph here :D ";		

echo "You had difficulty with the following concepts <br>";

$substrandArray = Database::retrieve_substrands($WrongArray);
$linkArray = Database::retrieve_videos($substrandArray);

foreach ($substrandArray as $substrand){
	echo "<li> ". $substrand . "</li>";
	}		
foreach($linkArray as $substrand=>$link){
		echo "<p> " . $substrand . ": " .
		
		"<video id= '". $substrand . "' src = '" . $link . "'></video>"
		
		. "</p> ";
	}
	
//Add the score to the grades table	

Database::update_grades($_SESSION['userId'], $_SESSION['test'], $numOfRightAns);

$StringWrong = serialize($WrongArray);
Database::update_test($_SESSION['userId'], $_SESSION['test'], null, null, null, $numOfRightAns, (4-$strandArray['NumberSense']), 
 (4 - $strandArray['Geometry']), (4 - $strandArray['Measurement']),  (4 - $strandArray['Patterning']),  (4 - $strandArray['Data']), $StringWrong);

//Add the result to the test page


	
 ?>