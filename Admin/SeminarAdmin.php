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
    $today = date("y/m/d");
    $Seminar = $_POST["Hall"];
    //echo "$today";
}
?>
<html xmlns:display="http://www.w3.org/1999/xhtml">
<head>
    <title>Admin Site</title>
    <script>
        function usr2() {
            document.getElementById('da3').style.display='block';
            document.getElementById('da2').style.display='none';
            document.getElementById('da1').style.display='none';
        }
        function usr3()
        {
            window.location='Dashboard.php';
        }
        function usr4()
        {
            window.location='Customized Report Admin.php';
        }
        function usr5()
        {
            window.location='Default Report.php';
        }
        function myFunction() {
            var txt;
            var person = prompt("Please enter your name:", "Harry Potter");
            if (person == null || person == "") {
                txt = "User cancelled the prompt.";
            } else {
                txt = "Hello " + person + "! How are you today?";
            }
            document.getElementById("demo").innerHTML = txt;
        }
    function goBook() {
  window.location='DashboardAdmin.php';
}
function goHome()
{
  window.location='AdminDashboard.php';
}
function goOut()
{
  window.location='Logout.php';
}
    </script>
    <style>
    body{
    margin: 0;
    padding: 0;
    width: 100%;
    background-position: center;
    background-repeat:no-repeat;
    background-size:100% 100%;
    background: #99ccff;
    height: 100vh;
}

