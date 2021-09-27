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
  window.history.back();
}
function goHome()
{
  window.location='DashboardHod.php';
}
  </script>
    <title>TCE Auditoriums</title>
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
        margin-left: 220px;
        margin-top: 20px;
        border: 1px solid black;
    }
    .t1 td {
        text-align: center;
        padding: 4px;
        font-size: 19px;
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
    background: #99ccff;
    background-size: 1200px;
    background-position: center;
    font-family: sans-serif;
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
    padding: 5px;
    outline: none;
    text-align: center;
    background: green;
    color: #fff;
    border-radius: 10px;
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
  font-family: Calibri;
  padding: 0px;
  color: wheat;
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
        <h1>Auditorium Details</h1>
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
                <div class='t1'><table><tr><th>Details</th><th>KS Audi</th><th>KM Audi</th><th>Open Audi</th></tr>
                    <tr><td>Image</td><td><img src="KS Audi.jpg" style="height: 120px; width: 250px;"></td><td><img src="KM Audi.jpg" style="height: 120px; width: 250px;"></td><td><img src="air.jpg" style="height: 120px; width: 250px;"></td></tr>
                    <tr><td>Mike</td><td><img src="Tick.png" style="height: 20px; width: 20px;margin-left: 10px;"></td><td><img src="Tick.png" style="height: 20px; width: 20px;margin-left: 10px;"></td><td><img src="Tick.png" style="height: 20px; width: 20px;margin-left: 10px;"></td></tr>
                    <tr><td>Seating</td><td>220</td><td>600</td><td>1000</td></tr>
                    <tr><td>Speaker</td><td><img src="Tick.png" style="height: 20px; width: 20px;margin-left: 10px;"></td><td><img src="Tick.png" style="height: 20px; width: 20px;margin-left: 10px;"></td><td><img src="Tick.png" style="height: 20px; width: 20px;margin-left: 10px;"></td></tr>
                    <tr><td>Tentative Availability</td>
                    <td><form action="CheckAudi.php" method="post"><input type='hidden' name='Department' value='KS Auditorium'><input type='date' name='Date' required><span style="padding-right: 5px;"></span><input type="submit" id="check" name="KS" value="Check"></form></td>
                      <td><form action="CheckAudi.php" method="post"><input type='hidden' name='Department' value='KM Auditorium'><input type='date' name='Date' required><span style="padding-right: 5px;"></span><input type="submit" name="KM" value="Check"></form></td>
                      <td><form action="CheckAudi.php" method="post"><input type='hidden' name='Department' value='Open Auditorium'><input type='date' name='Date' required><span style="padding-right: 5px;"></span><input type="submit" name="Open" value="Check"></form></td>
                    </tr>
                    <tr><td>Reserve</td><td><form action="bookinghall2.php" method="post"><input type="submit" name="ksaudi" value="Request"></form></td><td><form action="bookinghall2.php" method="post"><input type="submit" name="kmaudi" value="Request"></form></td><td><form action="bookinghall2.php" method="post"><input type="submit" name="openaudi" value="Request"></form></td></tr>
                  </table>
        <div>
            <footer>
                
<p style="margin-left:-10px;color:white;font-weight: bold;font-family: Calibri;font-size: 20px;margin-top: -10px;text-align: center;">&copy; 2018 Developed and Maintained by Department of Information Technology, Thiagarajar College of Engineering, Madurai - 15. All rights reserved.</p>
 </footer>
        </div>
    </body>
</html>