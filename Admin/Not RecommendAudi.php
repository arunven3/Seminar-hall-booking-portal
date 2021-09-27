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
$id = $_POST['id'];
$sdate = $_POST['sdate'];
$edate = $_POST['edate'];
$stime = $_POST['stime'];
$etime = $_POST['etime'];
//echo "$sdate";
$all = array("KS Auditorium","KM Auditorium","Open Auditorium");
/*foreach ($all as $key) 
{
    echo "$key";   # code...
}*/
$con=mysqli_connect("localhost","root","","tce");
        if(!$con)
        {
            die("Connection failed".mysqli_connect_error());
        }
        $sql = "select l.Hall from auditorium l where  l.sdate='$sdate' and l.edate='$edate' and l.stime='$stime' and l.etime='$etime' and l.Admin='Approved'";
        /*$sql = "select * from halls";*/
        $result=mysqli_query($con,$sql);
        $i = mysqli_num_rows($result);
        //echo "$i ";
        $Hall = array();
        if($i>0)
        {
             while($row = mysqli_fetch_assoc($result)) 
             {
                array_push($Hall, $row['Hall']);
            }
        }
        /*foreach ($Hall as $key) 
            {
                echo "$key";   # code...
            }*/
            $diff = array();
        $diff = array_diff($all, $Hall);
mysqli_close($con);        
?>
<html>
<head>
        <script type="text/javascript">
      function goBack() {
  window.location='HOD.php';
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
    <title>Not Recommend</title>
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
        <h2>Reason for Not Recommend</h2>
    </header>
        <div style="margin-top: -28px;margin-left: 15px;">
   <button class="back" onclick="goHome()">Home</button>
   <span style="padding-right: 10px;"></span><button class="back" onclick="goOut()">Logout</button>
</div>
        <form action="Not Recommend Mail.php" method="post">
            <input type='hidden' name='id' value='<?php echo "$id" ?>'>
            <div class="t1">
        <table align="center">
            <tr><td><input type="checkbox" name="Reason1" value="Requested Hall has been booked already"><span style="padding-right: 10px"></span>Requested Hall has been booked already</td>
                <td><input type="checkbox" name="Reason2" value="Priority of your request is low, so we returned"><span style="padding-right: 10px"></span>Priority of your request is low, so we returned</td>
            <td><input type="checkbox" name="Reason3" value="International Meeting is going to be held"><span style="padding-right: 10px"></span>International Meeting is going to be held</td>
        <td><input type="checkbox" name="Reason4" value="High priority meeting is arranged at that day"><span style="padding-right: 10px"></span>High priority meeting is arranged at that day</td>
    </tr>
         </table>  
         <div style="margin-top: 20px;margin-left: 180px;">
         <label>Suggestion</label><br>  
           <textarea name="suggestion" rows="3" cols="100">Other Available Halls are:<?php $i = 1; 
                        foreach ($diff as $key) 
                           {
                                echo "$i. $key ";
                                $i++;
                            }
                          ?>. So try these Halls.
                          </textarea><br><br>
                          <input type="submit" name="Return" value="Return">  
                      </div>
                </form>
    <footer>
                <p style="color:white;font-weight: bold;font-family: Calibri;font-size: 20px;margin-top:-10px;text-align: center;">&copy; 2018 Developed and Maintained by Department of Information Technology, Thiagarajar College of Engineering, Madurai - 15. All rights reserved.</p>
            </footer>
    </body>
</html>