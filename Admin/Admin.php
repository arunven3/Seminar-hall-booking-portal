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
?>
<html xmlns:display="http://www.w3.org/1999/xhtml">
<head>
    <title>Admin Site</title>
    <script>
        function usr1() {
            document.getElementById('da1').style.display='block';
            document.getElementById('da2').style.display='none';
            document.getElementById('da3').style.display='none';
                 }
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
            window.location='Default Report Admin.php';
        }
    </script>
<style>
     body{
    margin: 0;
    padding: 0;
    background-position: center;
    background-repeat:no-repeat;
    background-size:100% 100%;
    background: #e6f7ff;
    height: 100vh;
}
h2
{
  margin-top: 10px;
  font-family: Calibri;
  color: #e6e6e6;
  font-size: 30px;
  font-weight: bold;
}
header{
background-color: #004466;
padding:30px;
height:150px;
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
        font-weight: bold;
        border: none;
        outline: none;
        border-radius: 20px;
        height: 50px;
        width: 100px;
        font-size: 20px;
    }
    .acptbtn{
        background-color: #004466;
    }
    .acptbtn:hover{
        font-family: Calibri;
        background-color: black;
        color: #66ff33;
        transition: 0.6s;
        font-weight: bold;
        font-size: 22px;
    }
       .dnbtn{
        font-family: Calibri;
        color: white;
        border: none;
        outline: none;
        border-radius: 18px;
        height: 50px;
        width: 100px;
        font-size: 20px;
        background-color: #004466;
    }
    .dnbtn:hover{
        background-color: black;
        color: #ff1a1a;
        transition: 0.6s;
        font-family: Calibri;
        font-weight: bold;
        font-size: 20px;
    }
        .tab {
        outline: none;
        float: left;
        border: 1px solid rgba(172, 171, 171, 0.9);
        background-color: #4da6ff;
        width: 16%;
        height: 30%;
        font-family: Calibri;
        border-right: none;
        margin-left: -10px;
    }
    .tab button {
        display: block;
        background-color: inherit;
        color: black;
        font-weight: bold;
        padding: 22px 16px;
        width: 100%;
        border: 1px solid black;
        outline: none;
        text-align: center;
        cursor: pointer;
        transition: 0.3s;
        font-family: Calibri;
        font-size: 130%;
    }
    .tab button:hover {
        background-color: #999999;
        color: black;
        font-family: Calibri;
        font-weight: bold;
    }
    .tab button.active {
        background-color: #bfbfbf;
        color: black;
        font-weight: bold;
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
        font-family: "Calibri";
        font-size: 120%;
        color: white;
        font-weight: bolder;
    }
    .wr2{
        background: white;
        border-radius: 15px;
        overflow: hidden;
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
        padding: 30px 30px 30px 30px;
        width: 60%;
        height: 200px;
    }
    .sb2{
        font-family: "Calibri";
        font-weight: bold;
        margin-top: -50px;
        color: palegoldenrod;
        background: #b30059;
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
        background: #b30059;
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
    .sb3{
        font-family: "Calibri";
        font-weight: bold;
        margin-top: -50px;
        color: palegoldenrod;
        background: #b30059;
        height: 50px;
        border-radius: 5px;
        padding-left: 10%;
        width:230px;
        display: flex;
        flex-wrap: wrap;
        outline: none;
        border: none;
        text-align: center;
        font-size: 20px;
    }
    .sb3:hover{
        background-color: #ffb84d;
        color: black;
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
    }
    .t1 th, td {
        text-align: left;
        font-weight: bold;
        font-size: 20px;
        padding: 8px;
    }
    .t1 tr:nth-child(even){
       background-color: #00ffff;
   }
    .t1 tr:nth-child(odd){
        background-color: #b0b0b0;
    }
   .t1 th {
        background-color: black;
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
    .sb4{
        font-family: "Calibri";
        font-weight: bold;
        color: black;
        margin-left: 150px;
        background: #4da6ff;
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
        background-color: gray;
        color: black;
        font-weight: bold;
        font-family: Calibri;
}
.sb5{
        font-family: "Calibri";
        font-weight: bold;
        margin-left: 500px;
        color: black;
        background: #4da6ff;
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
        background-color: gray;
        color: black;
        font-weight: bold;
        font-family: Calibri;
}

.dropbtn {
   color: black;
  padding: 0px;
  font-size: 200px;
  border: none;
  border-radius:50%;
  height:60px;
    width: 60px;
    margin-top: -20px;
  margin-left: 100px;
  background: url(List.png) no-repeat;
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
h1
{
  text-align: center;
  font-family: Calibri;
  padding: 0px;
}
</style>
</head>
<body>
<header>
    <img src="Logo.png" style="margin-top: -20px;" />
    <h2>TCE Facility Services</h2>
<div class="dropdown">
  <button class="dropbtn"></button>
  <div class="dropdown-content">
        <a href="Halls Report.php">Halls Utilization</a>
        <a href="Change Password.php">Change Password</a>
        <a href="logout.php">Logout</a>
  </div>
</header>
<div style="display: block;" id="da3" >
    <div class="tab">
        <button class="tablinks" onclick="smenu(event, 'Request')" id="defaultOpen">Pending<br>Approvals</button>
        <button class="tablinks" onclick="smenu(event, 'Confirmed')">Approved</button>
        <button class="tablinks" onclick="smenu(event, 'Cancelled')">Not Approved</button>
        <button class="tablinks" onclick="smenu(event, 'Logs')">Reports</button>
    </div>
    <div id="Request" class="tabcontent">
    <?php
    $con=mysqli_connect("localhost","root","","tce");
    if(!$con)
    {
        die("Connection failed".mysqli_connect_error());
    }
    $sql="select * from log WHERE HOD='Recommended' AND Admin='none'";
    $result=mysqli_query($con,$sql);
    if(mysqli_num_rows($result)>0)
    {
             echo "<div class='t1'><table align='center' style='width: 100%;margin-left:30px;'><tr><th>Name</th><th>Department</th><th>Hall</th><th width='100'>Date</th><th>  </th><th>Click to View</th></tr>";
            while($row = mysqli_fetch_assoc($result)) {
                $id1=$row["id"];
                $sdate = $row["sdate"];
                $edate = $row["edate"];
                $start = date("d-m-Y", strtotime($sdate));
                $end = date("d-m-Y", strtotime($edate));
                echo "<form action='Recommend Admin.php' method='post'><input type='hidden' name='id' value='$id1'><tr><td> " . $row["Name"]. " </td><td> " . $row["Department"]. " </td><td> " . $row["Hall"]. " </td><td> " . $start .'<br>to '. $end."</td><td>" . "</td><td><button class='actnbtn acptbtn' type='submit' NAME='BTN_ACN' >View</button></td></tr></form>";
            }
            echo "</table></div>";
        }
    else
    {
        echo "No Approval received yet !";
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
        $sql="select * from log WHERE HOD='Recommended' AND Admin='Approved'";
        $result=mysqli_query($con,$sql);
        if(mysqli_num_rows($result)>0)
        {
                echo "<div class='t1'><table align='center' style='width: 107%;'><tr><th>Name</th><th>Department</th><th>Purpose</th><th>Level</th><th>Starting<br>Date</th><th>Ending<br>Date</th><th>Description</th><th>Deny</th></tr>";
                while($row = mysqli_fetch_assoc($result)) {
                    $id2=$row["id"];
                    $sdate = $row["sdate"];
                    $edate = $row["edate"];
                    $start = date("d-m-Y", strtotime($sdate));
                    $end = date("d-m-Y", strtotime($edate));
                    $stime = $row["stime"];
                    $etime = $row["etime"]; 
                    echo "<form action='Not Approve.php' method='post'><input type='hidden' name='id' value='$id2'><input type='hidden' name='sdate' value='$sdate'>
        <input type='hidden' name='edate' value='$edate'>
        <input type='hidden' name='stime' value='$stime'>
        <input type='hidden' name='etime' value='$etime'>
        <tr><td> " . $row["Name"]. " </td><td> " . $row["Department"]. " </td><td> " . $row["Purpose"]. " </td><td>" . $row["level"]."</td><td>" . $start."</td><td>" . $end."</td><td>" . $row["description"]. "</td><td><button class='actnbtn dnbtn' type='submit'  NAME='BTN_ACN' value='Denied2'>Not Approve</button></td></tr></form>";
                }
                echo "</table></div>";
                 }
        else
        {
            echo "Not Approved yet !";
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
        $sql="select * from log WHERE HOD='Recommended' AND Admin='Not Approved'";
        $result=mysqli_query($con,$sql);
        if(mysqli_num_rows($result)>0)
        {
                echo "<div class='t1'><table align='center' style='width: 107%;'><tr><th>Name</th><th>Department</th><th>Purpose</th><th>Level</th><th>Starting<br>Date</th><th>Ending<br>Date</th><th>Description</th><th>Accept</th></tr>";
                while($row = mysqli_fetch_assoc($result)) {
                    $id2=$row["id"];
                    $sdate = $row["sdate"];
                    $edate = $row["edate"];
                    $start = date("d-m-Y", strtotime($sdate));
                    $end = date("d-m-Y", strtotime($edate));
                    echo "<form action='Approve Mail.php' method='post'><input type='hidden' name='id' value='$id2'><tr><td> " . $row["Name"]. " </td><td> " . $row["Department"]. " </td><td> " . $row["Purpose"]. " </td><td>" . $row["level"]."</td><td>" . $start."</td><td>" . $end."</td><td>" . $row["description"]. "</td><td><button class='actnbtn acptbtn' type='submit' NAME='BTN_ACN' value='accept2''>Approve</button></td></tr></form>";
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