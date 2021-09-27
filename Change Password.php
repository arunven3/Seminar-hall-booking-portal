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
 <script type="text/javascript">
    function goBack() {
  window.history.back();
}
function goHome()
{
  window.location='Dashboard.php';
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
body{
    margin: 0;
    padding: 0;
    background: #99ccff;
    width: 100%;
    background-position: center;
    font-family: sans-serif;
    height: 100px;
}
.login-box{
    width: 320px;
    height: 300px;
    background: rgba(0, 0, 0, 0.5);
    color: #fff;
    margin-left: 500px;
    position: absolute;
    margin-top: 120px;
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
h1{
    margin: 0;
    padding: 0 0 20px;
    text-align: center;
    font-size: 24px;
    color: white;
    font-family: Calibri;
}
.login-box p{
    margin: 0;
    padding: 0;
    font-weight: bold;
    color: white;
    font-size: 20px;
}
.login-box input{
    width: 100%;
    margin-bottom: 20px;
}
.login-box input[type="text"], input[type="password"]
{
    border: none;
    border-bottom: 1px solid #fff;
    background: transparent;
    outline: none;
    height: 40px;
    color: #fff;
    font-size: 16px;
}

.login-box input[type="submit"]
{
    border: none;
    outline: none;
    height: 40px;
    background: #1c8adb;
    color: #fff;
    font-size: 25px;
    border-radius: 20px;
    font-family: Calibri;
    font-weight: bold;
}
.login-box input[type="submit"]:hover
{
    cursor: pointer;
    background: black;
    color: lightblue;
    transition: 0.6s;
    font-family: Calibri;
    font-size: 26px;
    font-weight: bold;
}

.login-box a{
    text-decoration: none;
    font-size: 14px;
    color: #fff;
}
.login-box a:hover
{
    color: #39dc79;
}
a{
  font-weight: bold;
  font-size: 20px;
  font-family: courier new;
}
a:hover
{
  color: #ff0066;
  transition: 0.6s;
  font-size: 22px;
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
<head>
    <title>Change Password</title>
</head>
    <body>
    <header>
        <h2>Change Password</h2>
      </header>
         <div style="margin-top: -28px;margin-left: 15px;">
   <button class="back" onclick="goBack()">Go Back</button>
</div>
        <div class="dropdown">
  <button class="dropbtn"></button>
  <div class="dropdown-content">
    <a href="Booking Status.php">Hall Status</a>
    <a href="Change Password.php">Change Password</a>
     <a href="logout.php">Logout</a>
  </div>
</div>
    <div class="login-box">
    <img src="Pass.png" class="avatar">
            <form action="Update-Password.php" method="post">
            <p>Old Password</p>
            <input type="password" id="1" name="Old" placeholder="Enter Old Password" required minlength="8" autocomplete="off">
            <p>New Password</p>
            <input type="password" id="2" name="New" placeholder="Enter New Password" required minlength="8" autocomplete="off">
            <input type="submit" name="Submit" value="Change" /> 
            </form>
        </div>
    <div>
    <footer>
        <p style="color:white;font-weight: bold;font-family: Calibri;font-size: 20px;margin-top: -10px;text-align: center;">&copy; 2018 Developed and Maintained by Department of Information Technology, Thiagarajar College of Engineering, Madurai - 15. All rights reserved.</p>
    </footer>
</div>
    </body>
</html>