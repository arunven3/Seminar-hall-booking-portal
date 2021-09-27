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
    <script type="text/javascript">
function goHome()
{
  window.location='AdminDashboard.php';
}
function goOut()
{
  window.location='Logout.php';
}
  </script>
    <title>Approve or Return</title>
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
    background: #99ccff;
    background-position: center;
    font-family: sans-serif;
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
        outline: 2px solid black;
        font-size: 100%;
        margin-top: 50px;
        border-collapse: collapse;
    }
    .t1 th, td {
        text-align: center;
        padding: 10px;
    }
    .t1 tr:nth-child(even){
       background-color: #fff;
   }
    .t1 tr:nth-child(odd){
        background-color: #fff;
    }
   .t1 th {
        background-color: blue;
        color: white;
    }
h2
{
  font-family: Calibri;
  color: wheat;
  font-size: 40px;
  text-align: center;
  font-weight: bold;
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
    border-radius: 10px;
}
input[type="submit"]:hover
{
    cursor: pointer;
    background: blue;
    color: #fff;
    transition: 0.6s;
    font-family: Calibri;
    font-size: 22px;
    font-weight: bold;   
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
p
{
  padding: 1px;
}
</style>
</head>
<body>
    <header>
        <h2>Hall Request Details</h2>
      </header>
       <div style="margin-top: -28px;margin-left: 15px;">
   <button class="back" onclick="goHome()">Home</button>
   <span style="padding-right: 10px;"></span><button class="back" onclick="goOut()">Logout</button>
</div>
<div id="Logs" class="tabcontent">
<?php
    $Id1=$_POST["id"];
        $con=mysqli_connect("localhost","root","","tce");
        if(!$con)
        {
            die("Connection failed".mysqli_connect_error());
        }
        $sql="select * from qeee where id=$Id1";
        $result=mysqli_query($con,$sql);
        if(mysqli_num_rows($result)>0)
        {
          echo "<div class='t1'><table align='left'><tr><th>Name</th><th>Department</th><th>Hall</th><th>Priority</th><th>Purpose</th><th>Level</th><th>Date</th><th>Time</th><th>Chief Guest</th><th>Institution</th><th>Program</th><th>Description</th></tr>";
                while($row = mysqli_fetch_assoc($result)) {
                    $id1 = $row["id"];
                    $sdate = $row["sdate"];
                    $start = date("d-m-Y", strtotime($sdate));
                    $edate = $row["edate"];
                    $end = date("d-m-Y", strtotime($edate));
                    $stime = $row["stime"];
                    $etime = $row["etime"]; 
                    echo "<tr><td> " . $row["Name"]. " </td><td> " . $row["Department"]. " </td><td> " . $row["Hall"]. " </td><td>".$row["priority"]."</td><td> " . $row["Purpose"]. " </td><td>" . $row["level"]."</td><td>" . $start .'<br>to '. $end."</td><td>" . $row["stime"].' to '.$row["etime"]."</td><td>" . $row["chiefname"]. "</td><td>". $row["institution"]."</td><td>" . $row["program"]. "</td><td>". $row["description"]."</td></tr>";
                   }

                   echo "<tr><td></td><td></td><td></td><td></td><td></td><td><form action='Recommend Mail.php' method='post'>
            <input type='hidden' name='id' value='$id1'>
            <input type='hidden' name='sdate' value='$sdate'>
        <input type='hidden' name='edate' value='$edate'>
        <input type='hidden' name='stime' value='$stime'>
        <input type='hidden' name='etime' value='$etime'>
        <input type='submit' name='Recommend' value='Approve'>
    </form></td>
    <td><form action='Not RecommendQeee.php' method='post'>
        <input type='hidden' name='id' value='$id1'>
        <input type='hidden' name='sdate' value='$sdate'>
        <input type='hidden' name='edate' value='$edate'>
        <input type='hidden' name='stime' value='$stime'>
        <input type='hidden' name='etime' value='$etime'>
        <input type='submit' name='Not_Recommend' value='Return'>
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
<p style="margin-left:-10px;color:white;font-weight: bold;font-family: Calibri;font-size: 20px;margin-top: -10px;text-align: center;">&copy; 2018 Developed and Maintained by Department of Information Technology, Thiagarajar College of Engineering, Madurai - 15. All rights reserved.</p>
 </footer>
        </div>
</body>
</html>