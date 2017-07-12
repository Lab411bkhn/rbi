<?php
require'../../Model/libraries/class.phpmailer.php';
$mail = new PHPMailer();
$mail->SetFrom('kimanh.bn2795@gmail.com'.'Kim Anh');
$mail->AddAddress("dacnguyentrung@gmail.com","Trung Dac");
$mail->AddReplyTo("kimanh.bn2795@gmail.com","Kim Anh");
$mail->Subject="Test";
$mail->CharSet="uft-8";
$body = "lab411s.esy.es/RBI/rbi/input/";
$mail->Body= $body;
if(!$mail->Send()){
    echo"Mailer Error:".$mail->ErrorInfo;
}
else{
    echo"Message sent!";
}
?>