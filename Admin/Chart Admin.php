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
$con = mysqli_connect("localhost","root","","tce");
if(!$con)
{
  die("Connection failed".mysqli_connect_error());
}
$sql = "select count(*)";
$sql1 = "select count(*)";
$sql2 = "select count(*)";
$sql3 = "select count(*)";
$sql4 = "select count(*)";
$sql5 = "select count(*)"; 
$day = $_POST['Month'];
$month = substr($day ,-2);
$year = substr_replace($day ,"",-3); 
if($month==01)
{
  $mon = "January - ".$year;
  $sql = $sql." from log where sdate>='".$year."-".$month."-01' and edate<='".$year."-".$month."-31' and Hall='Civil Seminar Hall'";
  $sql1 = $sql1." from log where sdate>='".$year."-".$month."-01' and edate<='".$year."-".$month."-31' and Hall='Mechanical Seminar Hall'";
  $sql2 = $sql2." from log where sdate>='".$year."-".$month."-01' and edate<='".$year."-".$month."-31' and Hall='EEE Seminar Hall'";
  $sql3 = $sql3." from log where sdate>='".$year."-".$month."-01' and edate<='".$year."-".$month."-31' and Hall='ECE Seminar Hall'";
  $sql4 = $sql4." from log where sdate>='".$year."-".$month."-01' and edate<='".$year."-".$month."-31' and Hall='CSE Seminar Hall'";
  $sql5 = $sql5." from log where sdate>='".$year."-".$month."-01' and edate<='".$year."-".$month."-31' and Hall='IT Seminar Hall'";
}
if($month==02)
{
  $mon = "February - ".$year;
  if($year%4==0)
  {
    $mon = "February - ".$year;
    $sql = $sql." from log where sdate>='".$year."-".$month."-01' and edate<='".$year."-".$month."-29' and Hall='Civil Seminar Hall'";
    $sql1 = $sql1." from log where sdate>='".$year."-".$month."-01' and edate<='".$year."-".$month."-29' and Hall='Mechanical Seminar Hall'";
    $sql2 = $sql2." from log where sdate>='".$year."-".$month."-01' and edate<='".$year."-".$month."-29' and Hall='EEE Seminar Hall'";
    $sql3 = $sql3." from log where sdate>='".$year."-".$month."-01' and edate<='".$year."-".$month."-29' and Hall='ECE Seminar Hall'";
    $sql4 = $sql4." from log where sdate>='".$year."-".$month."-01' and edate<='".$year."-".$month."-29' and Hall='CSE Seminar Hall'";
    $sql5 = $sql5." from log where sdate>='".$year."-".$month."-01' and edate<='".$year."-".$month."-29' and Hall='IT Seminar Hall'";

  }
  $sql = $sql." from log where sdate>='".$year."-".$month."-01' and edate<='".$year."-".$month."-28' and Hall='Civil Seminar Hall'";
  $sql1 = $sql1." from log where sdate>='".$year."-".$month."-01' and edate<='".$year."-".$month."-28' and Hall='Mechanical Seminar Hall'";
  $sql2 = $sql2." from log where sdate>='".$year."-".$month."-01' and edate<='".$year."-".$month."-28' and Hall='EEE Seminar Hall'";
  $sql3 = $sql3." from log where sdate>='".$year."-".$month."-01' and edate<='".$year."-".$month."-28' and Hall='ECE Seminar Hall'";
  $sql4 = $sql4." from log where sdate>='".$year."-".$month."-01' and edate<='".$year."-".$month."-28' and Hall='CSE Seminar Hall'";
  $sql5 = $sql5." from log where sdate>='".$year."-".$month."-01' and edate<='".$year."-".$month."-28' and Hall='IT Seminar Hall'";
}
if($month==03)
{
  $mon = "March - ".$year;
  $sql = $sql." from log where sdate>='".$year."-".$month."-01' and edate<='".$year."-".$month."-31' and Hall='Civil Seminar Hall'";
  $sql1 = $sql1." from log where sdate>='".$year."-".$month."-01' and edate<='".$year."-".$month."-31' and Hall='Mechanical Seminar Hall'";
  $sql2 = $sql2." from log where sdate>='".$year."-".$month."-01' and edate<='".$year."-".$month."-31' and Hall='EEE Seminar Hall'";
  $sql3 = $sql3." from log where sdate>='".$year."-".$month."-01' and edate<='".$year."-".$month."-31' and Hall='ECE Seminar Hall'";
  $sql4 = $sql4." from log where sdate>='".$year."-".$month."-01' and edate<='".$year."-".$month."-31' and Hall='CSE Seminar Hall'";
  $sql5 = $sql5." from log where sdate>='".$year."-".$month."-01' and edate<='".$year."-".$month."-31' and Hall='IT Seminar Hall'";

}
if($month==04)
{
  $mon = "April - ".$year;
  $sql = $sql." from log where sdate>='".$year."-".$month."-01' and edate<='".$year."-".$month."-30' and Hall='Civil Seminar Hall'";
  $sql1 = $sql1." from log where sdate>='".$year."-".$month."-01' and edate<='".$year."-".$month."-30' and Hall='Mechanical Seminar Hall'";
  $sql2 = $sql2." from log where sdate>='".$year."-".$month."-01' and edate<='".$year."-".$month."-30' and Hall='EEE Seminar Hall'";
  $sql3 = $sql3." from log where sdate>='".$year."-".$month."-01' and edate<='".$year."-".$month."-30' and Hall='ECE Seminar Hall'";
  $sql4 = $sql4." from log where sdate>='".$year."-".$month."-01' and edate<='".$year."-".$month."-30' and Hall='CSE Seminar Hall'";
  $sql5 = $sql5." from log where sdate>='".$year."-".$month."-01' and edate<='".$year."-".$month."-30' and Hall='IT Seminar Hall'";

}
if($month==05)
{
  $mon = "May - ".$year;
 $sql = $sql." from log where sdate>='".$year."-".$month."-01' and edate<='".$year."-".$month."-31' and Hall='Civil Seminar Hall'";
  $sql1 = $sql1." from log where sdate>='".$year."-".$month."-01' and edate<='".$year."-".$month."-31' and Hall='Mechanical Seminar Hall'";
  $sql2 = $sql2." from log where sdate>='".$year."-".$month."-01' and edate<='".$year."-".$month."-31' and Hall='EEE Seminar Hall'";
  $sql3 = $sql3." from log where sdate>='".$year."-".$month."-01' and edate<='".$year."-".$month."-31' and Hall='ECE Seminar Hall'";
  $sql4 = $sql4." from log where sdate>='".$year."-".$month."-01' and edate<='".$year."-".$month."-31' and Hall='CSE Seminar Hall'";
  $sql5 = $sql5." from log where sdate>='".$year."-".$month."-01' and edate<='".$year."-".$month."-31' and Hall='IT Seminar Hall'";
 }
