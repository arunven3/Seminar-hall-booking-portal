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
  <script type="text/javascript">
    function goBack() {
  window.location='AdminDashboard.php';
}
function goHome()
{
  window.location='DashboardAdmin.php';
}
  </script>
    <title>Admin Dashboard</title>
    <?php
    $day = Date('Y-m-d');
    //echo "$day";
      ?>

     <style>
     *{
        margin: 0px;
        padding: 0px;
        box-sizing: border-box;
        font-family: Calibri;
        font-weight: bold;
    }
    h2
}
{
  margin-top: -5px;
  font-family: Calibri;
  color: #e6e6e6;
  font-size: 30px;
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
    .t1{
        font-size: 101.7%;
    }
    .t1 table {
        width: 70%;
        font-size: 100%;
        margin-left: 160px;
        margin-top: 5px;
        border: 2px solid black;
    }
    .t1 td {
        text-align: center;
        padding: 2px;
        font-size: 17px;
        width: 20%;
    }
    .t1 tr:nth-child(even){
       background-color: white;
   }
    .t1 tr:nth-child(odd){
        background-color: white;
    }
   .t1 th {
        text-align: center;
        background-color: #004466;
        color: white;
        font-size: 25px;
    }
body{
    margin: 0;
    padding: 0;
    background-position: center;
    background-color: #99ccff;
    background-repeat:no-repeat;
    background-size:100% 100%;
    height: 50vh;
}
header{
background-color: #004466;
padding:30px;
height:100px;
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
    margin-top: 6px;
    border-radius: 10px;
    padding-right: 5%;
    background: green;
    color: #fff;
    font-family: Calibri;
    font-size: 20px;
    font-weight: bold;
}
input[type="submit"]:hover
{
    cursor: pointer;
    background: blue;
    color: white;
    transition: 0.6s;
    font-family: Calibri;
    font-size: 20px;
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
  margin-top: -35px;
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
  color: black;
  font-size: 25px;
  font-family: Calibri;
  padding: 0px;
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
    font-size: 20px;
    font-weight: bold;
    margin-top: -3px;
    font-family: "Calibri";
    text-align: center;
    color: wheat;
}
</style>  
</head>
    <body>
        <header>
         <img src="Logo.png" style="margin-top: -20px;" />
    <p>TCE Auditorium/Seminar Hall Management Portal</p>
    </header>
     <div style="margin-top: -28px;margin-left: 15px;">
   <button class="back" onclick="goBack()">Home</button>
   <span style="padding-right: 10px;"></span><button class="back" onclick="goHome()">Book Hall</button>
</div>
<div class="dropdown">
  <button class="dropbtn"></button>
  <div class="dropdown-content">
    <a href="Halls Report.php">Halls Utilization</a>
        <a href="Change Password.php">Change Password</a>
        <a href="logout.php">Logout</a>
  </div>
</div>
                <div class='t1'><table>
                    <tr><td>Select Hall to view</td>
                      <td><form action="SeminarAdmin.php" method="post"><img src="Civil.jpg" style="height: 110px;width: 220px;"><input type="submit" name="Hall" value="Civil Seminar Hall"></form></td>
                      <td><form action="SeminarAdmin.php" method="post"><img src="Mech.jpg" style="height: 110px;width: 220px;"><input type="submit" name="Hall" value="Mechanical Seminar Hall"></form></td>
                      <td><form action="SeminarAdmin.php" method="post"><img src="EEE.jpg" style="height: 110px;width: 220px;"><input type="submit" name="Hall" value="EEE Seminar Hall"></form></td>
                    </tr>
                    <tr><td><form action="SeminarAdmin.php" method="post"><img src="ECE.jpg" style="height: 110px;width: 220px;"><input type="submit" name="Hall" value="ECE Seminar Hall"></form></td>
                      <td><form action="SeminarAdmin.php" method="post"><img src="CSE.jpg" style="height: 110px;width: 220px;"><input type="submit" name="Hall" value="CSE Seminar Hall"></form></td>
                      <td><form action="SeminarAdmin.php" method="post"><img src="IT.jpg" style="height: 110px;width: 220px;"><input type="submit" name="Hall" value="IT Seminar Hall"></form></td>
                      <td><form action="AudiAdmin.php" method="post"><img src="KS Audi.jpg" style="height: 110px;width: 220px;"><input type="submit" name="Hall" value="KS Auditorium"></form></td>
                    </tr>

                    <tr><td><form action="AudiAdmin.php" method="post"><img src="KM Audi.jpg" style="height: 110px;width: 220px;"><input type="submit" name="Hall" value="KM Auditorium"></form></td>
                    <td><form action="AudiAdmin.php" method="post"><img src="air.jpg" style="height: 110px;width: 220px;"><input type="submit" name="Hall" value="Open Auditorium"></form></td>
                    <td><form action="ConfAdmin.php" method="post"><img src="guest.jpg" style="height: 110px;width: 220px;"><input type="submit" name="Hall" value="Conferrence Hall"></form></td>
                    <td><form action="QeeeAdmin.php" method="post"><img src="lib.jpg" style="height: 110px;width: 220px;"><input type="submit" name="Hall" value="QEEE Seminar Hall"></form></td>
                  </tr>
                    
                  </table>
        <div>
            <footer>
                
<p style="margin-left:-10px;color:white;font-weight: bold;font-family: Calibri;font-size: 20px;margin-top: -10px;text-align: center;">&copy; 2018 Developed and Maintained by Department of Information Technology, Thiagarajar College of Engineering, Madurai - 15. All rights reserved.</p>
 </footer>
        </div>
    </body>
</html>