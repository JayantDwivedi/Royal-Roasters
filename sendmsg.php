<?php

//Open a new connection to the MySQL server
$mysqli = new mysqli('localhost', 'root', '', 'royalroaster');

//Output any connection error
if ($mysqli->connect_error) {
    die('Error : (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error);
}

$fname = mysqli_real_escape_string($mysqli, $_POST['fname']);
$email = mysqli_real_escape_string($mysqli, $_POST['email']);
$message= mysqli_real_escape_string($mysqli, $_POST['message']);

$email2 = "j.d.9045724469@gmail.com";    // put your email or recipient email address
$subject = "Contact Mail from Royal Roasters";               // subject line of contact form

if (strlen($fname) > 50) {
    echo 'fname_long';

} elseif (strlen($fname) < 2) {
    echo 'fname_short';

} elseif (strlen($email) > 50) {
    echo 'email_long';

} elseif (strlen($email) < 2) {
    echo 'email_short';

} elseif (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
    echo 'eformat';

} elseif (strlen($message) > 500) {
    echo 'message_long';

} elseif (strlen($message) < 3) {
    echo 'message_short';

} else {
	
	 //MAILER

    require 'phpmailer/PHPMailerAutoload.php';

    $mail = new PHPMailer;
	
	//$mail->SMTPDebug = 3;                               // Enable verbose debug output

    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'j.d.9045724469@gmail.com';                 // SMTP username or YOUR RECIPEINT EMAIL ID
    $mail->Password = 'computerJ1@@';                           // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to

	$mail->AddReplyTo($email);
    $mail->From = $email2;
    $mail->FromName = $fname;
    $mail->addAddress('j.d.9045724469@gmail.com', 'Admin');     // Add a recipient

    $mail->isHTML(true);                                  // Set email format to HTML

    $mail->Subject = $subject;
    $mail->Body = $message;
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    if (!$mail->send()) {
        echo 'Message could not be sent.';
        echo 'Mailer Error: ' . $mail->ErrorInfo;
    } else {
        echo 'true';
    }


}
?>