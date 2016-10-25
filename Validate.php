<?php function validateComplete($fieldname, $errormessage,  $pattern = null){

	 if(!($pattern == null)){
		
		if(!(preg_match($pattern,  $fieldname))){
			echo $errormessage;
			return false;
			}
		else{
			echo "";
			return true;
			}
		}	
		
	else if (empty($fieldname)|| $fieldname == " "){
		
		echo $errormessage;
		return false;
		}
		
		else{
			echo "";
			return true;
		}
		
	}
	?>