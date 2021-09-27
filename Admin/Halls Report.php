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
       function goBack() {
  window.history.back();
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
    <title>Utilization Report</title>
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
    height: 260px;
    background: rgba(0, 0, 0, 0.5);
    color: #fff;
    margin-left: 500px;
    margin-top: 100px;
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
    color: white;
    font-size: 20px;
}
select{
            font-size: 18px;
            display: flex;
            flex-wrap: wrap;
            font-family: Calibri;
            background: white;
            border-color: rgba(98, 98, 98, 0.26);
            border-style: solid;
            border-width: 3px;
            width: 250px;
            color: black;
        }
select:hover{
            animation: ease-in-out forwards;
            box-shadow: 0px 0px 35px 5px;
            opacity: 70%;
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
    margin-top: 20px;
    background: #1c8adb;
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
        <h2>Seminar Halls Utilization Report</h2>
      </header>
        <div style="margin-top: -28px;margin-left: 15px;">
   <button class="back" onclick="goBack()">Go Back</button>
   <span style="padding-right: 10px;"></span><button class="back" onclick="goHome()">Home</button>
   <span style="padding-right: 10px;"></span><button class="back" onclick="goOut()">Logout</button>
</div>
        <div class="login-box">
            <img src="Analytic.png" class="avatar">
            <form action="Chart Admin.php" method="post">
            <p>Month</p>
            <input type="month" name="Month" style="width: 250px;height: 30px;font-size: 20px;" required>
            <input type="submit" name="Report" value="View Report" /> 
            </form>
        </div>
 <div style="padding-top: 0px"></div>
    <div>
            <footer style="height: 10px;margin-top: 400px;">
<p style="margin-left:-10px;color:white;font-weight: bold;font-family: Calibri;font-size: 20px;margin-top: -10px;text-align: center;">&copy; 2018 Developed and Maintained by Department of Information Technology, Thiagarajar College of Engineering, Madurai - 15. All rights reserved.</p>
 </footer>
        </div>
</body>
</html>