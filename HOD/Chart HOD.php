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
$year = date('Y');
//echo "$year";
$sql = "select count(*) from log where sdate>='$year-1-1' and edate<='$year-1-31' and Hall='$_SESSION[us3] Seminar Hall'";
$sql1 = "select count(*) from log where sdate>='$year-3-1' and edate<='$year-3-31' and Hall='$_SESSION[us3] Seminar Hall'";
$sql2 = "select count(*) from log where sdate>='$year-4-1' and edate<='$year-4-30' and Hall='$_SESSION[us3] Seminar Hall'";
$sql3 = "select count(*) from log where sdate>='$year-5-1' and edate<='$year-5-31' and Hall='$_SESSION[us3] Seminar Hall'";
$sql4 = "select count(*) from log where sdate>='$year-6-1' and edate<='$year-6-30' and Hall='$_SESSION[us3] Seminar Hall'";
$sql5 = "select count(*) from log where sdate>='$year-7-1' and edate<='$year-7-31' and Hall='$_SESSION[us3] Seminar Hall'";
$sql6 = "select count(*) from log where sdate>='$year-8-1' and edate<='$year-8-31' and Hall='$_SESSION[us3] Seminar Hall'";
$sql7 = "select count(*) from log where sdate>='$year-9-1' and edate<='$year-9-30' and Hall='$_SESSION[us3] Seminar Hall'";
$sql8 = "select count(*) from log where sdate>='$year-10-1' and edate<='$year-10-31' and Hall='$_SESSION[us3] Seminar Hall'";
$sql9 = "select count(*) from log where sdate>='$year-11-1' and edate<='$year-11-30' and Hall='$_SESSION[us3] Seminar Hall'";
$sql10 = "select count(*) from log where sdate>='$year-12-1' and edate<='$year-12-31' and Hall='$_SESSION[us3] Seminar Hall'";
if ($year%4==0) {
  $sql11 = "select count(*) from log where sdate>='$year-2-1' and edate<='$year-2-29' and Hall='IT Seminar Hall'";
}
else
{
  $sql11 = "select count(*) from log where sdate>='$year-2-1' and edate<='$year-2-28' and Hall='IT Seminar Hall'";
}

$result = mysqli_query($con,$sql);
$result1 = mysqli_query($con,$sql1);
$result2 = mysqli_query($con,$sql2);
$result3 = mysqli_query($con,$sql3);
$result4 = mysqli_query($con,$sql4);
$result5 = mysqli_query($con,$sql5);
$result6 = mysqli_query($con,$sql6);
$result7 = mysqli_query($con,$sql7);
$result8 = mysqli_query($con,$sql8);
$result9 = mysqli_query($con,$sql9);
$result10 = mysqli_query($con,$sql10);
$result11 = mysqli_query($con,$sql11);

$row = mysqli_fetch_assoc($result);
$row1 = mysqli_fetch_assoc($result1);
$row2 = mysqli_fetch_assoc($result2);
$row3 = mysqli_fetch_assoc($result3);
$row4 = mysqli_fetch_assoc($result4);
$row5 = mysqli_fetch_assoc($result5);
$row6 = mysqli_fetch_assoc($result6);
$row7 = mysqli_fetch_assoc($result7);
$row8 = mysqli_fetch_assoc($result8);
$row9 = mysqli_fetch_assoc($result9);
$row10 = mysqli_fetch_assoc($result10);
$row11 = mysqli_fetch_assoc($result11);

$count = $row["count(*)"];
$count1 = $row1["count(*)"];
$count2 = $row2["count(*)"];
$count3 = $row3["count(*)"];
$count4 = $row4["count(*)"];
$count5 = $row5["count(*)"];
$count6 = $row6["count(*)"];
$count7 = $row7["count(*)"];
$count8 = $row8["count(*)"];
$count9 = $row9["count(*)"];
$count10 = $row10["count(*)"];
$count11 = $row11["count(*)"];
mysqli_close($con);
?>
<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <title>
      Seminar  Hall Utilization Chart
    </title>
    <link src="gviz_tooltip.css" rel="stylesheet">
    <script type="text/javascript" src="jsapi.js"></script>
    <script type="text/javascript" src="uds_api_contents.js"></script>
    <script type="text/javascript">
      function drawVisualization() {
        var data = google.visualization.arrayToDataTable([
          ['x', 'Jan','Feb','Mar','Apr','May','June','July','Aug','Sep','Oct','Nov','Dec'],
          ['Seminar Hall Usage',   <?php  echo "$count";?>, <?php  echo "$count11";?>, <?php  echo "$count1";?>, <?php  echo "$count2";?>, <?php  echo "$count3";?>, <?php  echo "$count4";?>, <?php  echo "$count5";?>, <?php  echo "$count6";?>, <?php  echo "$count7";?>, <?php  echo "$count8";?>, <?php  echo "$count9";?>, <?php  echo "$count10";?>]
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
  window.location='HOD.php';
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
    <h2><?php echo "$_SESSION[us3]";?> Seminar Hall Utilization Report of <?php echo "$year";?></h2>
  </header>
   <div style="margin-top: -28px;margin-left: 15px;">
   <button class="back" onclick="goBack()">Go Back</button>
   <span style="padding-right: 10px;"></span><button class="back" onclick="goHome()">Home</button>
   <span style="padding-right: 10px;"></span><button class="back" onclick="goOut()">Logout</button>
</div>
    <div id="visualization" style="margin-left: 270px; margin-top: 10px;"></div>
    <div>
            <footer>
<p style="margin-left:-20px;margin-top:-15px;color:white;font-weight: bold;font-family: Calibri;font-size: 20px;text-align: center;">&copy; 2018 Developed and Maintained by Department of Information Technology, Thiagarajar College of Engineering, Madurai - 15. All rights reserved.</p>
 </footer>
        </div>
  </body>
</html>
​