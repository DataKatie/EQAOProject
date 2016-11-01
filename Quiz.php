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
	$questList;
	switch ($quizNum){
		case 1: 
			$questList = " (6, 10, 15, 18, 3, 9, 14, 25, 1,5, 8, 16, 4, 11, 20, 24, 2, 7, 12, 13) ";
			break;
		case 2:
			$questList = '(19, 27, 29 42, 28, 32, 36, 38, 22, 31, 34, 39, 26, 30, 37, 40, 17, 23, 33, 35)';
			break;
		case 3: 
			$questList = '(48, 49, 50, 53, 43, 51,56, 59, 45, 46, 57, 58, 44, 47, 60, 61, 41, 52, 55, 63)';	
			break;	
		case 4:
			$questList = '(70, 86, 89, 96, 62, 64, 72, 80, 68, 73, 76, 77, 67, 71, 75, 81, 65, 66, 69, 74)';
			break;
		case 5:
			$questList = '(99, 100, 101, 102, 83, 92, 94, 95, 85, 88, 90, 93, 84, 91, 97, 98, 78, 79, 82, 87)';
			break;
		default:
			$questList='';
				
		}
	echo "question list". $questList;	
	$query1 = "SELECT * FROM question_6 WHERE quest_id IN :questList ORDER BY quest_id";
	$statement = Database::getDB()->prepare($query1);
    $statement->bindValue(':questList', $questList);
	$statement->execute();
	$results = $statement->fetchAll();
	return $results;
	
	}
	
			
	
}

if(isset($_SESSION['userId'])){
	$quizNumber = Quiz::select_quiz($_SESSION['userId']);
	echo "quizNumber: ".$quizNumber;
	$questions = Quiz::retrieve_questions($quizNumber);
	$jquestions = json_encode($questions);
	header("Content-Type: application/json");
	echo $jquestions;
	
	
	
	}
else {
	
	echo "Please <a href= 'login.php'>log in </a> to view this content";
	}	


?>