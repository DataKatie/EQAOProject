<?php var_dump($_POST); 
$WrongArray = array();
$wrongList = substr($_POST['wrongAnswers'], 1);
$WrongArray = explode(',',$wrongList);
echo $WrongArray;

 ?>