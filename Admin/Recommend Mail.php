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
if ($_POST["Recommend"]=="Approve") {
    $con = mysqli_connect("localhost", "root", "", "tce");
    if (!$con) {
        die("Connection failed" . mysqli_connect_error());
    }
    $sql = "select id from log where id=$Id1";
    $sql1 = "select id from auditorium where id=$Id1";
    $sql2 = "select id from conferrence where id=$Id1";
    $sql3 = "select id from qeee where id=$Id1";
    
    $result = mysqli_query($con, $sql);
    $result1 = mysqli_query($con, $sql1);
    $result2 = mysqli_query($con, $sql2);
    $result3 = mysqli_query($con, $sql3);

    if(mysqli_num_rows($result)>0)
    {
        $sql4 = "UPDATE log SET Admin = 'Approved' where id=$Id1";
        $result4 = mysqli_query($con, $sql4);
        echo "<script>
        alert('Approved successfully');
        window.location='AdminDashboard.php;
        </script>";
        header('Location:' . 'AdminDashboard.php');
    }

    if(mysqli_num_rows($result1)>0)
    {
        $sql5 = "UPDATE auditorium SET Admin = 'Approved' where id=$Id1";
        $result5 = mysqli_query($con, $sql5);
        echo "<script>
        alert('Approved successfully');
        window.location='AdminDashboard.php;
        </script>";
        header('Location:' . 'AdminDashboard.php');
    }

    if(mysqli_num_rows($result2)>0)
    {
        $sql6 = "UPDATE conferrence SET Admin = 'Approved' where id=$Id1";
        $result6 = mysqli_query($con, $sql6);
        echo "<script>
        alert('Approved successfully');
        window.location='AdminDashboard.php;
        </script>";
        header('Location:' . 'AdminDashboard.php');
    }

    if(mysqli_num_rows($result3)>0)
    {
        $sql7 = "UPDATE qeee SET Admin = 'Approved' where id=$Id1";
        $result7 = mysqli_query($con, $sql7);
        echo "<script>
        alert('Approved successfully');
        window.location='AdminDashboard.php;
        </script>";
        header('Location:' . 'AdminDashboard.php');
    }
    mysqli_close($con);
}
    
if ($_POST["BTN_ACN"] == "accept2") 
{
  $con = mysqli_connect("localhost", "root", "", "tce");
    if (!$con) {
        die("Connection failed" . mysqli_connect_error());
    }
    $sql = "select id from log where id=$Id1 and Admin='Not Approved'";
    $sql1 = "select id from auditorium where id=$Id1 and Admin='Not Approved'";
    $sql2 = "select id from conferrence where id=$Id1 and Admin='Not Approved'";
    $sql3 = "select id from qeee where id=$Id1 and Admin='Not Approved'";
    
    $result = mysqli_query($con, $sql);
    $result1 = mysqli_query($con, $sql1);
    $result2 = mysqli_query($con, $sql2);
    $result3 = mysqli_query($con, $sql3);

    if(mysqli_num_rows($result)>0)
    {
        $sql4 = "UPDATE log SET Admin = 'Approved' where id=$Id1 and Admin='Not Approved'";
        $result4 = mysqli_query($con, $sql4);
        echo "<script>
        alert('Approved successfully');
        window.location='AdminDashboard.php;
        </script>";
        header('Location:' . 'AdminDashboard.php');
    }

    if(mysqli_num_rows($result1)>0)
    {
        $sql5 = "UPDATE auditorium SET Admin = 'Approved' where id=$Id1 and Admin='Not Approved'";
        $result5 = mysqli_query($con, $sql5);
        echo "<script>
        alert('Approved successfully');
        window.location='AdminDashboard.php;
        </script>";
        header('Location:' . 'AdminDashboard.php');
    }

    if(mysqli_num_rows($result2)>0)
    {
        $sql6 = "UPDATE conferrence SET Admin = 'Approved' where id=$Id1 and Admin='Not Approved'";
        $result6 = mysqli_query($con, $sql6);
        echo "<script>
        alert('Approved successfully');
        window.location='AdminDashboard.php;
        </script>";
        header('Location:' . 'AdminDashboard.php');
    }

    if(mysqli_num_rows($result3)>0)
    {
        $sql7 = "UPDATE qeee SET Admin = 'Approved' where id=$Id1 and Admin='Not Approved'";
        $result7 = mysqli_query($con, $sql7);
        echo "<script>
        alert('Approved successfully');
        window.location='AdminDashboard.php;
        </script>";
        header('Location:' . 'AdminDashboard.php');
    }
    mysqli_close($con);  
}
?>