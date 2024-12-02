<?php
//include "constant.php";
include('dbconnection.php');
//echo "<pre>";
if(isset($_POST['submit'])){
$Name = $_POST['name'].",\n";
$position = $_POST['position'].",\n";
$department = $_POST['department'].",\n";
$dob = $_POST['dob'].",\n";

$filexlsPath = $_SERVER['DOCUMENT_ROOT']."\Aditya\\new\uploads\ReadMe.txt";
echo "<pre>";
// ///print_r($_SERVER['DOCUMENT_ROOT']);
//print_r($filexlsPath);
$file = fopen ($filexlsPath, "a+");
if (!$file) {
    echo "<p>Unable to open remote file for writing.\n";
    exit;
}

//fwrite($file, $_SERVER['HTTP_USER_AGENT'] . "\n");
fwrite($file, $Name);
fwrite($file, $position);
fwrite($file, $department);
fwrite($file, $dob);
fwrite($file, "Date & Time : ".date("l jS \of F Y h:i:s")."\n");
//fwrite($file, "----------"."\n");
//fwrite($file, "This is for testing only"."\n");
//fwrite($file, "This is second"."\n");
//echo readfile("ReadMe.txt");
fclose ($file);
}
echo "<script>alert('You have successfully inserted the data');</script>";
echo "<script type='text/javascript'> document.location ='upload.php'; </script>";
?>