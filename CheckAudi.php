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
       $dept=$_POST['Department'];
?>
<html>
<head>
    <link rel="stylesheet"  href="calendar.css">
    <script type="text/javascript" src="calender.js"></script>
</head>
<title>Auditorium Chart</title>
<script>
    var til;
    function ardir() {
        var ar;
        ar=document.getElementById('dept1').value;
        document.cookie = "Hall = " + ar;
    }
    function Time_Display() {
    // var x=document.getElementById("timedisplay1");
        document.getElementById('timdisplay1').style.display='block';
    }
    function Time_Display2() {
        // var x=document.getElementById("timedisplay1");
        document.getElementById('timdisplay2').style.display='block';
    }
    function time_set(ti1) {
        document.getElementById('tim').value=ti1.innerHTML;
        time_close();
    }
    function time_set2(ti12) {
        document.getElementById('tim2').value=ti12.innerHTML;
        time_close2();
    }
    function time_close2() {
        document.getElementById('timdisplay2').style.display='none'
    }
    function time_close() {
        document.getElementById('timdisplay1').style.display='none'
    }
    function chktim() {
        return false;
    }
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
    input{
        outline: none;
        border: none;
        display: flex;
        flex-wrap: wrap;
        background: rgb(240, 154, 73);
        color: rgba(94, 0, 4, 0.9);
    }
    input:focus{
        background: rgb(250, 160, 42);
    }
    input:hover{
        animation: ease-in-out forwards;
        box-shadow: 0px 0px 35px 3px;
        opacity: 70%;
    }
    select{
        font-size: 15px;
        display: flex;
        flex-wrap: wrap;
        background: #0fef09;
        border-color: rgba(98, 98, 98, 0.26);
        border-style: solid;
        border-width: 3px;
        width: 75%;
        color: rgba(0, 0, 0, 0.9);
    }
    select:hover{
        animation: ease-in-out forwards;
        box-shadow: 0px 0px 35px 3px;
        opacity: 70%;
    }
    .te2{
        font-family: "Calibri";
        font-size: 20px;
        width: 50%;
        background: #0fef09;
        border-color: rgba(98, 98, 98, 0.26);
        border-style: solid;
        border-width: 3px;
        border-radius: 12px;
        height: 30px;
        padding-left:10px;
        display: flex;
        flex-wrap: wrap;
    }
    body{
    margin: 0;
    padding: 0;
    background: #99ccff;
    width: 100%;
    background-position: center;
    font-family: Calibri;
    height: 100px;
}
.bag1{
        width: 100%;
        margin-top: 20px;
        display: flex;
        align-items: center;
        padding: 20px;
    }
    .f2a{
        padding-top: 100px;
    }
    .wr2{
        background: gray;
        border-radius: 15px;
        overflow: hidden;
        display: flex;
        margin-top: -100px;
        justify-content: space-between;
        padding: 35px 35px 35px 35px;
    }
    .trp{
        padding-top: 25px;
        padding-bottom: 25px;
        display: flex;
        width : 360px;

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
    margin: 0;
    padding: 0 0 20px;
    text-align: center;
    font-size: 30px;
    color: black;
    margin-top: 10px;
    font-family: Calibri;
}
a{
        font-weight: bold;
        font-size: 17px;
        font-family: Verdana;
        color: blue;
    }
    a:hover
    {
        color: black;
        transition: 0.3s;
        font-weight: bold;
        font-family: Verdana;
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
        bottom: 0px;
        left: 0;
        position: absolute;
        background-color: black;
        padding: 30px;
        color: white;
        width: 100%;
        font-family Quincy_CF_Bold;
    }
    .sb2{
        font-size: 23px;
        font-weight: bold;
        color: white;
        background: blue;
        height: 40px;
        font-family: Calibri;
        border-radius: 25px;
        padding-left: 25px;
        padding-bottom: 5px;
        width:130px;
        display: flex;
        flex-wrap: wrap;
        outline: none;
        border: none;
    }
    .sb2:hover{
        color: blue;
        background: white;
        font-family: Calibri;
        font-size: 24px;
        font-weight: bold;
        cursor: pointer;
        transition: 0.6s;
        display: flex;
        flex-wrap: wrap;
    }
    .timdis table
    {
        border-collapse: collapse;
        background: green;
        color: white;
    }
    .timdis table td{
        width: 35px;
        height: 30px;
        line-height: 30px;
        cursor: pointer ;
        text-align: center;
        border: 1px solid #e6e6e6;
    }
       .dropbtn {
 color: black;
  padding: 10px;
  font-size: 200px;
  border: none;
  border-radius:20%;
  height:60px;
    width: 60px;
  margin-top: -40px;
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
<body>
<header>
    <h2><?php echo "$dept";?> Tentative Timings</h2>
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

<div style="margin-top: 20px;">
    <span style="padding-right: 450px;"></span>
    <img src="red.png" height="25px" width="25px"> - Already Booked 
    <span style="padding-right: 20px;"></span>
    <img src="orange.png" height="25px" width="25px"> - Requested
    <span style="padding-right: 20px;"></span>
    <img src="green.png" height="25px" width="25px"> - Available(Tentative)
</div>

    <div class="bag1" style="padding-left: 33%">
        <div style="padding-top: 0px">
            <div class="f2a">
                <div class="wr2">
                        <?php
                        $con = mysqli_connect("localhost", "root", "", "tce");
                        if (!$con) {
                            die("Connection failed" . mysqli_connect_error());
                        }
                        $newDateString = $_POST['Date'];
                        $sql = "select * from auditorium where Admin='Approved' and Hall='$dept' and sdate='$newDateString'";
                        $sql1 = "select * from auditorium where Admin='Approved' and Hall='$dept' and edate='$newDateString'";
                        $sql2 = "select * from auditorium where Admin='none' and Hall='$dept' and sdate='$newDateString'";
                        $sql3 = "select * from auditorium where Admin='none' and Hall='$dept' and edate='$newDateString'";
                        $sql4 = "select * from auditorium where Admin='Approved' and Hall='$dept' and '$newDateString' between sdate and edate";
                        $sql5 = "select * from auditorium where Admin='none' and Hall='$dept' and '$newDateString' between sdate and edate";
                        $sql6 = "select * from auditorium where Admin='none' and Hall='$dept' and sdate='$newDateString'";
                        $sql7 = "select * from auditorium where Admin='none' and Hall='$dept' and edate='$newDateString'";
                        $sql8 = "select * from auditorium where Admin='none' and Hall='$dept' and '$newDateString' between sdate and edate";
                        $result = mysqli_query($con, $sql);
                        $result1 = mysqli_query($con, $sql1);
                        $result2 = mysqli_query($con,$sql2);
                        $result3 = mysqli_query($con,$sql3);
                        $result4 = mysqli_query($con,$sql4);
                        $result5 = mysqli_query($con,$sql5);
                        $result6 = mysqli_query($con,$sql6);
                        $result7 = mysqli_query($con,$sql7);
                        $result8 = mysqli_query($con,$sql8);    
                        if (mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                                $date1 = new DateTime();
                                $date2 = new DateTime();
                                $date1 = $row["stime"];
                                $date1 = strtotime($date1);
                                $date1 = date('H', $date1);
                                $date2 = $row["etime"];
                                $date2 = strtotime($date2);
                                $date2 = date('H', $date2);
                                    echo "<style type='text/css'>.t$date1{     text-shadow: #6C1A07 0px -1px;background: #CD310D;color: white}</style>";
//                                           echo "$date1";
//                                           echo "$date2";
                                    $diff = $date2 - $date1;
                                    $j=$diff;
                                    //echo $diff;
                                    echo "<style type='text/css'>.t$date1{     text-shadow: #6C1A07 0px -1px;background: #CD310D;color: white}</style>";
                                    echo "<style type='text/css'>.t$date2{     text-shadow: #6C1A07 0px -1px;background: #CD310D;color: white}</style>";
                                    for ($i = 0; $i<$j; $i++) {
                                       // echo "<input type='text' value='t$date1'>";
                                        echo "<style type='text/css'>.t$date1{text-shadow: #6C1A07 0px -1px;background: #CD310D;color: white} </style>";
                                        $date1++;
                                    }

                            }
                        }

                        if (mysqli_num_rows($result1) > 0) {
                            while ($row1 = mysqli_fetch_assoc($result1)) {
                                $date1 = new DateTime();
                                $date2 = new DateTime();
                                $date1 = $row1["stime"];
                                $date1 = strtotime($date1);
                                $date1 = date('H', $date1);
                                $date2 = $row1["etime"];
                                $date2 = strtotime($date2);
                                $date2 = date('H', $date2);
                                    echo "<style type='text/css'>.t$date1{     text-shadow: #6C1A07 0px -1px;background: #CD310D;color: white}</style>";
//                                           echo "$date1";
//                                           echo "$date2";
                                    $diff = $date2 - $date1;
                                    $j=$diff;
                                    //echo $diff;
                                    echo "<style type='text/css'>.t$date1{     text-shadow: #6C1A07 0px -1px;background: #CD310D;color: white}</style>";
                                    echo "<style type='text/css'>.t$date2{     text-shadow: #6C1A07 0px -1px;background: #CD310D;color: white}</style>";
                                    for ($i = 0; $i<$j; $i++) {
                                       // echo "<input type='text' value='t$date1'>";
                                        echo "<style type='text/css'>.t$date1{text-shadow: #6C1A07 0px -1px;background: #CD310D;color: white} </style>";
                                        $date1++;
                                    }

                            }
                        }

                        if (mysqli_num_rows($result2) > 0) {
                            while ($row2 = mysqli_fetch_assoc($result2)) {
                                $date1 = new DateTime();
                                $date2 = new DateTime();
                                $date1 = $row2["stime"];
                                $date1 = strtotime($date1);
                                $date1 = date('H', $date1);
                                $date2 = $row2["etime"];
                                $date2 = strtotime($date2);
                                $date2 = date('H', $date2);
                                    echo "<style type='text/css'>.t$date1{     text-shadow: #6C1A07 0px -1px;background: orange;color: black}</style>";
//                                           echo "$date1";
//                                           echo "$date2";
                                    $diff = $date2 - $date1;
                                    $j=$diff;
                                    //echo $diff;
                                    echo "<style type='text/css'>.t$date1{     text-shadow: #6C1A07 0px -1px;background: orange;color: black}</style>";
                                    echo "<style type='text/css'>.t$date2{     text-shadow: #6C1A07 0px -1px;background: orange;color: black}</style>";
                                    for ($i = 0; $i<$j; $i++) {
                                       // echo "<input type='text' value='t$date1'>";
                                        echo "<style type='text/css'>.t$date1{text-shadow: #6C1A07 0px -1px;background: orange;color: black} </style>";
                                        $date1++;
                                    }

                            }
                        }
                         
                         if (mysqli_num_rows($result3) > 0) {
                            while ($row3 = mysqli_fetch_assoc($result3)) {
                                $date1 = new DateTime();
                                $date2 = new DateTime();
                                $date1 = $row3["stime"];
                                $date1 = strtotime($date1);
                                $date1 = date('H', $date1);
                                $date2 = $row3["etime"];
                                $date2 = strtotime($date2);
                                $date2 = date('H', $date2);
                                    echo "<style type='text/css'>.t$date1{     text-shadow: #6C1A07 0px -1px;background: orange;color: black}</style>";
//                                           echo "$date1";
//                                           echo "$date2";
                                    $diff = $date2 - $date1;
                                    $j=$diff;
                                    //echo $diff;
                                    echo "<style type='text/css'>.t$date1{     text-shadow: #6C1A07 0px -1px;background: orange;color: black}</style>";
                                    echo "<style type='text/css'>.t$date2{     text-shadow: #6C1A07 0px -1px;background: orange;color: black}</style>";
                                    for ($i = 0; $i<$j; $i++) {
                                       // echo "<input type='text' value='t$date1'>";
                                        echo "<style type='text/css'>.t$date1{text-shadow: #6C1A07 0px -1px;background: orange;color: black} </style>";
                                        $date1++;
                                    }

                            }
                        } 

                        if (mysqli_num_rows($result4) > 0) {
                            while ($row4 = mysqli_fetch_assoc($result4)) {
                                $date1 = new DateTime();
                                $date2 = new DateTime();
                                $date1 = $row4["stime"];
                                $date1 = strtotime($date1);
                                $date1 = date('H', $date1);
                                $date2 = $row4["etime"];
                                $date2 = strtotime($date2);
                                $date2 = date('H', $date2);
                                    echo "<style type='text/css'>.t$date1{     text-shadow: #6C1A07 0px -1px;background: #CD310D;color: white}</style>";
//                                           echo "$date1";
//                                           echo "$date2";
                                    $diff = $date2 - $date1;
                                    $j=$diff;
                                    //echo $diff;
                                    echo "<style type='text/css'>.t$date1{     text-shadow: #6C1A07 0px -1px;background: #CD310D;color: white}</style>";
                                    echo "<style type='text/css'>.t$date2{     text-shadow: #6C1A07 0px -1px;background: #CD310D;color: white}</style>";
                                    for ($i = 0; $i<$j; $i++) {
                                       // echo "<input type='text' value='t$date1'>";
                                        echo "<style type='text/css'>.t$date1{text-shadow: #6C1A07 0px -1px;background: #CD310D;color: white} </style>";
                                        $date1++;
                                    }

                            }
                        } 

                        if (mysqli_num_rows($result5) > 0) {
                            while ($row5 = mysqli_fetch_assoc($result5)) {
                                $date1 = new DateTime();
                                $date2 = new DateTime();
                                $date1 = $row5["stime"];
                                $date1 = strtotime($date1);
                                $date1 = date('H', $date1);
                                $date2 = $row5["etime"];
                                $date2 = strtotime($date2);
                                $date2 = date('H', $date2);
                                    echo "<style type='text/css'>.t$date1{     text-shadow: #6C1A07 0px -1px;background: orange;color: black}</style>";
//                                           echo "$date1";
//                                           echo "$date2";
                                    $diff = $date2 - $date1;
                                    $j=$diff;
                                    //echo $diff;
                                    echo "<style type='text/css'>.t$date1{     text-shadow: #6C1A07 0px -1px;background: orange;color: black}</style>";
                                    echo "<style type='text/css'>.t$date2{     text-shadow: #6C1A07 0px -1px;background: orange;color: black}</style>";
                                    for ($i = 0; $i<$j; $i++) {
                                       // echo "<input type='text' value='t$date1'>";
                                        echo "<style type='text/css'>.t$date1{text-shadow: #6C1A07 0px -1px;background: orange;color: black} </style>";
                                        $date1++;
                                    }

                            }
                        } 

                        if (mysqli_num_rows($result6) > 0) {
                            while ($row6 = mysqli_fetch_assoc($result6)) {
                                $date1 = new DateTime();
                                $date2 = new DateTime();
                                $date1 = $row6["stime"];
                                $date1 = strtotime($date1);
                                $date1 = date('H', $date1);
                                $date2 = $row6["etime"];
                                $date2 = strtotime($date2);
                                $date2 = date('H', $date2);
                                    echo "<style type='text/css'>.t$date1{     text-shadow: #6C1A07 0px -1px;background: orange;color: black}</style>";
//                                           echo "$date1";
//                                           echo "$date2";
                                    $diff = $date2 - $date1;
                                    $j=$diff;
                                    //echo $diff;
                                    echo "<style type='text/css'>.t$date1{     text-shadow: #6C1A07 0px -1px;background: orange;color: black}</style>";
                                    echo "<style type='text/css'>.t$date2{     text-shadow: #6C1A07 0px -1px;background: orange;color: black}</style>";
                                    for ($i = 0; $i<$j; $i++) {
                                       // echo "<input type='text' value='t$date1'>";
                                        echo "<style type='text/css'>.t$date1{text-shadow: #6C1A07 0px -1px;background: orange;color: black} </style>";
                                        $date1++;
                                    }

                            }
                        }  

                        if (mysqli_num_rows($result7) > 0) {
                            while ($row7 = mysqli_fetch_assoc($result7)) {
                                $date1 = new DateTime();
                                $date2 = new DateTime();
                                $date1 = $row7["stime"];
                                $date1 = strtotime($date1);
                                $date1 = date('H', $date1);
                                $date2 = $row7["etime"];
                                $date2 = strtotime($date2);
                                $date2 = date('H', $date2);
                                    echo "<style type='text/css'>.t$date1{     text-shadow: #6C1A07 0px -1px;background: orange;color: black}</style>";
//                                           echo "$date1";
//                                           echo "$date2";
                                    $diff = $date2 - $date1;
                                    $j=$diff;
                                    //echo $diff;
                                    echo "<style type='text/css'>.t$date1{     text-shadow: #6C1A07 0px -1px;background: orange;color: black}</style>";
                                    echo "<style type='text/css'>.t$date2{     text-shadow: #6C1A07 0px -1px;background: orange;color: black}</style>";
                                    for ($i = 0; $i<$j; $i++) {
                                       // echo "<input type='text' value='t$date1'>";
                                        echo "<style type='text/css'>.t$date1{text-shadow: #6C1A07 0px -1px;background: orange;color: black} </style>";
                                        $date1++;
                                    }

                            }
                        }  
                        
                        if (mysqli_num_rows($result8) > 0) {
                            while ($row8 = mysqli_fetch_assoc($result8)) {
                                $date1 = new DateTime();
                                $date2 = new DateTime();
                                $date1 = $row8["stime"];
                                $date1 = strtotime($date1);
                                $date1 = date('H', $date1);
                                $date2 = $row8["etime"];
                                $date2 = strtotime($date2);
                                $date2 = date('H', $date2);
                                    echo "<style type='text/css'>.t$date1{     text-shadow: #6C1A07 0px -1px;background: orange;color: black}</style>";
//                                           echo "$date1";
//                                           echo "$date2";
                                    $diff = $date2 - $date1;
                                    $j=$diff;
                                    //echo $diff;
                                    echo "<style type='text/css'>.t$date1{     text-shadow: #6C1A07 0px -1px;background: orange;color: black}</style>";
                                    echo "<style type='text/css'>.t$date2{     text-shadow: #6C1A07 0px -1px;background: orange;color: black}</style>";
                                    for ($i = 0; $i<$j; $i++) {
                                       // echo "<input type='text' value='t$date1'>";
                                        echo "<style type='text/css'>.t$date1{text-shadow: #6C1A07 0px -1px;background: orange;color: black} </style>";
                                        $date1++;
                                    }

                            }
                        }
               ?>
                            <div class="trp">
                                <div class="timdis" id="timdisplay1" style="display: block">
            <table width="350">
                <tr><td onclick="time_set(this);" class="t07 t7">7:00 AM</td><td onclick="time_set(this);" class="t08 t8">8:00 AM</td><td onclick="time_set(this);" class="t09 t9">9:00 AM</td></tr>
                <tr><td onclick="time_set(this)"; class="t10"> 10:00 AM</td><td onclick="time_set(this);" class="t11">11:00 AM</td><td onclick="time_set(this);" class="t12">12:00 PM</td></tr>
                <tr><td <td onclick="time_set(this);" class="t13">1:00 PM</td><td <td onclick="time_set(this);" class="t14">2:00 PM</td><td onclick="time_set(this);" class="t15">3:00 PM</td></tr>
                <tr><td onclick="time_set(this);" class="t16" >4:00 PM</td><td onclick="time_set(this);" class="t17">5:00 PM</td><td onclick="time_set(this);" class="t18">6:00 PM</td></tr>
                <tr><td onclick="time_set(this);" class="t19" >7:00 PM</td><td onclick="time_set(this);" class="t20">8:00 PM</td><td onclick="time_set(this);" class="t21">9:00 PM</td></tr>
            </table>
        </div>
                            </div>
                </div>
            </div>
        </div>
    </div>
        <footer>
        <p style="color:white;font-weight: bold;font-size: 20px;font-family: Calibri;margin-top: -10px;text-align: center;">&copy; 2018 Developed and Maintained by Department of Information Technology, Thiagarajar College of Engineering, Madurai - 15. All rights reserved.</p>
    </footer>
</body>
</html>