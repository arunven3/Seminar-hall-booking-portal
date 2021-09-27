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
$n1=$_POST['Name'];
$dept1=$_POST['Department'];
$pur1=$_POST['Purpose'];
$level1=$_POST['Level'];
$da1=$_POST['sdate'];
$da2=$_POST['edate'];
$time1=$_POST['stime'];
$time2=$_POST['etime'];
if(isset($_POST['guestname']))
{
$chief_name = $_POST['guestname'];
}
if (isset($_POST['guestinst'])) 
{
$institution = $_POST['guestinst'];
}
if(isset($_POST['program']))
{
$program = $_POST['program']; 
}
if (isset($_POST['description'])) 
{
$des1=$_POST['description'];
}
$hall1=$_POST['Hall'];
date_default_timezone_set("Asia/Calcutta");
 $timestamp = date("Y-m-d H:i:s");
if (strcmp($level1, "International")==0) 
{
	$priority=1;
}
if (strcmp($level1, "National")==0) 
{
	$priority=2;
}
if (strcmp($level1, "Regional")==0) 
{
	$priority=3;
}
if (strcmp($level1, "Industry")==0) 
{
	$priority=4;
}
if (strcmp($level1, "Inter-College")==0) 
{
	$priority=5;
}
if (strcmp($level1, "Intra-College")==0) 
{
	$priority=6;
}
if (strcmp($level1, "Inter-Department")==0) 
{
	$priority=7;
}
if (strcmp($level1, "Intra-Department")==0) 
{
	$priority=8;
}
if(empty($chief_name))
{
	$chief_name = 'none';
}
if(empty($institution))
{
	$institution = 'none';
}
if(empty($program))
{
	$program = 'none';
}
if(empty($des1))
{
	$des1 = 'none';
}
if(!isset($_POST['Photo']))
{
	$_POST['Photo'] = 'none';
}
if(!isset($_POST['Video']))
{
	$_POST['Video'] = 'none';
}
if(!isset($_POST['VideoConf']))
{
	$_POST['VideoConf'] = 'none';
}
if(!isset($_POST['Board']))
{
	$_POST['Board'] = 'none';
}
/*error_reporting(E_STRICT);
date_default_timezone_set('America/Toronto');
require_once('class.phpmailer.php');
include("class.smtp.php");
$mail = new PHPMailer();
$body = "Seminar Hall Booking Reg: Seminar hall has been requested!!!<br><br>
Respected Sir/Madam,<br><br>
	  This is the notification about the request for Seminar hall from the Staff.<br><br>
	  Staff Name: $n1<br><br>
	  Department: $dept1<br><br>
	  Requesting Hall: $hall1 <br><br>
	  Date From: $da1   To: $da2 <br><br>
	  Timing From:$time1 To:$time2 <br><br>
	  Purpose: $pur1<br><br>
	  Chief Guest: $chief_name<br><br>
	  Chief Guest institution: $institution<br><br>
	  Program Title: $program<br><br>
	  Description: $des1<br><br>
	  Level: $level1<br><br>
	  Additional Facilities: <br><br>
	  Photograph - $_POST[Photo]<br><br>
	  Video - $_POST[Video]<br><br>
	  UPS - $_POST[VideoConf]<br><br>
	  Generator - $_POST[Board]<br><br>
So kindly refer your TCE Facility Service Account to check Availability of the Requested Hall and to accept/reject the request.<br>
<br>
Regards,<br>
TCE Facility Services";
$mail->IsSMTP();
$mail->Host = "mail.smtp2go.com";
$mail->SMTPDebug = 2;
$mail->SMTPAuth = true;
//$mail->SMTPSecure = "none";
$mail->SMTPSecure = "ssl";
//$mail->Port       = 2525;
$mail->Port = 465;
$mail->Username = "venarunreddy@gmail.com";
$mail->Password = "Vpandy@n";
$mail->SetFrom('admin@tcefacilitysystems.rf.gd', 'TCE Facility Services');
$mail->AddReplyTo("noreply@noreply.com", "noreply");
$mail->Subject = "HallBooking";
$mail->AltBody = "To view the message, please use an HTML compatible email viewer!";
$mail->MsgHTML($body);
$mail->AddAddress("rjspjohn@gmail.com", "Hall Request");
if (!$mail->Send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
}
else {
    echo "<script>alert('Message sent!');</script>";
}
*/
$con=mysqli_connect("localhost","root","","tce");
if(!$con)
{
	die("Connection failed".mysqli_connect_error());
}
$random = rand(1000,99999);
$sql1="insert into log values($random,'$n1','$dept1','$hall1','$pur1','$level1','$da1','$da2','$time1','$time2','$chief_name','$institution','$program','$des1','$_POST[Photo]','$_POST[Video]','$_POST[VideoConf]','$_POST[Board]',$priority,'$timestamp','none','none')";
$result1 = mysqli_query($con,$sql1);
if($result1)
{
	header('Location:'.'DashboardHod.php');
/*$body1 = "Hall Request Reg: <br>Hello $n1, your request has been sent to the Admin.<br><br>
  So you wait for Hall Confirmation mail from the Admin.<br><br>
  Requested Hall: $hall1<br>
  Your Request ID: $random<br>
  Thanks for Using...!<br><br>
  Regards,<br>
  TCE Facility Services";
$mail->Subject = "Hall Request Reg";
$mail->AltBody = "To view the message, please use an HTML compatible email viewer!";
$mail->MsgHTML($body1);
$mail->ClearAllRecipients();
$mail->AddAddress("rjijoejsp@gmail.com", "TCE Facility Services");
if (!$mail->Send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
} else {
	echo "<script>
alert('Check Your Mail!!!');
</script>";
    header('Location:' . 'http://api.msg91.com/api/v2/sendsms?message=Respected Sir/Madam, New Hall Request has been Received and Hall details are sent to your mail. Refer your Application. Regards,TCE Facility Services. &authkey=253736AW9EGlvEnle5c2468ec&mobiles=6383875985&route=4&sender=TCEFBS&country=91');
    //header('Location:'.'Dashboard.php');
}*/
}
else
{
	echo "Oops! something went wrong!".mysqli_error($con);
}
mysqli_close($con);
?>