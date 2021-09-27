<?php
session_start(); 
 if(!isset($_SESSION['us1'])) // If session is not set then redirect to Login Page
       {
           header("Location:index.php");  
       }
       else {
           $now = time();
           if ($now > $_SESSION['expire']) {
               session_destroy();
           }
       }
$con=mysqli_connect("localhost","root","","tce");
if(!$con)
{
	die("Connection failed".mysqli_connect_error());
}
$old = $_POST['Old'];
$new = $_POST['New'];
$hashed = base64_encode($old);
$select1 = "select Password from admin where Password='$old' and Email='$_SESSION[us1]'";
$select2 = "select Password from hod where Password='$hashed' and Email='$_SESSION[us1]'";
$select3 = "select Password from staff where Password='$hashed' and Email='$_SESSION[us1]'";
$result1 = mysqli_query($con,$select1);
$result2 = mysqli_query($con,$select2);
$result3 = mysqli_query($con,$select3);

if(mysqli_num_rows($result1)>0)
{
$hashed1 = base64_encode($new);
$sql = "update admin set Password='$new' where Password='$old' and Email='$_SESSION[us1]'";
if (mysqli_query($con, $sql)) {
    echo "<script>alert('Password Updated!');
window.location='Admin.php';
</script>";
}
mysqli_close($con);
} 

if(mysqli_num_rows($result2)>0)
{
$hashed1 = base64_encode($new);
$sql = "update hod set Password='$hashed1' where Password='$hashed' and Email='$_SESSION[us1]'";
if (mysqli_query($con, $sql)) {
    echo "<script>alert('Password Updated!');
window.location='HOD.php';
</script>";
}
mysqli_close($con);
} 

if(mysqli_num_rows($result3)>0)
{
$hashed1 = base64_encode($new);
$sql = "update staff set Password='$hashed1' where Password='$hashed' and Email='$_SESSION[us1]'";
if (mysqli_query($con, $sql)) {
    echo "<script>alert('Password Updated!');
window.location='Dashboard.php';
</script>";
}
mysqli_close($con);
} 

if(mysqli_num_rows($result1)==0 && mysqli_num_rows($result2)==0 && mysqli_num_rows($result3)==0)
{
    echo "<script>alert('Password Mis-matching !');
    window.location='Change Password.php';</script>";    
}

?>