if($month==06)
{
  $mon = "June - ".$year;
  $sql = $sql." from log where sdate>='".$year."-".$month."-01' and edate<='".$year."-".$month."-30' and Hall='Civil Seminar Hall'";
  $sql1 = $sql1." from log where sdate>='".$year."-".$month."-01' and edate<='".$year."-".$month."-30' and Hall='Mechanical Seminar Hall'";
  $sql2 = $sql2." from log where sdate>='".$year."-".$month."-01' and edate<='".$year."-".$month."-30' and Hall='EEE Seminar Hall'";
  $sql3 = $sql3." from log where sdate>='".$year."-".$month."-01' and edate<='".$year."-".$month."-30' and Hall='ECE Seminar Hall'";
  $sql4 = $sql4." from log where sdate>='".$year."-".$month."-01' and edate<='".$year."-".$month."-30' and Hall='CSE Seminar Hall'";
  $sql5 = $sql5." from log where sdate>='".$year."-".$month."-01' and edate<='".$year."-".$month."-30' and Hall='IT Seminar Hall'";
  }
if($month==07)
{
  $mon = "July - ".$year;
  $sql = $sql." from log where sdate>='".$year."-".$month."-01' and edate<='".$year."-".$month."-31' and Hall='Civil Seminar Hall'";
  $sql1 = $sql1." from log where sdate>='".$year."-".$month."-01' and edate<='".$year."-".$month."-31' and Hall='Mechanical Seminar Hall'";
  $sql2 = $sql2." from log where sdate>='".$year."-".$month."-01' and edate<='".$year."-".$month."-31' and Hall='EEE Seminar Hall'";
  $sql3 = $sql3." from log where sdate>='".$year."-".$month."-01' and edate<='".$year."-".$month."-31' and Hall='ECE Seminar Hall'";
  $sql4 = $sql4." from log where sdate>='".$year."-".$month."-01' and edate<='".$year."-".$month."-31' and Hall='CSE Seminar Hall'";
  $sql5 = $sql5." from log where sdate>='".$year."-".$month."-01' and edate<='".$year."-".$month."-31' and Hall='IT Seminar Hall'";
}
if($month==08)
{
  $mon = "August - ".$year;
  $sql = $sql." from log where sdate>='".$year."-".$month."-01' and edate<='".$year."-".$month."-31' and Hall='Civil Seminar Hall'";
  $sql1 = $sql1." from log where sdate>='".$year."-".$month."-01' and edate<='".$year."-".$month."-31' and Hall='Mechanical Seminar Hall'";
  $sql2 = $sql2." from log where sdate>='".$year."-".$month."-01' and edate<='".$year."-".$month."-31' and Hall='EEE Seminar Hall'";
  $sql3 = $sql3." from log where sdate>='".$year."-".$month."-01' and edate<='".$year."-".$month."-31' and Hall='ECE Seminar Hall'";
  $sql4 = $sql4." from log where sdate>='".$year."-".$month."-01' and edate<='".$year."-".$month."-31' and Hall='CSE Seminar Hall'";
  $sql5 = $sql5." from log where sdate>='".$year."-".$month."-01' and edate<='".$year."-".$month."-31' and Hall='IT Seminar Hall'";
}
if($month==09)
{
  $mon = "September - ".$year;
  $sql = $sql." from log where sdate>='".$year."-".$month."-01' and edate<='".$year."-".$month."-30' and Hall='Civil Seminar Hall'";
  $sql1 = $sql1." from log where sdate>='".$year."-".$month."-01' and edate<='".$year."-".$month."-30' and Hall='Mechanical Seminar Hall'";
  $sql2 = $sql2." from log where sdate>='".$year."-".$month."-01' and edate<='".$year."-".$month."-30' and Hall='EEE Seminar Hall'";
  $sql3 = $sql3." from log where sdate>='".$year."-".$month."-01' and edate<='".$year."-".$month."-30' and Hall='ECE Seminar Hall'";
  $sql4 = $sql4." from log where sdate>='".$year."-".$month."-01' and edate<='".$year."-".$month."-30' and Hall='CSE Seminar Hall'";
  $sql5 = $sql5." from log where sdate>='".$year."-".$month."-01' and edate<='".$year."-".$month."-30' and Hall='IT Seminar Hall'";

}
if($month==10)
{
  $mon = "October - ".$year;
  $sql = $sql." from log where sdate>='".$year."-".$month."-01' and edate<='".$year."-".$month."-31' and Hall='Civil Seminar Hall'";
  $sql1 = $sql1." from log where sdate>='".$year."-".$month."-01' and edate<='".$year."-".$month."-31' and Hall='Mechanical Seminar Hall'";
  $sql2 = $sql2." from log where sdate>='".$year."-".$month."-01' and edate<='".$year."-".$month."-31' and Hall='EEE Seminar Hall'";
  $sql3 = $sql3." from log where sdate>='".$year."-".$month."-01' and edate<='".$year."-".$month."-31' and Hall='ECE Seminar Hall'";
  $sql4 = $sql4." from log where sdate>='".$year."-".$month."-01' and edate<='".$year."-".$month."-31' and Hall='CSE Seminar Hall'";
  $sql5 = $sql5." from log where sdate>='".$year."-".$month."-01' and edate<='".$year."-".$month."-31' and Hall='IT Seminar Hall'";
}
if($month==11)
{
  $mon = "November - ".$year;
  $sql = $sql." from log where sdate>='".$year."-".$month."-01' and edate<='".$year."-".$month."-30' and Hall='Civil Seminar Hall'";
  $sql1 = $sql1." from log where sdate>='".$year."-".$month."-01' and edate<='".$year."-".$month."-30' and Hall='Mechanical Seminar Hall'";
  $sql2 = $sql2." from log where sdate>='".$year."-".$month."-01' and edate<='".$year."-".$month."-30' and Hall='EEE Seminar Hall'";
  $sql3 = $sql3." from log where sdate>='".$year."-".$month."-01' and edate<='".$year."-".$month."-30' and Hall='ECE Seminar Hall'";
  $sql4 = $sql4." from log where sdate>='".$year."-".$month."-01' and edate<='".$year."-".$month."-30' and Hall='CSE Seminar Hall'";
  $sql5 = $sql5." from log where sdate>='".$year."-".$month."-01' and edate<='".$year."-".$month."-30' and Hall='IT Seminar Hall'";
}
if($month==12)
{
  $mon = "December - ".$year;
  $sql = $sql." from log where sdate>='".$year."-".$month."-01' and edate<='".$year."-".$month."-31' and Hall='Civil Seminar Hall'";
  $sql1 = $sql1." from log where sdate>='".$year."-".$month."-01' and edate<='".$year."-".$month."-31' and Hall='Mechanical Seminar Hall'";
  $sql2 = $sql2." from log where sdate>='".$year."-".$month."-01' and edate<='".$year."-".$month."-31' and Hall='EEE Seminar Hall'";
  $sql3 = $sql3." from log where sdate>='".$year."-".$month."-01' and edate<='".$year."-".$month."-31' and Hall='ECE Seminar Hall'";
  $sql4 = $sql4." from log where sdate>='".$year."-".$month."-01' and edate<='".$year."-".$month."-31' and Hall='CSE Seminar Hall'";
  $sql5 = $sql5." from log where sdate>='".$year."-".$month."-01' and edate<='".$year."-".$month."-31' and Hall='IT Seminar Hall'";
}
$result = mysqli_query($con,$sql);
$result1 = mysqli_query($con,$sql1);
$result2 = mysqli_query($con,$sql2);
$result3 = mysqli_query($con,$sql3);
$result4 = mysqli_query($con,$sql4);
$result5 = mysqli_query($con,$sql5);

