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
$sql = "select * ";
$day = $_POST['Month'];
$month = substr($day ,-2);
$year = substr_replace($day ,"",-3); 
if($month==01)
{
	$sql = $sql." from log where sdate>='".$year."-".$month."-01' and edate<='".$year."-".$month."-31'";
}
if($month==02)
{
	if($year%4==0)
	{
		$sql = $sql." from log where sdate>='".$year."-".$month."-01' and edate<='".$year."-".$month."-29'";
	}
	$sql = $sql." from log where sdate>='".$year."-".$month."-01' and edate<='".$year."-".$month."-28'";
}
if($month==03)
{
	$sql = $sql." from log where sdate>='".$year."-".$month."-01' and edate<='".$year."-".$month."-31'";
}
if($month==04)
{
	$sql = $sql." from log where sdate>='".$year."-".$month."-01' and edate<='".$year."-".$month."-30'";
}
if($month==05)
{
	$sql = $sql." from log where sdate>='".$year."-".$month."-01' and edate<='".$year."-".$month."-31'";
}
if($month==06)
{
	$sql = $sql." from log where sdate>='".$year."-".$month."-01' and edate<='".$year."-".$month."-30'";
}
if($month==07)
{
	$sql = $sql." from log where sdate>='".$year."-".$month."-01' and edate<='".$year."-".$month."-31'";
}
if($month==08)
{
	$sql = $sql." from log where sdate>='".$year."-".$month."-01' and edate<='".$year."-".$month."-31'";
}
if($month==09)
{
	$sql = $sql." from log where sdate>='".$year."-".$month."-01' and edate<='".$year."-".$month."-30'";
}
if($month==10)
{
	$sql = $sql." from log where sdate>='".$year."-".$month."-01' and edate<='".$year."-".$month."-31'";
}
if($month==11)
{
	$sql = $sql." from log where sdate>='".$year."-".$month."-01' and edate<='".$year."-".$month."-30'";
}
if($month==12)
{
	$sql = $sql." from log where sdate>='".$year."-".$month."-01' and edate<='".$year."-".$month."-31'";
}
$hall = $_POST['Seminar'];
$sql = $sql." and Hall='$hall Seminar Hall'";
//echo "$sql";
$DB_Server = "localhost"; //MySQL Server    
$DB_Username = "root"; //MySQL Username     
$DB_Password = "";             //MySQL Password     
$DB_DBName = "tce";         //MySQL Database Name  
$DB_TBLName = "log"; //MySQL Table Name   
$filename = "TCE Facility Services - Report";         //File Name
/*******YOU DO NOT NEED TO EDIT ANYTHING BELOW THIS LINE*******/    
//create MySQL connection   
$Connect = @mysql_connect($DB_Server, $DB_Username, $DB_Password) or die("Couldn't connect to MySQL:<br>" . mysql_error() . "<br>" . mysql_errno());
//select database   
$Db = @mysql_select_db($DB_DBName, $Connect) or die("Couldn't select database:<br>" . mysql_error(). "<br>" . mysql_errno());   
//execute query 
$result = @mysql_query($sql,$Connect) or die("Couldn't execute query:<br>" . mysql_error(). "<br>" . mysql_errno());    
$file_ending = "xls";
$con=mysqli_connect("localhost","root","","tce");
$res = mysqli_query($con,$sql);
$i = mysqli_num_rows($res);
//echo "$i";
if($i>0)
{
//header info for browser
header("Content-Type: application/xls");    
header("Content-Disposition: attachment; filename=$filename.xls");  
header("Pragma: no-cache"); 
header("Expires: 0");
/*******Start of Formatting for Excel*******/   
//define separator (defines columns in excel & tabs in word)
$sep = "\t\t"; //tabbed character
//start of printing column names as names of MySQL fields
for ($i = 0; $i < mysql_num_fields($result); $i++) {
echo mysql_field_name($result,$i) . "\t\t";
}
print("\n");    
//end of printing column names  
//start while loop to get data
    while($row = mysql_fetch_row($result))
    {
        $schema_insert = "";
        for($j=0; $j<mysql_num_fields($result);$j++)
        {
            if(!isset($row[$j]))
                $schema_insert .= "NULL".$sep;
            elseif ($row[$j] != "")
                $schema_insert .= "$row[$j]".$sep;
            else
                $schema_insert .= "".$sep;
        }
        $schema_insert = str_replace($sep."$", "", $schema_insert);
        $schema_insert = preg_replace("/\r\n|\n\r|\n|\r/", " ", $schema_insert);
        $schema_insert .= "\t";
        print(trim($schema_insert));
        print "\n";
    } 
    }
    else
    {
    	echo "<script>alert('Oops! Empty Log :)');
    	window.location='Default Report.php';
    	</script>";
    } 
?>