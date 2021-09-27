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
<html>
<head>
  <script type="text/javascript">
    function goBack() {
  window.history.back();
}
function goHome()
{
  window.location='Dashboard.php';
}
  </script>
    <title>Seminar Halls</title>
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
        margin-top: 20px;
        border: 1px solid black;
    }
    .t1 td {
        text-align: center;
        padding: 4px;
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
  color: wheat;
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
</style>  
</head>
    <body>
        <header>
        <h1>Seminar Hall Details</h1>
    </header>
     <div style="margin-top: -28px;margin-left: 15px;">
   <button class="back" onclick="goBack()">Go Back</button>
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
                <div class='t1'><table><tr><th>Details</th><th>Civil</th><th>Mech</th><th>EEE</th><th>ECE</th><th>CSE</th><th>IT</th></tr>
                    <tr><td>Image</td><td><img src="Civil.jpg" style="height: 100px; width: 150px;"></td><td><img src="Mech.jpg" style="height: 100px; width: 150px;"></td><td><img src="EEE.jpg" style="height: 100px; width: 150px;"></td><td><img src="ECE.jpg" style="height: 100px; width: 150px;"></td><td><img src="CSE.jpg" style="height: 100px; width: 150px;"></td><td><img src="IT.jpg" style="height: 100px; width: 150px;"></td></tr>
                    
                    <tr><td>Seating</td><td>100</td><td>80</td><td>80</td><td>70</td><td>80</td><td>100</td></tr>
                    <tr><td>System</td><td><img src="Tick.png" style="height: 20px; width: 20px;margin-left: 10px;"></td><td><img src="Tick.png" style="height: 20px; width: 20px;margin-left: 10px;"></td><td><img src="Tick.png" style="height: 20px; width: 20px;margin-left: 10px;"></td><td><img src="Tick.png" style="height: 20px; width: 20px;margin-left: 10px;"></td><td><img src="Tick.png" style="height: 20px; width: 20px;margin-left: 10px;"></td><td><img src="Tick.png" style="height: 20px; width: 20px;margin-left: 10px;"></td></tr>
                    <tr><td>Projector</td><td><img src="Tick.png" style="height: 20px; width: 20px;margin-left: 10px;"></td><td><img src="Tick.png" style="height: 20px; width: 20px;margin-left: 10px;"></td><td><img src="Tick.png" style="height: 20px; width: 20px;margin-left: 10px;"></td><td><img src="Tick.png" style="height: 20px; width: 20px;margin-left: 10px;"></td><td><img src="Tick.png" style="height: 20px; width: 20px;margin-left: 10px;"></td><td><img src="Tick.png" style="height: 20px; width: 20px;margin-left: 10px;"></td></tr>
                    <tr><td>AC</td><td><img src="Tick.png" style="height: 20px; width: 20px;margin-left: 10px;"></td><td><img src="Tick.png" style="height: 20px; width: 20px;margin-left: 10px;"></td><td><img src="Tick.png" style="height: 20px; width: 20px;margin-left: 10px;"></td><td><img src="Tick.png" style="height: 20px; width: 20px;margin-left: 10px;"></td><td><img src="Tick.png" style="height: 20px; width: 20px;margin-left: 10px;"></td><td><img src="Tick.png" style="height: 20px; width: 20px;margin-left: 10px;">
                    </td></tr>
                    <tr><td>Tentative Availability</td><td><form action="CheckHall2.php" method="post"><input type='hidden' name='Department' value='Civil'><input type='date' name='Date' required><input type="submit" id="check" name="Civil" value="Check"></form></td>
                      <td><form action="CheckHall2.php" method="post"><input type='hidden' name='Department' value='Mechanical'><input type='date' name='Date' required><input type="submit" name="Mechanical" value="Check"></form></td>
                      <td><form action="CheckHall2.php" method="post"><input type='hidden' name='Department' value='EEE'><input type='date' name='Date' required><input type="submit" name="EEE" value="Check"></form></td>
                      <td><form action="CheckHall2.php" method="post"><input type='hidden' name='Department' value='ECE'><input type='date' name='Date' required><input type="submit" name="ECE" value="Check"></form></td>
                      <td><form action="CheckHall2.php" method="post"><input type='hidden' name='Department' value='CSE'><input type='date' name='Date' required><input type="submit" name="CSE" value="Check"></form></td>
                      <td><form action="CheckHall2.php" method="post"><input type='hidden' name='Department' value='IT'><input type='date' name='Date' required><input type="submit" name="IT" value="Check"></form></td></tr>
                    <tr><td>Reserve</td><td><form action="bookinghall1.php" method="post"><input type="submit" name="Civil" value="Request"></form></td><td><form action="bookinghall1.php" method="post"><input type="submit" name="Mechanical" value="Request"></form></td><td><form action="bookinghall1.php" method="post"><input type="submit" name="EEE" value="Request"></form></td><td><form action="bookinghall1.php" method="post"><input type="submit" name="ECE" value="Request"></form></td><td><form action="bookinghall1.php" method="post"><input type="submit" name="CSE" value="Request"></form></td><td><form action="bookinghall1.php" method="post"><input type="submit" name="IT" value="Request"></form></td></tr>
                  </table>
        <div>
            <footer>
                
<p style="margin-left:-10px;color:white;font-weight: bold;font-family: Calibri;font-size: 20px;margin-top: -10px;text-align: center;">&copy; 2018 Developed and Maintained by Department of Information Technology, Thiagarajar College of Engineering, Madurai - 15. All rights reserved.</p>
 </footer>
        </div>
    </body>
</html>