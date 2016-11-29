<?php 

class Database{
//Make it a singleton by making all variables static and making the constructor private
//data source name
private static $dsn = 'mysql:host=localhost;dbname=eqaoProject';
private static $username = 'root';
private static $password = 'humber';

private function __construct(){}


//Get the database instance
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


//Function to create a new user in the database
public static function create_user($postArray, $token){
	
	
	$query = "INSERT INTO Person (userName, password, FirstName, LastName, Role, email, token) VALUES (:userName, :password, :firstName, 
	:lastName, :role, :email, :token)";
	$db = self::getDB();
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$statement = $db->prepare($query);
    $statement->bindValue(':userName', $postArray['userName']); 
    $statement->bindValue(':password', $postArray['password']);
    $statement->bindValue(':firstName', $postArray['firstName']);
    $statement->bindValue(':lastName', $postArray['lastName']); 
	$statement->bindValue(':role', $postArray['role']); 
	$statement->bindValue(':email', $postArray['email']); 
	$statement->bindValue(':token', $token); 
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
		
//function to retrieve the user id if a userName is supplied		
public static function retrieve_id($userName){
	$query1 = "SELECT userId FROM Person WHERE userName = :userName";
	$statement = self::getDB()->prepare($query1);
    $statement->bindValue(':userName', $userName); 
	$statement->execute();
	$results = $statement->fetch();
	$Id = $results['userId'];
	return $Id;
	}		
	
//function to check if a userName is entered in the database	
public static function user_exists($username){
	$query = "SELECT userName FROM Person WHERE userName = :userName";
		$statement = self::getDB()->prepare($query);
    	$statement->bindValue(':userName', $username);
		$statement->execute();
		$results = $statement->fetch();
		if (empty($results['userName']))
			return false;
		else			
			return true;	
		
	
		
	}

//function to check if the username and password match. It first checks if the user is registered
public static function validate_user($username, $password){
      $query = "SELECT userName, password, active FROM Person WHERE userName = :userName";
      $statement = self::getDB()->prepare($query);
       $statement->bindValue(':userName', $username);
      $statement->execute();
      $results = $statement->fetch();
      if (empty($results)){
         return false;
      }
      else{
         if ($password != $results['password']){
                return false;
            }
         else if($results['active']==0){
                    return false;
            }
         else
            return true;   
         
         }     	
		  
	}

//function to retrieve the user's email if username is provided	
public static function retrieve_email($username){
	$query = "SELECT Email FROM Person WHERE userName = :userName";
	$statement = self::getDB()->prepare($query);
	$statement->bindValue(':userName', $username);
	$statement->execute();
	$results = $statement->fetch();
	return $results['Email'];
	
	}
	
	/*public static function retrieve_password($username){
	$query = "SELECT password FROM Person WHERE userName = :userName";
	$statement = self::getDB()->prepare($query);
	$statement->bindValue(':userName', $username);
	$statement->execute();
	$results = $statement->fetch();
	return $results['password'];
	
	}	*/	
	
//function to retrieve the user's full name if the username is provided	
public static function retrieve_name($username){
	$query = "SELECT FirstName, LastName FROM Person WHERE userName = :userName";
	$statement = self::getDB()->prepare($query);
	$statement->bindValue(':userName', $username);
	$statement->execute();
	$results = $statement->fetch();
	$name = $results['FirstName']." ".$results['LastName'];
	return $name;
	
	}

//function to check that the token provided matches the username (e.g. for updating a password)	
public static function validate_token($username, $token){
	$query = "SELECT * FROM Person WHERE userName = :userName AND token = :token";
	$statement = self::getDB()->prepare($query);
	$statement->bindValue(':userName', $username);
	$statement->bindValue(':token', $token);
	$statement->execute();
	$results = $statement->fetch();
	if ($results != null && strlen($results['userName'])> 0 ){
	
	$query1 = "UPDATE Person SET active = 1 WHERE userName = :userName";
	$statement1 = self::getDB()->prepare($query1);
	$statement1->bindValue(':userName', $username);
	$statement1->execute();
	$statement1->closeCursor();
	
	
		return true;
	}
	else 
		return false;	
		
	}			

//function to update a token, for example if changing a password
public static function update_token($userName, $token){
	
	$query1 = "UPDATE Person SET token = :token WHERE userName = :userName";
	$statement1 = self::getDB()->prepare($query1);
	$statement1->bindValue(':token', $token);
	$statement1->bindValue(':userName', $userName);
	$statement1->execute();
	$statement1->closeCursor();
	
	
		return true;
	
	}

//function to update a password given a usernme and a new password (check the token before using this!)	
public static function update_password($userName, $password){
	$query1 = "UPDATE Person SET password = :password WHERE userName = :userName";
	$statement1 = self::getDB()->prepare($query1);
	$statement1->bindValue(':password', $password);
	$statement1->bindValue(':userName', $userName);
	$statement1->execute();
	$statement1->closeCursor();
	
	
		return true;
	
	}

//function to retrieve the matching substrands from the question table, given an array of incorrect question ids
public static function retrieve_substrands($array){
	
	$substrandArray = array();
	
	foreach ($array as $questionNum){
		
	$query = "SELECT substrand FROM question_6 WHERE quest_id = :quest_id";
	$statement = self::getDB()->prepare($query);
	$statement->bindValue(':quest_id', $questionNum);
	$statement->execute();
	$results = $statement->fetch();
	$substrandArray[] = trim($results['substrand']);
		
		}
	
	return $substrandArray;
	
	}

//function to retrieve a list of video links if given a list of subtrands the user got wrong
public static function retrieve_videos($substrand_array){
	$linkArray = array();
	$query = "SELECT link FROM videos WHERE name = :name";
	$statement = self::getDB()->prepare($query);
	foreach ($substrand_array as $name){
	$statement->bindValue(':name', $name);
	$statement->execute();
	$results = $statement->fetch();
	$linkArray[$name] = $results['link'];
	}
	
	return $linkArray;
	
	}		
	
