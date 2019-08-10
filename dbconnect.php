

<?php
// Database connection script
function db_connect($setup=FALSE){
	$host = 'localhost';
	$username = 'root';
	$password = '';
	$database = 'plasticdb';

	if($setup){
		$conn = new mysqli($host, $username, $password);
	}else{
		$conn = new mysqli($host, $username, $password, $database);
	}
	if($conn->connect_error){
		die("Connection failed: " . $conn->connect_error);
	} 
	
	return $conn;
}


	
?>

<!--

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'mi_mailer/Exception.php';
require 'mi_mailer/PHPMailer.php';
require 'mi_mailer/SMTP.php';

function mi_do_mail($users = array(), $subject, $body){

    $mail = new PHPMailer();
//    $mail->SMTPDebug = 2;
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'mytree71@gmail.com';
    $mail->Password = '1qazzsw2';
    $mail->SMTPSecure = 'tls';
    $mail->Port = 587;
    $mail->setFrom('mytree71@gmail.com', 'My-Tree');
    $mail->addAddress('mytree71@gmail.com');

    foreach ($users as $u_email){
        $mail->addAddress($u_email);
    }

    $mail->isHTML(true);
    $mail->Subject = $subject;
    $mail->Body    = $body;
    $mail->AltBody = $body;

    if ($mail->send()){
        return true;
    }else{
        return false;
    }
}   -->