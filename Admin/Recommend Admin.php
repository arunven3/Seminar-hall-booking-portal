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
<html xmlns:display="http://www.w3.org/1999/xhtml">
<head>
    <title>Approval Page</title>
<style>
*{
        margin: 0px;
        padding: 0px;
        box-sizing: border-box;
        font-family: Calibri;
        font-weight: bold;
    }
body{
    margin: 0;
    width: 100%;
    height: 100px;
    padding: 0;
    background: #e6f7ff;
    background-position: center;
    font-family: Calibri;
}
.tabcontent {
        float: left;
        padding: 0px 12px;
        width: 80%;
        border-left: none;
        height: 100%;
        margin-right: 10px;
    }
    .t1{
        font-size: 101.7%;
    }
    .t1 table {
        width: 125%;
        font-size: 100%;
        border: 2px solid black;
    }
    .t1 th, td {
        text-align: center;
        padding: 8px;
    }
    .t1 tr:nth-child(even){
       background-color: #00ffff;
   }
    .t1 tr:nth-child(odd){
        background-color: #e6f7ff;
    }
   .t1 th {
        background-color: black;
        color: white;
    }
    h1{
    margin: 0;
    padding: 0 0 20px;
    text-align: center;
    font-size: 40px;
    color: black;
    font-family: Calibri;
}
h2
{
  margin-top: -5px;
  font-family: Calibri;
  color: #e6e6e6;
  font-size: 30px;
  font-weight: bold;
}
header{
background-color: #004466;
padding:30px;
height:140px;
text-align:center;
margin-top:-10px;
width:100%;
}
footer {
    background-color: black;
    padding: 30px;
    height: 20px;
    position: absolute;
    bottom: 0px;
    color: white;
    width: 100%;
}
.tab input[type="submit"]
{
    border: none;
    outline: none;
    height: 40px;
    width: 105%;
    background: #004466;
    color: #fff;
    font-family: Calibri;
    font-size: 22px;
    font-weight: bold;
    border-radius: 10px;
}
.tab input[type="submit"]:hover
{
    cursor: pointer;
    background: black;
    color: lightblue;
    transition: 0.6s;
    font-family: Calibri;
    font-size: 22px;
    font-weight: bold;
}
.tab1 input[type="submit"]
{
    border: none;
    outline: none;
    height: 40px;
    width: 100%;
    background: #004466;
    color: #fff;
    font-family: Calibri;
    font-size: 22px;
    font-weight: bold;
    border-radius: 10px;
}
.tab1 input[type="submit"]:hover
{
    cursor: pointer;
    background: black;
    color: lightblue;
    transition: 0.6s;
    font-family: Calibri;
    font-size: 22px;
    font-weight: bold;   
}

.dropbtn {
   color: black;
  padding: 0px;
  font-size: 200px;
  border: none;
  border-radius:50%;
  height:60px;
    width: 60px;
  margin-left: 100px;
  background: url(More1.png) no-repeat;
  background-position: center;
  background-size:60px;

}

.dropdown {
  position: relative;
  display: inline-block;
    margin-top: -50px;
  margin-left: 1100px;

}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  font-weight: bold;
  text-align: center;
  font-size: 15px;
  font-family: Calibri;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover 
{
  background-color: lightblue;
  font-size: 16px;
  font-weight: bold;
  transition: 0.6s;
  color: blue;
  font-family: Calibri; 
}

.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover .dropbtn {
  background-color: lightblue;
}
</style>
</head>
<body>
    <header>
        <img src="Logo.png" />
        <h2>TCE Facility Services</h2>
        <div class="dropdown">
  <button class="dropbtn"></button>
  <div class="dropdown-content">
        <a href="Dashboard.php">Book Hall</a>
        <a href="SearchHall.php">Availability Checking</a>
        <a href="Halls Report.php">Hall Utilization</a>
        <a href="Change Password.php">Change Password</a>
        <a href="logout.php">Logout</a>
  </div>
</div>
    </header>
    <h1>Approve or Return</h1>
<div id="Logs" class="tabcontent">
<?php
    $Id1=$_POST["id"];
        $con=mysqli_connect("localhost","root","","tce");
        if(!$con)
        {
            die("Connection failed".mysqli_connect_error());
        }
        $sql="select * from log where id=$Id1";
        $result=mysqli_query($con,$sql);
        if(mysqli_num_rows($result)>0)
        {
                echo "<div class='t1'><table align='left'><tr><th>Name</th><th>Department</th><th>Hall</th><th>Purpose</th><th>Level</th><th>Date</th><th>Time</th><th>Chief Guest</th><th>Institution</th><th>Program</th><th>Description</th></tr>";
                while($row = mysqli_fetch_assoc($result)) {
                    $id1=$row["id"];
                    $sdate = $row["sdate"];
                    $edate = $row["edate"];
                    $start = date("d-m-Y", strtotime($sdate));
                    $end = date("d-m-Y", strtotime($edate));
                    $stime = $row["stime"];
                    $etime = $row["etime"]; 
                    echo "<tr><td> " . $row["Name"]. " </td><td> " . $row["Department"]. " </td><td> " . $row["Hall"]. " </td><td> " . $row["Purpose"]. " </td><td>" . $row["level"]."</td><td>" . $start .'<br>to '. $end."</td><td>" . $row["stime"].' to '.$row["etime"]."</td><td>" . $row["chiefname"]. "</td><td>". $row["institution"]."</td><td>" . $row["program"]. "</td><td>". $row["description"]."</td></tr>";
                }
                echo "<tr><td></td><td></td><td></td><td></td><td><form action='Approve Mail.php' method='post' class='tab'>
            <input type='hidden' name='id' value='$id1'>
        <input type='submit' name='Approve' value='Approve'>
    </form></td>
    <td><form action='Not Approve.php' method='post' class='tab1'>
        <input type='hidden' name='id' value='$id1'>
        <input type='hidden' name='sdate' value='$sdate'>
        <input type='hidden' name='edate' value='$edate'>
        <input type='hidden' name='stime' value='$stime'>
        <input type='hidden' name='etime' value='$etime'>
        <input type='submit' name='Not_Approve' value='Return'>
    </form></td><td></td><td></td><td></td><td></td><td></td><tr>";
                echo "</table></div>";
                }
        else
        {
            echo "Empty Log";
        }
        mysqli_close($con);
        ?>
</div>
    </div>
    <div style="padding-top: 0px"></div>
    <div>
            <footer>
<p style="margin-left:-10px;color:white;font-weight: bold;font-family: Bauhmas;font-size: 20px;margin-top: -10px;text-align: center;">&copy; 2018 Developed and Maintained by Department of Information Technology, Thiagarajar College of Engineering, Madurai - 15. All rights reserved.</p>
 </footer>
        </div>
</body>
</html>