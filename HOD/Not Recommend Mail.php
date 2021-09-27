<?php
session_start();
if(!isset($_SESSION['us1'])) // If session is not set then redirect to Login Page
{
    header("Location:../index.php");
}
else {
    $now = time();
    if ($now > $_SESSION['expire']) {
        session_destroy();
    }
}
$Id1 = $_POST['id'];
$reason = "";
if(isset($_POST['Reason1']))
{
	$reason = $reason."<br>".$_POST["Reason1"];
}
if (isset($_POST['Reason2'])) 
{
	$reason = $reason."<br>".$_POST['Reason2'];
}
if (isset($_POST['Reason3'])) 
{
	$reason = $reason."<br>".$_POST['Reason3'];
}
if (isset($_POST['Reason4'])) 
{
	$reason = $reason."<br>".$_POST['Reason4'];
}
$reason = $reason."<br> ".$_POST['suggestion'];
//echo "$reason";
$con = mysqli_connect("localhost", "root", "", "tce");
if (!$con) 
{
  die("Connection failed" . mysqli_connect_error());
}
$sql = "select * from log where id=$Id1";
$result = mysqli_query($con, $sql);
if (mysqli_num_rows($result) > 0) 
{
while ($row = mysqli_fetch_assoc($result)) 
{
  $name = $row['Name'];
  $Hall = $row['Hall'];   
}
 $sql = "UPDATE log SET HOD = 'Not Recommended' where id=$Id1";
 $result = mysqli_query($con, $sql);
 mysqli_close($con);
/*error_reporting(E_STRICT);
date_default_timezone_set('America/Toronto');
require_once('class.phpmailer.php');
include("class.smtp.php");
$mail = new PHPMailer();
$mail->IsSMTP();
$mail->Host = "mail.smtp2go.com";
$mail->SMTPDebug = 2;
$mail->SMTPAuth = true;
//$mail->SMTPSecure = "none";
$mail->SMTPSecure = "ssl";
$mail->Host = "mail.smtp2go.com";
//$mail->Port       = 2525;
$mail->Port = 465;
$mail->Username = "venarunreddy@gmail.com";
$mail->Password = "Vpandy@n";
$mail->SetFrom('admin@tcefacilitysystems.rf.gd', 'TCE');
$mail->AddReplyTo("noreply@noreply.com", "noreply");
$mail->Subject = "Not Recommended!";
$mail->AltBody = "To view the message, please use an HTML compatible email viewer!";
$body = "Respected Sir,<br>
Your Hall Request has not been recommended by the Respected HOD<br>
due to $reason.<br>So sorry for the inconvinience and please try the mentioned halls.<br>
Regards,<br> TCE Facility Services.";
 $mail->MsgHTML($body);
 $mail->AddAddress("rjspjohn@gmail.com", "TCE Facility Services");*/
 }
/*if (!$mail->Send()) 
{
echo "Mailer Error: " . $mail->ErrorInfo;
} 
else 
{
	echo "Message sent!";
    header('Location:' . 'HOD.php');
}*/
header('Location:'.'HOD.php');
?>