header{
background-color: #004466;
padding:30px;
height:110px;
text-align:center;
margin-top:0px;
width:100%;
}
    * {
        box-sizing: border-box;
        font-family: "Calibri";
    }
    .actnbtn
    {
        font-family: Calibri;
        color: white;
        border: none;
        outline: none;
        border-radius: 20px;
        padding: 15px;
        font-size: 20px;
    }
    .acptbtn{
        background-color: green;
        font-weight: bold;
        font-family: Calibri;
    }
    .acptbtn:hover{
        background-color: blue;
        color: #fff;
        font-family: Calibri;
        transition: 0.6s;
        font-weight: bold;
        font-size: 20px;
    }
    .dnbtn{
        background-color: green;
    }
    .dnbtn:hover{
        background-color: blue;
    }

    .tab1 {
        outline: none;
        float: left;
        border: 1px solid rgba(172, 171, 171, 0.9);
        background-color: #527a7a;
        width: 16%;
        height: 30%;
        border-right: none;
        margin-top: -25px;
        margin-left: -10px;
    }
    .tab1 button {
        display: block;
        background-color: inherit;
        color: white;
        padding: 22px 16px;
        width: 100%;
        border: 1px solid black;
        outline: none;
        text-align: center;
        cursor: pointer;
        transition: 0.3s;
        font-family: Calibri;
        font-weight: bold;
        font-size: 20px;
    }
    .tab1 button:hover {
        background-color: #80ffaa;
        font-size: 20px;
        color: black;
        font-family: Calibri;
        font-weight: bold;
    }
    .tab1 button.active {
        color: black;
        background-color: wheat;
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
    .inte{
        border-radius: 10%;
    }
  input:hover
  {
      box-shadow: inset 0 0 2px 3px #6e6c58;
  }
  input:focus-within{
      background-color: khaki;
      color: #851e0a;
  }
    input[type=text] {
        width: 300px;
        padding: 12px 20px;
        margin: 8px 0;
        box-sizing: border-box;
        border: 3px solid #ccc;
        -webkit-transition: 0.5s;
        transition: 0.5s;
        outline: none;
        font-size: 15px;
    }
    input[type=password] {
        width: 300px;
        padding: 12px 20px;
        margin: 8px 0;
        box-sizing: border-box;
        border: 3px solid #ccc;
        -webkit-transition: 0.5s;
        transition: 0.5s;
        outline: none;
        font-size:15px;

    }
    input[type="button"]
    {
        background-color: #3377ff;
        border: none;
        color: white;
        padding: 10px 15px;
        text-align: center;
        font-size: 15px;
        margin: 4px;
        opacity: 0.7;
        transition: 0.3s;
        display: inline-block;
        text-decoration: none;
        cursor: pointer;
    }
    input[type="button"]:hover
    {
        opacity: 1
    }
    input[type="Submit"]
    {
        background-color: #1a75ff;
        border: none;
        color: white;
        padding: 10px 15px;
        text-align: center;
        font-family: Calibri;
        font-size: 130%;
        margin: 4px;
        transition: 0.3s;
        display: inline-block;
        text-decoration: none;
        cursor: pointer;
    }
    input[type="Submit"]:hover
    {
        background-color: #66ff66;
        font-family: Calibri;
        color: black;
        font-weight: bold;
        transition: 0.5s;
        font-size: 130%;
    }
    input[type="Reset"]
    {
        background-color: #1a75ff;
        border: none;
        color: white;
        padding: 10px 15px;
        text-align: center;
        font-size: 150%;
        font-family: Calibri;
        margin: 4px;
        transition: 0.3s;
        display: inline-block;
        text-decoration: none;
        cursor: pointer;
    }
    input[type="Reset"]:hover
    {
        background-color: #ffff66;
        font-family: Calibri;
        color: black;
        font-weight: bold;
        transition: 0.5s;
        font-size: 150%;
    }
    .lt{
        font-family: "Cambria Math";
        font-size: 120%;
        color: rgba(0, 0, 0, 0.8);
        font-weight: bolder;
    }
    .wr2{
        background: #d1e0e0;
        border-radius: 15px;
        overflow: hidden;
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
        padding: 20px 20px 20px 20px;
        width: 60%;
        height: 200px;
    }
    .sb2{
        font-family: "Calibri";
        font-weight: bold;
        margin-top: -50px;
        color: palegoldenrod;
        background: #008080;
        height: 50px;
        border-radius: 5px;
        padding-left: 15%;
        width:230px;
        display: flex;
        flex-wrap: wrap;
        outline: none;
        border: none;
        text-align: center;
        font-size: 20px;
    }
    .sb2:hover{
        background-color: #ffb84d;
        color: black;
        font-weight: bold;
        font-family: Calibri;
}
.sb1{
        font-family: "Calibri";
        font-weight: bold;
        margin-top: -50px;
        color: palegoldenrod;
        background: #008080;
        height: 50px;
        border-radius: 5px;
        padding-left: 30%;
        width:230px;
        display: flex;
        flex-wrap: wrap;
        outline: none;
        border: none;
        text-align: center;
        font-size: 20px;
    }
    .sb1:hover{
        background-color: #ffb84d;
        color: black;
        font-weight: bold;
        font-family: Calibri;
}
   
.sb4{
        font-family: "Calibri";
        font-weight: bold;
        margin-left: 150px;
        color: white;
        background: #004466;
        height: 100px;
        border-radius: 5px;
        width:250px;
        flex-wrap: wrap;
        outline: none;
        border: none;
        text-align: center;
        font-size: 25px;
    }
    .sb4:hover{
        background-color: black;
        color: lightblue;
        font-weight: bold;
        font-family: Calibri;
}
.sb5{
        font-family: "Calibri";
        font-weight: bold;
        margin-left: 500px;
        color: white;
        background: #004466;
        height: 100px;
        border-radius: 5px;
        width:250px;
        flex-wrap: wrap;
        outline: none;
        border: none;
        text-align: center;
        font-size: 25px;
    }
    .sb5:hover{
        background-color: black;
        color: lightblue;
        font-weight: bold;
        font-family: Calibri;
}
    select{
        font-size: 15px;
        display: flex;
        flex-wrap: wrap;
    }
    .t1{
        font-size: 101.7%;
    }
    .t1 table {
        border-collapse: collapse;
        width: 100%;
        font-size: 100%;
        color: black;
        font-family: Calibri;
        font-weight: bold;
    }
    .t1 th, td {
        text-align: center;
        font-size: 20px;
        padding: 8px;
    }
    .t1 tr:nth-child(even){
       background-color: #fff;
   }
    .t1 tr:nth-child(odd){
        background-color: #fff;
        color: black;
    }
   .t1 th {
        background-color: blue;
        color: white;
    }
    .hed1{
        font-size: 180%;
        background-color: whitesmoke;
        padding-left: 30px;
        padding-right: 30px;
        padding-top: 10px;
        padding-bottom: 10px;
        border-radius: 10px;
    }

p
{
    font-size: 20px;
    font-weight: bold;
    margin-top: -3px;
    font-family: "Calibri";
    text-align: center;
    color: wheat;
}
h1
{
  text-align: center;
  font-family: Calibri;
  padding: 0px;
  margin-top: -2px;
  font-size: 25px;
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
    <img src="Logo.png" style="margin-top: -20px;" />
    <p>TCE Auditorium/Seminar Hall Management Portal</p>
</header>
 <div style="margin-top: -28px;margin-left: 15px;">
   <button class="back" onclick="goHome()">Go Back</button>
   <span style="padding-right: 10px;"></span><button class="back" onclick="goBook()">Book Hall</button>
   <span style="padding-right: 10px;"></span><button class="back" onclick="goOut()">Logout</button>
</div>
 
<h1>Hearty Welcome! <br><?php  echo "$_SESSION[us2] -";?> Admin</h1>
<div style="display: block;" id="da3" >
    <div class="tab1">
        <button class="tablinks" onclick="smenu(event, 'Request')" id="defaultOpen">Requests</button>
        <button class="tablinks" onclick="smenu(event, 'Priority')">Priority Based</button>
        <button class="tablinks" onclick="smenu(event, 'Clashed')">Full Clash</button>
        <button class="tablinks" onclick="smenu(event, 'Partial')">Partial Clash</button>
        <button class="tablinks" onclick="smenu(event, 'Confirmed')">Approved</button>
        <button class="tablinks" onclick="smenu(event, 'Cancelled')">Returned</button>
        <button class="tablinks" onclick="smenu(event, 'Logs')">Reports</button>
    </div>
    <div id="Request" class="tabcontent">
    <?php
    $con=mysqli_connect("localhost","root","","tce");
    if(!$con)
    {
        die("Connection failed".mysqli_connect_error());
    }
    $sql="SELECT * from log WHERE  HOD='Recommended' and Admin='none'and Hall='$Seminar' and sdate>='$today'";
    $result=mysqli_query($con,$sql);
    if(mysqli_num_rows($result)>0)
    {
            echo "<div class='t1'><table><tr><th>Name</th><th>Department</th><th>Timing</th><th>Date</th><th>Timestamp</th><th>Click to View</th></tr>";
            while($row = mysqli_fetch_assoc($result)) {
                $id1=$row["id"];
                $sdate = $row["sdate"];
                $edate = $row["edate"];
                $start = date("d-m-Y", strtotime($sdate));
                $end = date("d-m-Y", strtotime($edate));
                echo "<form action='Recommend.php' method='post'><input type='hidden' name='id' value='$id1'><tr><td> " . $row["Name"]. " </td><td> " . $row["Department"]. " </td><td> " . $row["stime"].'<br>to '.$row["etime"] ." </td><td> " . $start .'<br>to '. $end."</td><td>".$row["timestamp"]."</td><td><button class='actnbtn acptbtn' type='submit' NAME='BTN_ACN' >View</button></td></tr></form>";
            }
            echo "</table></div>";
    }
    else
    {
        echo "No Request received yet!";
    }
    mysqli_close($con);
    ?>
    </div>

    <div id="Priority" class="tabcontent">
    <?php
    $con=mysqli_connect("localhost","root","","tce");
    if(!$con)
    {
        die("Connection failed".mysqli_connect_error());
    }
    $sql="SELECT * from log WHERE  HOD='Recommended' AND Hall='$Seminar' and Admin='none' and sdate>='$today' order by priority";
    $result=mysqli_query($con,$sql);
    if(mysqli_num_rows($result)>0)
    {
            echo "<div class='t1'><table><tr><th>Name</th><th>Department</th><th>Timing</th><th>Date</th><th>Timestamp</th><th>Priority</th><th>Click to View</th></tr>";
            while($row = mysqli_fetch_assoc($result)) {
                $id1=$row["id"];
                $sdate = $row["sdate"];
                $edate = $row["edate"];
                $start = date("d-m-Y", strtotime($sdate));
                $end = date("d-m-Y", strtotime($edate));
                echo "<form action='Recommend.php' method='post'><input type='hidden' name='id' value='$id1'><tr><td> " . $row["Name"]. " </td><td> " . $row["Department"]. " </td><td> " . $row["stime"].'<br>to '.$row["etime"] ." </td><td> " . $start .'<br>to '. $end."</td><td>".$row["timestamp"]."</td><td>".$row["priority"]."</td><td><button class='actnbtn acptbtn' type='submit' NAME='BTN_ACN' >View</button></td></tr></form>";
            }
            echo "</table></div>";
    }
    else
    {
        echo "No Request received yet!";
    }
    mysqli_close($con);
    ?>
    </div>

    <div id="Clashed" class="tabcontent">
    <?php
    $con=mysqli_connect("localhost","root","","tce");
    if(!$con)
    {
        die("Connection failed".mysqli_connect_error());
    }
    $sql="select distinct a.id,a.Name, a.Department,a.stime,a.etime,a.sdate,a.edate,a.timestamp,a.priority 
from log a, log b where a.HOD='Recommended' and a.Admin='none' AND a.Hall='$Seminar' and a.sdate>='$today' and a.sdate = b.sdate and a.stime=b.stime and a.edate=b.edate and a.etime=b.etime and a.Hall=b.Hall";
    $result=mysqli_query($con,$sql);
    if(mysqli_num_rows($result)>0)
    {
            echo "<div class='t1'><table><tr><th>Name</th><th>Department</th><th>Timing</th><th>Date</th><th>Timestamp</th><th>Priority</th><th>Click to View</th></tr>";
            while($row = mysqli_fetch_assoc($result)) {
                $id1=$row["id"];
                $sdate = $row["sdate"];
                $edate = $row["edate"];
                $start = date("d-m-Y", strtotime($sdate));
                $end = date("d-m-Y", strtotime($edate));
                echo "<form action='Recommend.php' method='post'><input type='hidden' name='id' value='$id1'><tr><td> " . $row["Name"]. " </td><td> " . $row["Department"]. " </td><td> " . $row["stime"].'<br>to '.$row["etime"] ." </td><td> " . $start .'<br>to '. $end."</td><td>".$row["timestamp"]."</td><td>".$row["priority"]."</td><td><button class='actnbtn acptbtn' type='submit' NAME='BTN_ACN' >View</button></td></tr></form>";
            }
            echo "</table></div>";
    }
    else
    {
        echo "No Request received yet!";
    }
    mysqli_close($con);
    ?>
    </div>

    <div id="Partial" class="tabcontent">
    <?php
    $con=mysqli_connect("localhost","root","","tce");
    if(!$con)
    {
        die("Connection failed".mysqli_connect_error());
    }
    $sql="select distinct a.id,a.Name, a.Department,a.stime,a.etime,a.sdate,a.edate,a.timestamp,a.priority 
from log a, log b where a.HOD='Recommended' and a.Admin='none' AND a.Hall='$Seminar' and a.sdate>='$today' and a.sdate = b.sdate and a.edate=b.edate and a.Hall=b.Hall";
    $result=mysqli_query($con,$sql);
    if(mysqli_num_rows($result)>0)
    {
            echo "<div class='t1'><table><tr><th>Name</th><th>Department</th><th>Timing</th><th>Date</th><th>Timestamp</th><th>Priority</th><th>Click to View</th></tr>";
            while($row = mysqli_fetch_assoc($result)) {
                $id1=$row["id"];
                $sdate = $row["sdate"];
                $edate = $row["edate"];
                $start = date("d-m-Y", strtotime($sdate));
                $end = date("d-m-Y", strtotime($edate));
                echo "<form action='Recommend.php' method='post'><input type='hidden' name='id' value='$id1'><tr><td> " . $row["Name"]. " </td><td> " . $row["Department"]. " </td><td> " . $row["stime"].'<br>to '.$row["etime"] ." </td><td> " . $start .'<br>to '. $end."</td><td>".$row["timestamp"]."</td><td>".$row["priority"]."</td><td><button class='actnbtn acptbtn' type='submit' NAME='BTN_ACN' >View</button></td></tr></form>";
            }
            echo "</table></div>";
    }
    else
    {
        echo "No Request received yet!";
    }
    mysqli_close($con);
    ?>
    </div>

    <div id="Confirmed" class="tabcontent">
        <?php
        $con=mysqli_connect("localhost","root","","tce");
        if(!$con)
        {
            die("Connection failed".mysqli_connect_error());
        }
        $sql="select * from log where Admin='Approved' AND Hall='$Seminar' and sdate>='$today'";
        $result=mysqli_query($con,$sql);
        if(mysqli_num_rows($result)>0)
        {
                echo "<div class='t1'><table><tr><th>Name</th><th>Department</th><th>Priority</th><th>Purpose</th><th>Level</th><th>Date</th><th>Timing</th><th>Action</th></tr>";
                while($row = mysqli_fetch_assoc($result)) {
                    $id2=$row["id"];
                    $sdate = $row["sdate"];
                    $edate = $row["edate"];
                    $stime = $row["stime"];
                    $etime = $row["etime"];
                    $start = date("d-m-Y", strtotime($sdate));
                    $end = date("d-m-Y", strtotime($edate));
                    echo "<form action='Not Recommend.php' method='post'><input type='hidden' name='id' value='$id2'><input type='hidden' name='sdate' value='$sdate'>
        <input type='hidden' name='edate' value='$edate'>
        <input type='hidden' name='stime' value='$stime'>
        <input type='hidden' name='etime' value='$etime'>
        <tr><td> " . $row["Name"]. " </td><td> " . $row["Department"]. " </td><td> " . $row["priority"]. " </td><td> " . $row["Purpose"]. " </td><td>" . $row["level"]."</td><td>" . $start .' to<br>'. $end."</td><td>" . $row["stime"]. " to<br>".$row["etime"]."</td><td><button class='actnbtn acptbtn' type='submit'  NAME='BTN_ACN' value='Denied2'>Return</button></td></tr></form>";
                }
                echo "</table></div>";
        }
        else
        {
            echo "No Approval yet !";
        }
        mysqli_close($con);
        ?>
    </div>
    <div id="Cancelled" class="tabcontent">
        <?php
        $con=mysqli_connect("localhost","root","","tce");
        if(!$con)
        {
            die("Connection failed".mysqli_connect_error());
        }
        $sql="select * from  log where Admin='Not Approved' AND Hall='$Seminar' and sdate>='$today'";
        $result=mysqli_query($con,$sql);
        if(mysqli_num_rows($result)>0)
        {
                echo "<div class='t1'><table><tr><th>Name</th><th>Department</th><th>Priority</th><th>Purpose</th><th>Level</th><th>Date</th><th>Timing</th><th>Action</th></tr>";
                while($row = mysqli_fetch_assoc($result)) {
                    $id2=$row["id"];
                    $sdate = $row["sdate"];
                    $edate = $row["edate"];
                    $stime = $row["stime"];
                    $etime = $row["etime"];
                    $start = date("d-m-Y", strtotime($sdate));
                    $end = date("d-m-Y", strtotime($edate));
                    echo "<form action='Recommend Mail.php' method='post'><input type='hidden' name='id' value='$id2'><input type='hidden' name='sdate' value='$sdate'>
        <input type='hidden' name='edate' value='$edate'>
        <input type='hidden' name='stime' value='$stime'>
        <input type='hidden' name='etime' value='$etime'>
                    <tr><td> " . $row["Name"]. " </td><td> " . $row["Department"]. " </td><td> " . $row["priority"]. " </td><td> " . $row["Purpose"]. " </td><td>" . $row["level"]."</td><td>" . $start .' to<br>'. $end."</td><td>" . $row["stime"]. " to<br>".$row["etime"]."</td><td><button class='actnbtn acptbtn' type='submit' NAME='BTN_ACN' value='accept2'>Approve</button></td></tr></form>";
                }
                echo "</table></div>";
        }
        else
        {
            echo "No Cancellation yet !";
        }
        mysqli_close($con);
        ?>
    </div>
   <div id="Logs" class="tabcontent">
        <div style="padding-top: 100px;"></div>
      <div style="font-size: 170%"> <button class="sb4" onclick="usr4()">Customised Report</button></div>
      <div style="margin-top: -100px;"></div>
      <div style="font-size: 170%;"> <button class="sb5" onclick="usr5()">Default Report</button></div>
  </div>
</div>
</body>
<script>
    function smenu(evt, cityName) {
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
        }
        document.getElementById(cityName).style.display = "block";
        evt.currentTarget.className += " active";
    }
    // Get the element with id="defaultOpen" and click on it
    document.getElementById("defaultOpen").click();
</script>
</html>