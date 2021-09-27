<html>
<head>
    <meta content="2">
</head>
<title>TCE Facility Services</title>
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
    background-color: #99ccff;
    background-repeat:no-repeat;
    background-size:100% 100%;
    height: 100vh;
  }
.avatar{
    width: 130px;
    align-self: center;
    height: 120px;
    border-radius: 50%;
    position: absolute;
    margin-top: -70px;
    margin-left: -20px;
    left: calc(50% - 50px);
}
h1{
    margin-top: 5px;
    text-align: center;
    font-weight: bold;
    font-family: "Calibri";
}
.user {
    width: 90%;
    max-width: 340px;
    margin: 10vh auto;
    margin-top:-30px;
}
.user__header {
    text-align: center;
    opacity: 0;
    border-radius: 50%;
    transform: translate3d(0, 500px, 0);
    animation: arrive 500ms ease-in-out 0.7s forwards;
}

.user__title {
    font-size: 25px;
    margin-bottom: -20px;
    font-weight: bold;
    color: #1a1a00;
    margin-top: -5px;
}

.form {
    margin-top: -30px;
    border-radius: 6px;
    overflow: hidden;
    opacity: 0;
    transform: translate3d(0, 500px, 0);
    animation: arrive 500ms ease-in-out 0.9s forwards;
}

.form--no {
    animation: NO 1s ease-in-out;
    opacity: 1;
    transform: translate3d(0, 0, 0);
}

.form__input {
    display: block;
    width: 120%;
    padding: 20px;
    font-family: "Calibri";
    -webkit-appearance: none;
    border: 0;
    outline: 0;
    transition: 0.3s;
    
    &:focus {
        background: darken(#fff, 3%);
    }
}
.form__input:hover {
    display: block;
    width: 100%;
    padding: 20px;
    font-family: "Calibri";
    -webkit-appearance: none;
    border: 0;
    outline: 0;
    transition: 0.3s;
    border-bottom: 1px solid #000000;
    &:focus {
        background: darken(#fff, 3%);
    }
}

.btn {
    
    width: 100%;
    padding: 20px;
    font-family: Calibri;
    font-size: 30px;
    font-weight: bold;
    -webkit-appearance: none;
    outline: 0;
    border: 0;
    color: white;
    background: #0066cc;
}
.btn:hover {
    
    width: 100%;
    padding: 20px;
    font-family: Calibri;
    font-weight: bold;
    font-size: 31px;
    -webkit-appearance: none;
    outline: 0;
    border: 0;
    color: white;
    background: #9900ff;
    transition: 0.6s;
}
@keyframes move {
    0% {
        background-position: 0 0
    }

    50% {
        background-position: 100% 0
    }

    100% {
        background-position: 0 0
    }
}
@keyframes NO {
  from, to {
    -webkit-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0);
  }

  10%, 30%, 50%, 70%, 90% {
    -webkit-transform: translate3d(-10px, 0, 0);
    transform: translate3d(-10px, 0, 0);
  }

  20%, 40%, 60%, 80% {
    -webkit-transform: translate3d(10px, 0, 0);
    transform: translate3d(10px, 0, 0);
  }
}

@keyframes arrive {
    0% {
        opacity: 0;
        transform: translate3d(0, 50px, 0);
    }
    
    100% {
        opacity: 1;
        transform: translate3d(0, 0, 0);
    }
}
a{
  font-weight: bold;
  font-size: 18px;
  font-family: Calibri;
  color: black;
}
a:hover
{
  color: blue;
  transition: 0.6s;
  font-size: 19px;
  font-weight: bold;
  font-family: Calibri;
}
h2
{
  margin-top: -5px;
  font-family: Calibri;
  color: #e6e6e6;
  font-size: 33px;
  font-weight: bold;
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
    bottom: 0px;
}
</style>
</head>
    <body>
        <header>
        <img src="Logo.png" />
    </header>
    <h1>TCE Auditorium/Seminar Hall Management Portal</h1>
    <div style="margin-top: 80px;">
            <div class="user">
              <span style="padding-right: 110px;"></span><img src="human.png" style="width:120px;height:120px;" />
        <form class="form" action="Authentication.php" method='post'>
        <div class="form__group">
            <input type="email" name="mail" id="1" placeholder="E-mail" class="form__input" required>
        </div>
        <div class="form__group">
            <input type="password" name="password" id="2" placeholder="Password" class="form__input" required >
        </div>
        <input type="Submit" class="btn" name="Submit" value="Login" >
    </form>
    <a href="Forgot Password.php">Forgot Password!</a>
</div>
        </div>
<div>
     <div style="padding-bottom: 20px"></div>
            <footer style="height: 10px;position: absolute;">
<p style="color:white;font-weight: bold;font-family: Calibri;font-size: 18px;margin-top: -10px;text-align: center;">&copy; 2018 Developed and Maintained by Department of Information Technology, Thiagarajar College of Engineering, Madurai - 15. All rights reserved.</p>
 </footer>
        </div>
    </body>
</html>