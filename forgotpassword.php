<?php 
require_once('Database.php');

 

?>
<form method="post" action="forgotpassword.php">
<p> Enter your username: <input type="text" name="userName">

<input type="submit" name="btnSubmit" value="Submit"/>

</p>

<?php if(isset($_POST['btnSubmit'])){
	
	if(!(Database::user_exists($_POST['userName']))){
		echo "The username " . $_POST['userName']. " is not registered. <br> 
		please click the link to <a href='testRegistrationForm.php'> register now </a>";
		
		}
		
	else{
		$userEmail = Database::retrieve_email($_POST['userName']);
		$userName = Database::retrieve_name($_POST['userName']);
		$userPassword = Database::retrieve_password($_POST['userName']);
		
		

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
$mail->addAddress($userEmail, $userName);

//Set the subject line
$mail->Subject = 'Your EduTech password';

//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body
$mail->msgHTML("<h2>Dear Edutech user, <br> Your EduTech userName is: ".$_POST['userName']."<br> 
Your EduTech password is: ".$userPassword ." </h2>");

//Replace the plain text body with one created manually
$mail->AltBody = "Dear Edutech user,  Your EduTech userName is: ".$_POST['userName']." 
Your EduTech password is: ".$userPassword ;

//Attach an image file
//$mail->addAttachment('images/phpmailer_mini.png');

//send the message, check for errors
if (!$mail->send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
} else {
    echo "Your username and password have been emailed to" . $userEmail;
}
		} 
	
	
	}
?>