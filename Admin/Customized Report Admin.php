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
function goHome()
{
  window.location='AdminDashboard.php';
}
function goOut()
{
  window.location='Logout.php';
}
  </script>
    <title>Customised Report</title>
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
p{
    font-weight: bold;
    font-family: "Calibri";
    text-align: center;
    margin-top: 10px;
    font-size: 30px;
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
        margin-left: 180px;
        margin-top: 20px;
        border: 2px solid black;
    }
    .t1 td {
        text-align: left;
        padding: 5px;
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
    input[type=checkbox]
{
  /* Double-sized Checkboxes */
  -ms-transform: scale(1.5); /* IE */
  -moz-transform: scale(1.5); /* FF */
  -webkit-transform: scale(1.5); /* Safari and Chrome */
  -o-transform: scale(1.5); /* Opera */
  padding: 10px;
}
input[type="submit"]
{
    border: none;
    outline: none;
    padding: 5px;
    border-radius: 10px;
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
</style>
</head>
    <body>
        <header>
        <h2>Customised Report Generation</h2>
    </header>
       <div style="margin-top: -28px;margin-left: 15px;">
      <button class="back" onclick="goHome()">Home</button>
   <span style="padding-right: 10px;"></span><button class="back" onclick="goOut()">Logout</button>
</div>
        <form action="Custom Report.php" method="post">
        <p>Select the Fields</p>
        <div class="t1">
        <table align="center">
            <tr><td><input type="checkbox" name="id" value="id"><span style="padding-right: 10px"></span>Request ID</td>
                <td><input type="checkbox" name="Name" value="Name"><span style="padding-right: 10px"></span>Staff Name</td>
            <td><input type="checkbox" name="Department" value="Department"><span style="padding-right: 10px"></span>Department</td>
        <td><input type="checkbox" name="Hall" value="Hall"><span style="padding-right: 10px"></span>Seminar Hall</td>
    </tr>
    <tr>
        <td><input type="checkbox" name="Purpose" value="purpose"><span style="padding-right: 10px"></span>Purpose</td>
        <td><input type="checkbox" name="Level" value="level"><span style="padding-right: 10px"></span>Level</td>
        <td><input type="checkbox" name="sdate" value="sdate"><span style="padding-right: 10px"></span>Staring Date</td>
        <td><input type="checkbox" name="edate" value="edate"><span style="padding-right: 10px"></span>Ending Date</td>
    </tr>
    <tr>
        <td><input type="checkbox" name="stime" value="stime"><span style="padding-right: 10px"></span>Starting Time</td>
        <td><input type="checkbox" name="etime" value="etime"><span style="padding-right: 10px"></span>Ending Time</td>
        <td><input type="checkbox" name="chiefname" value="chiefname"><span style="padding-right: 10px"></span>Guest Name</td>
        <td><input type="checkbox" name="institution" value="institution"><span style="padding-right: 10px"></span>Guest's Institution</td>
    </tr>
    <tr>
        <td><input type="checkbox" name="program" value="program"><span style="padding-right: 10px"></span>Program</td>
        <td><input type="checkbox" name="description" value="description"><span style="padding-right: 10px"></span>Description</td>
        <td><input type="checkbox" name="priority" value="priority"><span style="padding-right: 10px"></span>Priority</td>
        <td><input type="checkbox" name="timestamp" value="timestamp"><span style="padding-right: 10px"></span>Timestamp</td>
    </tr>
        </table>
    </div>
    <div style="margin-top: 20px;">
        <span style="padding-right: 450px;"></span><label>Month</label><input type="month" name="Month" required>
        <span style="padding-right: 20px;"></span> <select name="Seminar" required>
          <option>Select Seminar Hall</option>
                                <option>Civil</option>
                                <option>Mechanical</option>
                                <option>EEE</option>
                                <option>ECE</option>
                                <option>CSE</option>
                                <option>IT</option>
                                </select>
       <span style="padding-right: 20px;"></span> <input type="submit" name="generate" value="Generate Report">
   </div>
        </form>
    <footer>
                <p style="color:white;font-weight: bold;font-family: Calibri;font-size: 20px;margin-top:-10px;text-align: center;">&copy; 2018 Developed and Maintained by Department of Information Technology, Thiagarajar College of Engineering, Madurai - 15. All rights reserved.</p>
            </footer>
    </body>
</html>