$row = mysqli_fetch_assoc($result);
$row1 = mysqli_fetch_assoc($result1);
$row2 = mysqli_fetch_assoc($result2);
$row3 = mysqli_fetch_assoc($result3);
$row4 = mysqli_fetch_assoc($result4);
$row5 = mysqli_fetch_assoc($result5);

$count = $row["count(*)"];
$count1 = $row1["count(*)"];
$count2 = $row2["count(*)"];
$count3 = $row3["count(*)"];
$count4 = $row4["count(*)"];
$count5 = $row5["count(*)"];
mysqli_close($con);
?>
<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <title>
      Utilization Chart
    </title>
    <link src="gviz_tooltip.css" rel="stylesheet">
    <script type="text/javascript" src="jsapi.js"></script>
    <script type="text/javascript" src="uds_api_contents.js"></script>
    <script type="text/javascript">
      function drawVisualization() {
        var data = google.visualization.arrayToDataTable([
          ['x', 'Civil','Mechanical','EEE','ECE','CSE','IT'],
          ['<?php  echo "$mon";?>', <?php  echo "$count";?>, <?php  echo "$count1";?>, <?php  echo "$count2";?>, <?php  echo "$count3";?>, <?php  echo "$count4";?>, <?php  echo "$count5";?>]
        ]);
        new google.visualization.BarChart(document.getElementById('visualization')).
        draw(
          data,
          {
            curveType: "function",
            width: 800, height: 400,
            vAxis: { maxValue: 100000 }
          }
        );
      }
      google.setOnLoadCallback(drawVisualization);
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
    <style type="text/css">
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
    font-family: Calibri;
}
h1
{
  text-align: center;
  font-family: Calibri;
  padding: 0px;
  margin-top: 10px;
}
h2
{
  font-family: Calibri;
  color: wheat;
  font-size: 40px;
  text-align: center;
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
    height: 30px;
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
    <h2>Seminar Halls Utilization Chart</h2>
  </header>
  <div style="margin-top: -28px;margin-left: 15px;">
   <button class="back" onclick="goBack()">Go Back</button>
   <span style="padding-right: 10px;"></span><button class="back" onclick="goHome()">Home</button>
   <span style="padding-right: 10px;"></span><button class="back" onclick="goOut()">Logout</button>
</div>
    <div id="visualization" style="margin-left: 250px;margin-top: 10px;"></div>
  </header>
    <div>
            <footer>
<p style="margin-left:-20px;margin-top:-15px;color:white;font-weight: bold;font-family: Calibri;font-size: 20px;text-align: center;">&copy; 2018 Developed and Maintained by Department of Information Technology, Thiagarajar College of Engineering, Madurai - 15. All rights reserved.</p>
 </footer>
        </div>
  </body>
</html>
​