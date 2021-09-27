<?php
 session_start(); 
 if(!isset($_SESSION['us1'])) // If session is not set then redirect to Login Page
       {
           header("Location:../index.php");  
       } 
?>
<html>
<head>
  <script type="text/javascript">
    function goBack() {
  window.location='HOD.php';
}
</script>
  <meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1.0,user-scalable=0" />
	<title>Dashboard</title>
	<link rel="stylesheet" href="style1.css">
  
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
    padding: 0;
    background-position: center;
    background-repeat:no-repeat;
    background-size:100% 100%;
    background: #99ccff;
    height: 100vh;
}
.dropbtn {
   color: black;
  padding: 10px;
  font-size: 200px;
  border: none;
  border-radius:20%;
  height:60px;
    width: 60px;
  margin-top: -50px;
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
  font-size: 25px;
  margin-top: 20px;
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
    color: white;
    width: 100%;
    position: absolute;
    bottom: 0px;
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
    <img src="Logo.png" /><br><br><br>
    <h1>Hearty Welcome! to <br>TCE Auditorium/Seminar Hall Management Portal</h1>
  </header>
  <div style="margin-top: -28px;margin-left: 15px;">
  <button class="back" onclick="goBack()">Go Back to My Page</button>
</div>
<div class="dropdown">
  <button class="dropbtn"></button>
  <div class="dropdown-content">
    <a href="Booking Status.php">Hall Status</a>
    <a href="Change Password.php">Change Password</a>
     <a href="logout.php">Logout</a>
  </div>
</div>
<table style="margin-top: 70px;">
	<tr>
		<td>
  <div class="pad1">
  	<a href="SeminarHalls.php" id="book2"><img src="meeting.jpg" width="250" height="200" style="margin-left: -200px;margin-top: -170px;"></a>
  	<a href="SeminarHalls.php" id="book2"><h4 style="margin-top: 45px;margin-left: -150px;text-decoration: none;display: inline-block;color:black;">Seminar Halls</h4></a>
  	 </div>
  	</td>
 <td>
<div class="pad2">
	<a href="Auditorium.php" id="book2"><img src="ks.jpg" width="250" height="200" style="margin-left: -200px;margin-top: -170px;"></a>
	<a href="Auditorium.php" id="book2"><h4 style="margin-top: 45px;margin-left: -120px;text-decoration: none;display: inline-block;color:black;">Auditoriums</h4></a>
</div>
</td> 
<td>
<div class="pad5">
<a href="bookinghall4.php" id="book5"><img src="guest.jpg" width="250" height="200" style="margin-left: -200px;margin-top: -170px;"></a>
<a href="bookinghall4.php" id="book2"><h4 style="margin-top: 45px;margin-left: -120px;text-decoration: none;display: inline-block;color:black;">Guest House</h4></a>
</div>
</td>
<td>
<div class="pad6">
<a href="bookinghall3.php" id="book6"><img src="lib.jpg" width="250" height="200" style="margin-left: -200px;margin-top: -170px;"></a>
<a href="bookinghall3.php" id="book2"><h4 style="margin-top: 45px;margin-left: -130px;text-decoration: none;display: inline-block;color:black;">QEEE Hall</h4></a>
</div>
</td>
</tr>
</table>
<br>
 <div>
<footer >
<p style="margin-left:-20px;color:white;font-weight: bold;font-family: Calibri;font-size: 20px;text-align: center;">&copy; 2018 Developed and Maintained by Department of Information Technology, Thiagarajar College of Engineering, Madurai - 15. All rights reserved.</p>
 </footer>
        </div></body>
</html>