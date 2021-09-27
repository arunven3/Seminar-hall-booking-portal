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
?>
<?php
$Id1=$_POST["id"];
if ($_POST["Recommend"]=="Forward") {
    $con = mysqli_connect("localhost", "root", "", "tce");
    if (!$con) {
        die("Connection failed" . mysqli_connect_error());
    }
    $sql = "select * from log where id=$Id1";
    $result = mysqli_query($con, $sql);
    if (mysqli_num_rows($result) > 0) {
        $sql = "UPDATE log SET HOD = 'Recommended' where id=$Id1";
        $result = mysqli_query($con, $sql);
        mysqli_close($con);
        echo "<script>
        alert('Forwarded successfully');
        window.location='HOD.php;
        </script>";
        header('Location:' . 'HOD.php');
    }
}

if ($_POST["BTN_ACN"] == "accept2") {
        $con = mysqli_connect("localhost", "root", "", "tce");
        if (!$con) {
            die("Connection failed" . mysqli_connect_error());
        }
        $sql = "select * from log where id=$Id1 AND HOD='Not Recommended'";
        $result = mysqli_query($con, $sql);
        if (mysqli_num_rows($result) > 0) {
            $sql = "UPDATE log SET  HOD = 'Recommended' where id=$Id1";
            $result = mysqli_query($con, $sql);
            mysqli_close($con);
            echo "<script>
        alert('Forwarded successfully');
        window.location='HOD.php;
        </script>";
        header('Location:' . 'HOD.php');
        }
    }
?>