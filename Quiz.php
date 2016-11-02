<?php 

require_once('Database.php');
session_start();

class Quiz{

public static function select_quiz($userId){
	$query = "SELECT * FROM Grades WHERE userId = :userId";
	$statement = Database::getDB()->prepare($query);
	$statement->bindValue(':userId', $userId); 
	$statement->execute();
	$results = $statement->fetch();	
	
	if($results['Test1_score'] == null)
		return 1;
	else if ($results['Test2_score'] == null)
		return 2;
	else if ($results['Test3_score'] == null)
		return 3;
	else if ($results['Test4_score'] == null)
		return 4;
	else if ($results['Test5_score'] == null)
		return 5;
	else
		return 6;				
			
	
	}	
	
	
public static function retrieve_questions($quizNum){
	$query1;
	switch ($quizNum){
		case 1: 
			$query1 = "SELECT * FROM question_6 WHERE quest_id IN (6, 10, 15, 18, 3, 9, 14, 25, 1,5, 8, 16, 4, 11, 20, 24, 2, 7, 12, 13) ORDER BY quest_id" ;
			break;
		case 2:
		$query1 ="SELECT * FROM question_6 WHERE quest_id IN (19, 27, 29 42, 28, 32, 36, 38, 22, 31, 34, 39, 26, 30, 37, 40, 17, 23, 33, 35) ORDER BY quest_id" ;
			
		case 3: 
			$query1 = "SELECT * FROM question_6 WHERE quest_id IN (48, 49, 50, 53, 43, 51,56, 59, 45, 46, 57, 58, 44, 47, 60, 61, 41, 52, 55, 63) ORDER BY quest_id" ; 	
			break;	
		case 4:
			$query1 =  "SELECT * FROM question_6 WHERE quest_id IN (70, 86, 89, 96, 62, 64, 72, 80, 68, 73, 76, 77, 67, 71, 75, 81, 65, 66, 69, 74) ORDER BY quest_id" ;
			break;
		case 5:
			$query1 ="SELECT * FROM question_6 WHERE quest_id IN (99, 100, 101, 102, 83, 92, 94, 95, 85, 88, 90, 93, 84, 91, 97, 98, 78, 79, 82, 87) ORDER BY quest_id" ;
			break;
		default:
			$query1='';
				
		}
	
	
	$statement = Database::getDB()->prepare($query1);
   	$statement->execute();
	$results = $statement->fetchAll();
	$jresults = json_encode($results);
	
	return $jresults;
	
	
	}
	
			
	
}

if(isset($_SESSION['userId'])){
	$quizNumber = Quiz::select_quiz($_SESSION['userId']);
	
	$questions = Quiz::retrieve_questions($quizNumber);
	
	header("Content-Type: application/json");
	echo $questions;
	
	
	
	}
else {
	
	echo "Please <a href= 'login.php'>log in </a> to view this content";
	}	


?>