<?php
//error_reporting(0);

 $SQLSERVERNAME='localhost';
 $SQLLOGINNAME='root';
 $SQLPASSWORD='';
 $SQLLEXTIMEDB="staycation";
// define("ZRFILEPATH","E:\\SitesDocs\\");
// define("DOWNFILEPATH","..\..");
define("EXCELFILEPATH","Sites\\Aditya\\new");
//echo "EXCELFILEPATH";
$con=mysqli_connect($SQLSERVERNAME,$SQLLOGINNAME,$SQLPASSWORD,"$SQLLEXTIMEDB");
      if(!$con){
          die('Could not Connect MySql Server:');
        }
        // else
        // {
        // 	echo "connected";
        // }

date_default_timezone_set ("Asia/Kolkata");


?>