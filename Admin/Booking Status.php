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
<html>
<head>
    <title>Booked Hall Status</title>
    <script type="text/javascript">
      function goBack() {
  window.history.back();
}
function goHome()
{
  window.location='DashboardAdmin.php';
}
    </script>
     <style>
     *{
        margin: 0px;
        padding: 0px;
        box-sizing: border-box;
        font-family: Calibri;
        font-weight: bold;
    }
    h2
{
  font-family: Calibri;
  color: wheat;
  font-size: 40px;
  font-weight: bold;
}
     .tabcontent {
        float: left;
        padding: 0px 12px;
        width: 80%;
        border-left: none;
        height: 100%;
    }
    .t1{
        font-size: 101.7%;
    }
    .t1 table {
        border-collapse: collapse;
        width: 80%;
        margin-left: 120px;
        margin-top: 20px;
        font-size: 100%;
    }
    .t1 th, td {
        text-align: center;
        padding: 5px;
    }
    .t1 tr:nth-child(even){
       background-color: #e6f7ff;
   }
    .t1 tr:nth-child(odd){
        background-color: #e6f7ff;
    }
   .t1 th {
        background-color: black;
        color: white;
    }
body{
    margin: 0;
    padding: 0;
    background: #99ccff;
    background-size: 1200px;
    background-position: center;
    font-family: sans-serif;
}
h1{
    margin: 0;
    padding: 0 0 20px;
    text-align: center;
    font-size: 40px;
    color: black;
    font-family: Calibri;
}
header{
background-color: #004466;
padding:30px;
height:110px;
text-align:center;
margin-top:-10px;
width:100%;
}
footer {
    background-color: black;
    padding: 30px;
    height: 20px;
    color: white;
    width: 100%;
    position: absolute;
    bottom: 0px;
}
input[type="submit"]
{
    border: none;
    outline: none;
    padding: 5px;
    background: green;
    color: #fff;
    font-family: Calibri;
    font-size: 22px;
    font-weight: bold;
    border-radius: 20px;
}
input[type="submit"]:hover
{
    cursor: pointer;
    background: lightgreen;
    color: blue;
    transition: 0.6s;
    font-family: Calibri;
    font-size: 22px;
    font-weight: bold;
}
.dropbtn {
   color: black;
  padding: 10px;
  font-size: 200px;
  border: none;
  border-radius:20%;
  height:60px;
    width: 60px;
  margin-top: -40px;
  margin-left: 100px;
  background: url(List.png) no-repeat;
  background-position: center;
  background-size:60px;
  }

