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
		$token = bin2hex(openssl_random_pseudo_bytes(16));
		
		Database::create_user($_POST, $token);
		$userEmail = $_POST['email'];
		$userFullName = $_POST['firstName']." ".$_POST['lastName'];
		$userName = $_POST['userName'];
		
		/**
 * This example shows settings to use when sending via Google's Gmail servers.
 */

//SMTP needs accurate times, and the PHP time zone MUST be set
//This should be done in your php.ini, but this is how to do it if you don't have access to that
date_default_timezone_set('Etc/UTC');

require('PHPMailerAutoload.php');

//Create a new PHPMailer instance
$mail = new PHPMailer;

//Tell PHPMailer to use SMTP
$mail->isSMTP();

//Enable SMTP debugging
// 0 = off (for production use)
// 1 = client messages
// 2 = client and server messages
$mail->SMTPDebug = 0;

//Ask for HTML-friendly debug output
$mail->Debugoutput = 'html';

//Set the hostname of the mail server
$mail->Host = 'ssl://smtp.gmail.com';

//Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
$mail->Port = 465;

//Set the encryption system to use - ssl (deprecated) or tls
$mail->SMTPSecure = 'ssl';

//Whether to use SMTP authentication
$mail->SMTPAuth = true;

//Username to use for SMTP authentication - use full email address for gmail
$mail->Username = "eqaotestprep@gmail.com";

//Password to use for SMTP authentication
$mail->Password = "katieistheboss";

//Set who the message is to be sent from
$mail->setFrom('eqaotestprep@gmail.com', 'EduTech');

//Set an alternative reply-to address
//$mail->addReplyTo('replyto@example.com', 'First Last');

//Set who the message is to be sent to
$mail->addAddress($userEmail, $userFullName);

//Set the subject line
$mail->Subject = 'Your EduTech registration';

//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body
$mail->msgHTML("<h2>Dear ".  $userFullName. ",  <br> Please click the link to complete your EduTech registration: 
<a href='localhost/finalProject/registrationverification.php?token=".$token."&userName=".$userName."'>Complete Registration </a> <br>
Or, paste the following url into your browser: localhost/finalProject/registrationverification.php?token=".$token."&userName=".$userName);

//Replace the plain text body with one created manually
$mail->AltBody = "Dear ".  $userFullName. ",  Please click the link below or paste the link into your browser to complete your EduTech registration: localhost/finalProject/registrationverification.php?token=".$token."&userName=".$userName;

//Attach an image file
//$mail->addAttachment('images/phpmailer_mini.png');

//send the message, check for errors
if (!$mail->send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
} else {
    echo "An email has been sent to ". $_POST['email']. ". Please follow the link to activate your account.";
	
}	
		
		
		
	
	
		
		
		
		
		
		
	}
	else 
		echo "registration errors, try again.";	
	}
	?>
		