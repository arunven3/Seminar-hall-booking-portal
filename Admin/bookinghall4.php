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
    function emptyField()
    {
      var today = new Date();
      var sdate = document.getElementById("5").value;
      var edate = document.getElementById("6").value;
      var stime = document.getElementById("7").value;
      var etime = document.getElementById("8").value;
      document.getElementById("9").disabled = true;
      document.getElementById("10").disabled = true;
      document.getElementById("11").disabled = true;
      document.getElementById("12").disabled = true;
      if (sdate=="") {
      document.getElementById("6").disabled = true;
    }
    else
    {
      document.getElementById("6").disabled = false;
    }
    if (stime=="") {
      document.getElementById("8").disabled = true;
    }
    else
    {
      document.getElementById("8").disabled = false;
    }
    if (new Date(sdate) < today) 
    {
      window.alert("That date had been expired...!");
      document.getElementById("5").value="";
    }
    if( (new Date(sdate).getTime() > new Date(edate).getTime()))
    {
        window.alert("Ending Date must be greater than Starting date...!");
        document.getElementById("6").value="";
    }
    var session1 = stime.substring(5,8);
     var session2 = etime.substring(5,8);
     var time1 = stime.substring(0,2);
     var time2 = etime.substring(0,2);
     //document.writeln(session1);
     //document.writeln(session2);
     if((session1 == " AM" && session2 == " AM") || (session1 == " PM" && session2 == " PM")) 
    {
      if( (time1 >= time2) && time1 != 12)
      {
      window.alert("Ending time must be greater than Starting time...!");
      document.getElementById("8").value="";
      }
      if( (time1 != 12) && time2==12)
      {
        window.alert("Ending time must be greater than Starting time...!");
      document.getElementById("8").value="";
      }
      if( (time1 == 12) && time2==12)
      {
        window.alert("Ending time must be greater than Starting time...!");
      document.getElementById("8").value="";
      }
    }
    var n = session1.localeCompare(" PM");
    var n1 = session2.localeCompare(" AM");
    //document.writeln(n1);
    if(n==0 && n1==0)
    {
     window.alert("Ending time must be greater than Starting time...!");
      document.getElementById("8").value=""; 
    }
    }
    function activateGuest(status)
    {
      status=!status; 
      document.getElementById("9").disabled = status;
      document.getElementById("10").disabled = status;
      document.getElementById("11").disabled = status;
      document.getElementById("12").disabled = status;
    }
    function timeCheck()
    {
     var stime = document.getElementById("7").value;
     var etime = document.getElementById("8").value; 
     var session1 = stime.substring(5,8);
     var session2 = etime.substring(5,8);
     var time1 = stime.substring(0,2);
     var time2 = etime.substring(0,2);
     //document.writeln(session1);
     //document.writeln(session2);
     if((session1 == " AM" && session2 == " AM") || (session1 == " PM" && session2 == " PM"))
    {
      if( (time1 >= time2) && time1 != 12)
      {
      window.alert("Ending time must be greater than Starting time...!");
      document.getElementById("8").value="";
      }
      if( (time1 != 12) && time2==12)
      {
        window.alert("Ending time must be greater than Starting time...!");
      document.getElementById("8").value="";
      }
      if( (time1 == 12) && time2==12)
      {
        window.alert("Ending time must be greater than Starting time...!");
      document.getElementById("8").value="";
      }
    }
    var n = session1.localeCompare(" PM");
    var n1 = session2.localeCompare(" AM");
    //document.writeln(n1);
    if(n==0 && n1==0)
    {
     window.alert("Ending time must be greater than Starting time...!");
      document.getElementById("8").value=""; 
    }
    }
    function goBack() {
  window.history.back();
}
function goHome()
{
  window.location='DashboardAdmin.php';
}
  </script>
    <title>Conferrence Hall Booking Site</title>
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
  font-family: Calibri;
  color: wheat;
  font-size: 40px;
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
        font-size: 110%;
    }
    .t1 table {
        width: 75%;
        font-size: 100%;
        margin-left: 180px;
        margin-top: 5px;
        outline: 2px solid white;
    }
    .t1 td {
        text-align: center;
        padding: 10px;
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
    outline: none;
    height: 40px;
    width: 10%;
    margin-top: 10px;
    padding-right: 0%;
    background: green;
    border-radius: 20px;
    color: #fff;
    font-family: Calibri;
    font-size: 23px;
    font-weight: bold;
}
input[type="submit"]:hover
{
    cursor: pointer;
    background: blue;
    color: white;
    transition: 0.6s;
    font-family: Calibri;
    font-size: 24px;
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
  margin-top: -20px;
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
.first h1
{
  text-align: center;
  font-family: Calibri;
  margin-top: 20px;
  font-size: 20px;
  padding: 0px;
}
.second h1
{
  text-align: center;
  font-family: Calibri;
  margin-top: 5px;
  font-size: 20px;
  padding: 0px;
}
.third h1
{
  text-align: center;
  font-family: Calibri;
  margin-top: 5px;
  font-size: 20px;
  padding: 0px;
}
input[type="text"], input[type="time"], input[type="date"]
{
    width: 70%;
    font-family: "Calibri";
    text-align: center;
}
input[type=checkbox]
{
  /* Double-sized Checkboxes */
  -ms-transform: scale(2); /* IE */
  -moz-transform: scale(2); /* FF */
  -webkit-transform: scale(2); /* Safari and Chrome */
  -o-transform: scale(2); /* Opera */
  padding: 10px;
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
    <body onload="emptyField()">
        <header>
        <h2>Conferrence Hall</h2>
    </header>
    <div style="margin-top: -28px;margin-left: 15px;">
   <button class="back" onclick="goBack()">Go Back </button>
   <span style="padding-right: 10px;"></span><button class="back" onclick="goHome()">Home</button>
</div>
<div style="margin-top: -15px;"></div>
<div class="dropdown">
  <button class="dropbtn"></button>
  <div class="dropdown-content">
    <a href="Booking Status.php">Hall Status</a>
    <a href="Change Password.php">Change Password</a>
     <a href="logout.php">Logout</a>
  </div>
</div>
<form method="post" action="confBooker.php">
    <div class="first"><h1>Hall Details*</h1></div>
                <div class='t1'><table>
                                  <tr><td><label>Name</label><br><input type="text" name="Name" id="1" placeholder="Staff Name" value='<?php echo "$_SESSION[us2]"; ?>' required/></td>
                                    <td><label>Department</label><br><input type="text" name="Department" id="2" placeholder="Department" value='<?php echo "$_SESSION[us3]"; ?>' required/>
                                  </td><td><label>Purpose</label><br><select id="3" name="Purpose" required>
                                <option value="">Select Purpose</option>
                                <option>Meeting</option>
                                <option>FDP</option>
                                <option>Placement</option>
                                <option>Workshop</option>
                                <option>Guest Lecture</option>
                                <option>Department Functions</option>
                                <option>Conferrence</option>
                                <option>Short Term Course</option>
                                <option>Expo/Exhibition</option>
                                <option>Others</option>
    </select></td>
    <td><label>Level</label><br><select id="4" name="Level" required>
                            <option value="">Select Level</option>
                            <option>Intra-Department</option>
                            <option>Inter-Department</option>
                            <option>Intra-College</option>
                            <option>Inter-College</option>
                            <option>Regional</option>
                            <option>Industry</option>
                            <option>National</option>
                            <option>International</option>
    </select>
  </td></tr>
  <tr><td><label>Start-Date</label><br><input type="date" name="sdate" id="5" required onblur="emptyField()"/>
  </td>
    <td><label>End-Date</label><br><input type="date" name="edate" id="6" required onblur="emptyField()" /></td>
    <td><label>Start-Time</label><br><select id="7" name="stime" required onblur="emptyField()">
    <option value="">Starting Time</option>
                            <option>07:00 AM</option>
                            
                            <option>08:00 AM</option>
                            
                            <option>09:00 AM</option>
                           
                            <option>10:00 AM</option>
                           
                            <option>11:00 AM</option>
                           
                            <option>12:00 PM</option>
                            
                            <option>01:00 PM</option>
                            
                            <option>02:00 PM</option>
                            
                            <option>03:00 PM</option>
                            
                            <option>04:00 PM</option>
                            
                            <option>05:00 PM</option>
                            
                            <option>06:00 PM</option>
                            
                            <option>07:00 PM</option>
                            
                            <option>08:00 PM</option>             
    </select></td>
    <td><label>End-Time</label><br><select id="8" name="etime" required onblur="timeCheck()">
    <option value="">Ending Time</option>
                            
                            <option>08:00 AM</option>
                            
                            <option>09:00 AM</option>
                           
                            <option>10:00 AM</option>
                           
                            <option>11:00 AM</option>
                           
                            <option>12:00 PM</option>
                            
                            <option>01:00 PM</option>
                            
                            <option>02:00 PM</option>
                            
                            <option>03:00 PM</option>
                            
                            <option>04:00 PM</option>
                            
                            <option>05:00 PM</option>
                            
                            <option>06:00 PM</option>
                            
                            <option>07:00 PM</option>
                            
                            <option>08:00 PM</option>

                            <option>09:00 PM</option>             
    </select></td></tr>
  </table>
</div>
  <div class="second"><h1>Guest Details</h1></div>
  <span style="padding-right: 180px;"></span><input type="checkbox" onclick ="activateGuest(this.checked)" />
  <span style="padding-right: 5px;"></span><label>I want to give.</label>
  <div class="t1"><table>
    <tr><td><label>Name</label><br><input type="text" name="guestname" placeholder="Guest Name" id="9"></td>
      <td><label>Institution</label><br><input type="text" name="guestinst" placeholder="Guest Institution" id="10"></td>
      <td><label>Program</label><br><input type="text" name="program" placeholder="Program Title" id="11"></td>
      <td><label>Description</label><br><textarea name="description" placeholder="Short Description" cols="30" id="12"></textarea></td></tr>
  </table>
  </div>
  <div class="third"><h1>Other Features(If required)</h1></div>
  <div class="t1">
    <table>
      <tr><td><input type="checkbox" name="Photo" value="Required" /><span style="padding-right: 10px;"></span><label>Photo</label></td>
      <td><input type="checkbox" name="Video" value="Required" /><span style="padding-right: 10px;"></span><label>Video</label></td>
    <td><input type="checkbox" name="VideoConf" value="Required" /><span style="padding-right: 10px;"></span><label>Video Conferrencing</label></td>
    <td><input type="checkbox" name="Board" value="Required" /><span style="padding-right: 10px;"></span><label>Display Boards</label></td></tr>
    </table>
  </div>
   <?php
      echo "<input type=\"hidden\" name=\"Hall\" value=\"Conferrence Hall\">";
    ?>
 <span style="padding-right: 600px;"></span> <input type="submit" name="book" value="Book"/>
</form>
  <div>
            <footer>
<p style="margin-left:-10px;color:white;font-weight: bold;font-family: Calibri;font-size: 20px;margin-top: -10px;text-align: center;">&copy; 2018 Developed and Maintained by Department of Information Technology, Thiagarajar College of Engineering, Madurai - 15. All rights reserved.</p>
 </footer>
        </div>
    </body>
</html>