.dropdown {
  position: relative;
  display: inline-block;
    margin-top: -50px;
  margin-left:1100px;

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
h1
{
  text-align: center;
  font-family: Calibri;
  padding: 0px;
  margin-top: 20px;
}
.back
{
        font-family: Calibri;
        color: black;
        padding: 2px;
        font-weight: bold;
        border: none;
        background-color: wheat;
        outline: 2px solid black;
        border-radius: 3px;
        font-size: 18px;
}
.back:hover{
        background-color: orange;
        color: black;
        font-family: Calibri;
        transition: 0.6s;
        font-weight: bold;
        font-size: 18px;
    }
</style>  
</head>
    <body>
        <header>
        <h2>Status of the Booked Hall</h2>
    </header>
    <div style="margin-top: -28px;margin-left: 15px;">
   <button class="back" onclick="goBack()">Go Back </button>
   <span style="padding-right: 10px;"></span><button class="back" onclick="goHome()">Home</button>
</div>
<div class="dropdown">
  <button class="dropbtn"></button>
  <div class="dropdown-content">
    <a href="Booking Status.php">Hall Status</a>
    <a href="Change Password.php">Change Password</a>
     <a href="logout.php">Logout</a>
  </div>
</div>
    <?php
        $con=mysqli_connect("localhost","root","","tce");
        if(!$con)
        {
            die("Connection failed".mysqli_connect_error());
        }
        $sql="select * from log where Department='$_SESSION[us3]' and Name='$_SESSION[us2]'";
        $result=mysqli_query($con,$sql);
        if(mysqli_num_rows($result)>0)
        {
                echo "<div class='t1'><table><tr><th >Request ID</th><th >Booked Hall</th><th>Date</th><th>Timing</th><th>HOD's<br>Recommendation</th><th >Admin's<br>Approval</th><th>Cancel</th></tr>";
                while($row = mysqli_fetch_assoc($result)) {
                  $sdate = $row["sdate"];
                $edate = $row["edate"];
                $start = date("d-m-Y", strtotime($sdate));
                $end = date("d-m-Y", strtotime($edate));
                    echo "<tr><td>".$row["id"]." </td><td> " . $row["Hall"]. " </td><td>".$start." to ".$end."</td><td>".$row["stime"]." - ".$row["etime"]."</td><td>". $row["HOD"]."</td><td>". $row["Admin"]."</td><td><form action='Cancel Request.php' method='post'>
                            <input type='hidden' name='email' value=$_SESSION[us1] ?>
                            <input type='hidden' name='id' value=$row[id]>
        <input type='submit' name='Cancel' value='Cancel'>
    </form></td></tr>";
                }
                echo "</table></div>";
                }
       
        $sql1="select * from auditorium where Department='$_SESSION[us3]' and Name='$_SESSION[us2]'";
        $result1=mysqli_query($con,$sql1);
        if(mysqli_num_rows($result1)>0)
        {
                echo "<div class='t1'><table><tr><th >Request ID</th><th >Booked Hall</th><th>Date</th><th>Timing</th><th >Admin's<br>Approval</th><th>Cancel</th></tr>";
                while($row1 = mysqli_fetch_assoc($result1)) {
                $sdate1 = $row1["sdate"];
                $edate1 = $row1["edate"];
                $start1 = date("d-m-Y", strtotime($sdate1));
                $end1 = date("d-m-Y", strtotime($edate1));
                    echo "<tr><td>".$row1["id"]." </td><td> " . $row1["Hall"]. " </td><td>".$start1." to ".$end1."</td><td>".$row1["stime"]." - ".$row1["etime"]."</td><td>". $row1["Admin"]."</td><td><form action='Cancel Auditorium.php' method='post'>
                            <input type='hidden' name='email' value=$_SESSION[us1] ?>
                            <input type='hidden' name='id' value=$row1[id]>
        <input type='submit' name='Cancel' value='Cancel'>
    </form></td></tr>";
                }
                echo "</table></div>";
                }
        
         $sql2="select * from conferrence where Department='$_SESSION[us3]' and Name='$_SESSION[us2]'";
        $result2=mysqli_query($con,$sql2);
        if(mysqli_num_rows($result2)>0)
        {
                echo "<div class='t1'><table><tr><th >Request ID</th><th >Booked Hall</th><th>Date</th><th>Timing</th><th >Admin's<br>Approval</th><th>Cancel</th></tr>";
                while($row2 = mysqli_fetch_assoc($result2)) {
                $sdate2 = $row2["sdate"];
                $edate2 = $row2["edate"];
                $start2 = date("d-m-Y", strtotime($sdate2));
                $end2 = date("d-m-Y", strtotime($edate2));
                    echo "<tr><td>".$row2["id"]." </td><td> " . $row2["Hall"]. " </td><td>".$start2." to ".$end2."</td><td>".$row2["stime"]." - ".$row2["etime"]."</td><td>". $row2["Admin"]."</td><td><form action='Cancel Conferrence.php' method='post'>
                            <input type='hidden' name='email' value=$_SESSION[us1] ?>
                            <input type='hidden' name='id' value=$row2[id]>
        <input type='submit' name='Cancel' value='Cancel'>
    </form></td></tr>";
                }
                echo "</table></div>";
                }

         $sql3="select * from qeee where Department='$_SESSION[us3]' and Name='$_SESSION[us2]'";
        $result3=mysqli_query($con,$sql3);
        if(mysqli_num_rows($result3)>0)
        {
                echo "<div class='t1'><table><tr><th >Request ID</th><th >Booked Hall</th><th>Date</th><th>Timing</th><th >Admin's<br>Approval</th><th>Cancel</th></tr>";
                while($row3 = mysqli_fetch_assoc($result3)) {
                $sdate3 = $row3["sdate"];
                $edate3 = $row3["edate"];
                $start3 = date("d-m-Y", strtotime($sdate3));
                $end3 = date("d-m-Y", strtotime($edate3));
                    echo "<tr><td>".$row3["id"]." </td><td> " . $row3["Hall"]. " </td><td>".$start3." to ".$end3."</td><td>".$row3["stime"]." - ".$row3["etime"]."</td><td>". $row3["Admin"]."</td><td><form action='Cancel Qeee.php' method='post'>
                            <input type='hidden' name='email' value=$_SESSION[us1] ?>
                            <input type='hidden' name='id' value=$row3[id]>
        <input type='submit' name='Cancel' value='Cancel'>
    </form></td></tr>";
                }
                echo "</table></div>";
                }
        
        mysqli_close($con);
        ?>
         <div style="padding-top: -50px"></div>
        <div>
            <footer>
                
<p style="margin-left:-10px;color:white;font-weight: bold;font-family: Calibri;font-size: 20px;margin-top: -10px;text-align: center;">&copy; 2018 Developed and Maintained by Department of Information Technology, Thiagarajar College of Engineering, Madurai - 15. All rights reserved.</p>
 </footer>
        </div>
    </body>
</html>