	//function to update the grades table after a user has taken a quiz
	public static function update_grades($id, $test, $grade){
		if($test == 1){
		$query = "INSERT INTO Grades (userId) VALUES (:userId)";
		$db = self::getDB();
		$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$statement = $db->prepare($query);
    	$statement->bindValue(':userId', $id); 
		$statement->execute();
		$statement->closeCursor();
		}
		
		$testCol = "";
		
		switch($test){
			case 1:
				$testCol= "Test1_score";
				break;		
			case 2:
				$testCol= "Test2_score";
				break;
			case 3:
				$testCol= "Test3_score";
				break;
			case 4:
				$testCol= "Test4_score";
				break;
			case 5:
				$testCol= "Test5_score";
				break;
						
			}
			
			
			
			$query1 = "UPDATE Grades SET ".$testCol." = ".$grade." WHERE userId = " .$id;
			$db = self::getDB();
			$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$statement1 = $db->prepare($query1);
			$statement1->execute();
			$statement1->closeCursor();
		
		}
		
		
		//function to get the scores for each individual strand based on a user's quiz results
		public static function get_strand_scores($wrongAnsArray){
			$strandArray = array();
			$numsense = 0;
			$geo = 0;
			$meas = 0;
			$pattern = 0;
			$data = 0;
			
			foreach ($wrongAnsArray as $questionNum){
		
		$query = "SELECT strand FROM question_6 WHERE quest_id = :quest_id";
		$statement = self::getDB()->prepare($query);
		$statement->bindValue(':quest_id', $questionNum);
		$statement->execute();
		$results = $statement->fetch();
		if($results['strand']=="NumberSense")
			$numsense++;
		else if($results['strand']=="Patterning")
			$pattern++;
		else if($results['strand']=="Measurement")
			$meas++;
		else if($results['strand']=="Data")
			$data++;
		else if($results['strand']=="Geometry")
			$geo++;		
		}
	$substrandArray['NumberSense'] = $numsense;
	$substrandArray['Patterning'] = $pattern;
	$substrandArray['Measurement'] = $meas;
	$substrandArray['Data'] = $data;
	$substrandArray['Geometry'] = $geo;
	return $substrandArray;
			
			}
		
	public static function update_test($id, $test, $start, $end, $alloted, $overall, $numsense,
		$geo, $meas, $pattern, $data, $incorrect){
			
			$query = "INSERT INTO Test_Result (userId, test_number, start_time, end_time, alloted_time, overall_score, 
			numsense_score, geo_score, meas_score, pattern_score, data_score, incorrect_questions) VALUES (:userId, :test_number, 			           :start_time, :end_time, :alloted_time, :overall_score, :numsense_score, :geo_score, :meas_score, :pattern_score, :data_score, 	            :incorrect_questions)";
	$db = self::getDB();
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$statement = $db->prepare($query);
    $statement->bindValue(':userId', $id); 
    $statement->bindValue(':test_number', $test);
    $statement->bindValue(':start_time', $start);
    $statement->bindValue(':end_time', $end); 
	$statement->bindValue(':alloted_time', $alloted); 
	$statement->bindValue(':overall_score', $overall); 
	$statement->bindValue(':numsense_score', $numsense); 
	$statement->bindValue(':geo_score', $geo); 
	$statement->bindValue(':meas_score', $meas); 
	$statement->bindValue(':pattern_score', $pattern); 
	$statement->bindValue(':data_score', $data); 
	$statement->bindValue(':incorrect_questions', $incorrect); 
	 
    $statement->execute();
    $statement->closeCursor();
			
			}

		

}
//To use this in a class Database::getDB();
?>