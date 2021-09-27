<html>
<head>
    <script type="text/javascript">
      function goBack() {
  window.history.back();
}
</script>
    <title>Forgot Password</title>
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
    background-size: 1200px;
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
    color: lightblue;
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
    font-family: Calibri;
    font-size: 25px;
    font-weight: bold;
    border-radius: 20px;
}
.login-box input[type="submit"]:hover
{
    cursor: pointer;
    background: #39dc79;
    color: blue;
    transition: 0.6s;
    font-family: Calibri;
    font-size: 26px;
    font-weight: bold;
}
.login-box input[type=text]:placeholder {
  color: white;
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
  font-weight: bold;
  color: black;
}
a:hover
{
  color: blue;
  transition: 0.6s;
  font-size: 24px;
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
        <h2>Forgot Password!</h2>
    </header>
    <div style="margin-top: -28px;margin-left: 15px;">
   <button class="back" onclick="goBack()">Go Back </button>
</div>
         <div class="login-box">
        <img src="Pass.png" class="avatar">
            <form action="Recover Password.php" method="post">
            <p>E-Mail ID</p>
            <input type="text" id="1" name="email" placeholder="Enter Mail ID" required autocomplete="off">
            <input type="submit" name="Submit" value="Submit" /> 
            </form>
        </div>
        <div style="padding-top: 16px"></div>
        <div>
            <footer>
<p style="margin-left:-10px;color:white;font-weight: bold;font-family: Calibri;font-size: 20px;margin-top: -10px;text-align: center;">&copy; 2018 Developed and Maintained by Department of Information Technology, Thiagarajar College of Engineering, Madurai - 15. All rights reserved.</p>
 </footer>
        </div>
    </body>
</html>