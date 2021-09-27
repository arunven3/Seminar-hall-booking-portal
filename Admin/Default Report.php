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
    <title>Default Report</title>
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
.login-box{
    width: 320px;
    height: 250px;
    background: rgba(0, 0, 0, 0.5);
    color: #fff;
    margin-top: 100px;
    margin-left: 500px;
    position: absolute;
    box-sizing: border-box;
    padding: 70px 30px;
}
.avatar{
    width: 130px;
    height: 130px;
    border-radius: 50%;
    position: absolute;
    top: -70px;
    margin-left: 70px;
}
.login-box p{
    margin: 0;
    padding: 0;
    font-weight: bold;
    color: lightblue;
    font-size: 20px;
}
.login-box input{
    width: 100%;
    margin-bottom: 20px;
}
.login-box input[type="submit"]
{
    border: none;
    outline: none;
    height: 40px;
    margin-top: 10px;
    background: #004466;
    color: #fff;
    font-family: Calibri;
    font-size: 22px;
    font-weight: bold;
    border-radius: 20px;
}
.login-box input[type="submit"]:hover
{
    cursor: pointer;
    background: black;
    color: lightblue;
    transition: 0.6s;
    font-family: Calibri;
    font-size: 23px;
    font-weight: bold;
}
   
h2
{
  font-family: Calibri;
  color: wheat;
  font-size: 40px;
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
.login-box h4
{
    color: black;
    font-family: Calibri;
    font-size: 16px;
    margin-top: 10px;
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
        <h2>Default Report Generation</h2>
      </header>
        <div style="margin-top: -28px;margin-left: 15px;">
   <button class="back" onclick="goHome()">Home</button>
   <span style="padding-right: 10px;"></span><button class="back" onclick="goOut()">Logout</button>
</div>
    <div class="login-box">
            <img src="Report.png" class="avatar">
            <form action="Default HOD.php" method="post">
            <p>Month</p>
            <input type="month" name="Month" style="width: 250px;height: 30px;font-size: 20px;" required>
            <p>Seminar Hall</p>
            <select name="Seminar" required>
                                <option>Select Seminar Hall</option>
                                <option>Civil</option>
                                <option>Mechanical</option>
                                <option>EEE</option>
                                <option>ECE</option>
                                <option>CSE</option>
                                <option>IT</option>
                                </select>
            <input type="submit" name="Report" value="Generate Report" /> 
            </form>
             <h4>Download Report as Excel Document</h4>
        </div>
        <div>
            <footer>
<p style="margin-left:-10px;color:white;font-weight: bold;font-family: Calibri;font-size: 20px;margin-top: -10px;text-align: center;">&copy; 2018 Developed and Maintained by Department of Information Technology, Thiagarajar College of Engineering, Madurai - 15. All rights reserved.</p>
 </footer>
        </div>
</body>
</html>