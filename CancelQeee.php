<?php
$con=mysqli_connect("localhost","root","","tce");
if(!$con)
{
	die("Connection failed".mysqli_connect_error());
}
$email = $_POST['email'];
$rid = $_POST['Request'];
$select1 = "select name from admin where email='$email'";
$select2 = "select name from hod where email='$email'";
$select3 = "select name from staff where email='$email'";
$result1 = mysqli_query($con,$select1);
$result2 = mysqli_query($con,$select2);
$result3 = mysqli_query($con,$select3);

if(mysqli_num_rows($result1)>0)
{
    while ($row = mysqli_fetch_assoc($result1))
     {
    	$name = $row["name"];
    }
    $sql = "delete from qeee where Name='$name' and id='$rid'";
    $result4 = mysqli_query($con,$sql);
mysqli_close($con);
}
 
if(mysqli_num_rows($result2)>0)
{
    while ($row = mysqli_fetch_assoc($result2))
     {
      $name = $row["name"];
    }
    $sql = "delete from qeee where Name='$name' and id='$rid'";
    $result4 = mysqli_query($con,$sql);
    mysqli_close($con);
}   

if(mysqli_num_rows($result3)>0)
{
    while ($row = mysqli_fetch_assoc($result3))
     {
      $name = $row["name"];
    }
    $sql = "delete from qeee where Name='$name' and id='$rid'";
    $result4 = mysqli_query($con,$sql);
mysqli_close($con);
} 
header("Location:Dashboard.php");
/*  error_reporting(E_STRICT);
date_default_timezone_set('America/Toronto');
require_once('class.phpmailer.php');
include("class.smtp.php");
$mail = new PHPMailer();
$body = "Conferrence Hall Cancellation Reg: <br>$name has cancelled request...!<br>
  Request ID: $rid<br>
  E-Mail: $email<br><br>
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
$mail->Subject = "Cancel Request";
$mail->AltBody = "To view the message, please use an HTML compatible email viewer!";
$mail->MsgHTML($body);
$mail->AddAddress("rjijoejsp@gmail.com", "TCE");
if (!$mail->Send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
} else {
    echo "<script>alert('Your Hall Request has been cancelled!');</script>";
    header("Location:Dashboard.php");
}*/
if(mysqli_num_rows($result1)==0 && mysqli_num_rows($result2)==0 && mysqli_num_rows($result3)==0)
{
    echo "<script>alert('Mail not Found !');
    window.location='Booking Status.php';</script>";    
}
?>