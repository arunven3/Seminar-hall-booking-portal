<?php
$con=mysqli_connect("localhost","root","","tce");
if(!$con)
{
	die("Connection failed".mysqli_connect_error());
}
$email = $_POST['email'];
$select1 = "select email from admin where email='$email'";
$select2 = "select email from hod where email='$email'";
$select3 = "select email from staff where email='$email'";
$result1 = mysqli_query($con,$select1);
$result2 = mysqli_query($con,$select2);
$result3 = mysqli_query($con,$select3);
if(mysqli_num_rows($result1)>0)
{
$sql = "select password from admin where email = '$email'";
$result1 = mysqli_query($con,$sql);
if (mysqli_num_rows($result1)>0) {
    while ($row = mysqli_fetch_assoc($result1))
     {
    	$password = $row["password"];
    }
}
mysqli_close($con);
error_reporting(E_STRICT);
date_default_timezone_set('America/Toronto');
require_once('class.phpmailer.php');
include("class.smtp.php");
$mail = new PHPMailer();
$body = "Hello<br>Your Password is: $recovered<br><br>
Regards,<br>
TCE Facility Services.";
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
$mail->SetFrom('admin@tcefacilitysystems.rf.gd', 'TCE Facility Services');
$mail->AddReplyTo("noreply@noreply.com", "noreply");
$mail->Subject = "Forgot Password";
$mail->AltBody = "To view the message, please use an HTML compatible email viewer!";
$mail->MsgHTML($body);
$mail->AddAddress($email, "TCE");
if (!$mail->Send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
} else {
    echo "<script>alert('Message sent!');
    window.location='Forgot Password.php';</script>";
}
} 
if(mysqli_num_rows($result2)>0)
{
$sql = "select password from hod where email = '$email'";
$result1 = mysqli_query($con,$sql);
if (mysqli_num_rows($result1)>0) {
    while ($row = mysqli_fetch_assoc($result1))
     {
        $password = $row["password"];
    }
}
$recovered = base64_decode($password);
mysqli_close($con);
error_reporting(E_STRICT);
date_default_timezone_set('America/Toronto');
require_once('class.phpmailer.php');
include("class.smtp.php");
$mail = new PHPMailer();
$body = "Hello<br>Your Password is: $recovered<br><br>
Regards,<br>
TCE Facility Services.";
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
$mail->SetFrom('admin@tcefacilitysystems.rf.gd', 'TCE Facility Services');
$mail->AddReplyTo("noreply@noreply.com", "noreply");
$mail->Subject = "Forgot Password";
$mail->AltBody = "To view the message, please use an HTML compatible email viewer!";
$mail->MsgHTML($body);
$mail->AddAddress($email, "TCE");
if (!$mail->Send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
} else {
    echo "<script>alert('Message sent!');
    window.location='Forgot Password.php';</script>";
}
} 
if(mysqli_num_rows($result3)>0)
{
$sql = "select password from staff where email = '$email'";
$result1 = mysqli_query($con,$sql);
if (mysqli_num_rows($result1)>0) {
    while ($row = mysqli_fetch_assoc($result1))
     {
        $password = $row["password"];
    }
}
$recovered = base64_decode($password);
mysqli_close($con);
error_reporting(E_STRICT);
date_default_timezone_set('America/Toronto');
require_once('class.phpmailer.php');
include("class.smtp.php");
$mail = new PHPMailer();
$body = "Hello<br>Your Password is: $recovered<br><br>
Regards,<br>
TCE Facility Services.";
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
$mail->SetFrom('admin@tcefacilitysystems.rf.gd', 'TCE Facility Services');
$mail->AddReplyTo("noreply@noreply.com", "noreply");
$mail->Subject = "Forgot Password";
$mail->AltBody = "To view the message, please use an HTML compatible email viewer!";
$mail->MsgHTML($body);
$mail->AddAddress($email, "TCE");
if (!$mail->Send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
} else {
    echo "<script>alert('Message sent!');
    window.location='Forgot Password.php';</script>";
}
}
if(mysqli_num_rows($result1)==0 && mysqli_num_rows($result2)==0 && mysqli_num_rows($result3)==0)
{
    echo "<script>alert('Mail not Found !');
    window.location='Forgot Password.php';</script>";    
}
?>