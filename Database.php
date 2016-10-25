<?php 

class Database{
//Make it a singleton by making all variables static and making the constructor private
//data source name
private static $dsn = 'mysql:host=localhost;dbname=eqaoProject';
private static $username = 'root';
private static $password = 'humber';

private function __construct(){}



public static function getDB(){
try{
	$db = new PDO(self::$dsn, self::$username, self::$password);
}
catch(PDOException $e){
	$errormsg = $e->getMessage();
	echo $errormsg;
	}
	return $db;
}



public static function create_user($postArray){
	
	$query = "INSERT INTO Person (userName, password, FirstName, LastName, Role, email) VALUES (:userName, :password, :firstName, 
	:lastName, :role, :email)";
	$db = self::getDB();
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$statement = $db->prepare($query);
    $statement->bindValue(':userName', $postArray['userName']); 
    $statement->bindValue(':password', $postArray['password']);
    $statement->bindValue(':firstName', $postArray['firstName']);
    $statement->bindValue(':lastName', $postArray['lastName']); 
	$statement->bindValue(':role', $postArray['role']); 
	$statement->bindValue(':email', $postArray['email']); 
    $statement->execute();
    $statement->closeCursor();
	
	if($postArray['role'] =='teacher'){
		$teacherId = retrieve_id($postArray['userName']);
		$teacher_query = "INSERT INTO Teacher (teacherId, school, schoolBoard) VALUES (:teacherId, :school, :schoolBoard)";
		$statement = $db->prepare($teacher_query);
		$statement->bindValue(':teacherId', $teacherId); 
		$statement->bindValue(':school', $postArray['school']); 
		$statement->bindValue(':schoolBoard', $postArray['schoolBoard']); 
		$statement->execute();
		
		}
	
		}
		
		
public static function retrieve_id($userName){
	$query1 = "SELECT userId FROM Person WHERE userName = :userName";
	$statement = self::getDB()->prepare($query1);
    $statement->bindValue(':userName', $sessionArray['userName']); 
	$statement->execute();
	$results = $statement->fetch();
	$Id = $results['userId'];
	return $Id;
	}		
	
public static function user_exists($username, $errorMsg = ""){
	$query = "SELECT userName FROM Person WHERE userName = :userName";
		$statement = self::getDB()->prepare($query);
    	$statement->bindValue(':userName', $username);
		$statement->execute();
		$results = $statement->fetch();
		if (empty($results['userName']))
			return false;
		else
			return true;	
	
	echo $errorMsg;		
	}

public static function validate_user($username, $password){
		$query = "SELECT userName, password FROM Person WHERE userName = :userName";
		$statement = self::getDB()->prepare($query);
    	$statement->bindValue(':userName', $username);
		$statement->execute();
		$results = $statement->fetch();
		if (empty($results)){
			echo "This username does not exist. Please sign up now!";
			return false;
		}
		else{
			if ($password != $results['password']){
				echo "Password does not match. Please try again.";
					return false;
				}
			else
				return true;	
			
			} 		
		  
	}
	
public static function retrieve_email($username){
	$query = "SELECT email FROM Person WHERE userName = :userName";
	$statement = self::getDB()->prepare($query);
	$statement->bindValue(':userName', $username);
	$statement->execute();
	$results = $statement->fetch();
	return $results['email'];
	
	}	
	
		
		

}
//To use this in a class Database::getDB();
?>