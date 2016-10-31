<?php
require_once('Validate.php');
require_once('Database.php');

$isSubmitted = false;
if(isset($_POST['btnsubmit']))
	$isSubmitted = true;
?>	
	 <h1>Registration Form</h1>
           
        <form method="post" action="testRegistrationForm.php">
        <table>
            <tr>
                <td>Username</td>
                <td><input type="text" name="userName" value="<?php if($isSubmitted){
					echo $_POST['userName'];
					} ?>"/></td>
                <td><?php if($isSubmitted){
					$validUserName = validateComplete($_POST['userName'], "Enter a first name") && 
					!(Database::user_exists($_POST['userName']));
					if(Database::user_exists($_POST['userName']))
						echo "Username already exists. Please choose a different name";
						
					} ?></td>
            </tr>
            <tr>
                <td> Password</td>
                <td><input type="password" name="password" /></td>
                 <td><?php if($isSubmitted){
					$validPassword = validateComplete($_POST['password'], "Password must be at least 8 characters long and must include
					both letters and numbers", 
					'/^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$/');
					} ?></td>
            </tr>
            <tr>
                <td>First Name</td>
                <td><input type="text" name="firstName" value="<?php if($isSubmitted){
					echo $_POST['firstName'];
					} ?>"/></td>
                 <td><?php if($isSubmitted){
					$validFirstName = validateComplete($_POST['firstName'], "Enter your first name");
					} ?></td>
            </tr>
            <tr>
                <td>Last Name</td>
                <td><input type="text" name="lastName" value="<?php if($isSubmitted){
					echo $_POST['lastName'];
					} ?>"/></td>
                <td><?php if($isSubmitted){
					$validLastName = validateComplete($_POST['lastName'], "Enter your last name");
					} ?></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="text" name="email" value="<?php if($isSubmitted){
					echo $_POST['email'];
					} ?>"/></td>
                <td><?php if($isSubmitted){
					$validEmail = validateComplete($_POST['email'], "Enter a valid email", 
					"/^([A-Za-z0-9_\.\-\+\%])+\@([A-Za-z0-9._%+-])+\.([A-Za-z]{2,4})/");
				} ?> </td>
            </tr>
           
            <tr>
                <td>
                <!--This will change somehow this is just for testing purposes! -->
                <input type="hidden" name="role" value="student" />
                <input type="submit" name="btnsubmit" value="Submit" />
                </td>
            </tr>
        </table>

        </form>
<?php
	if($isSubmitted){
	if($validUserName&&$validPassword&&$validFirstName&&$validLastName&&$validEmail){
		echo "good job you are registered! click here to <a href='login.php'>login</a>";
		Database::create_user($_POST);
	}
	else 
		echo "registration errors, try again.";	
	}
	?>
		