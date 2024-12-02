<?php 

include('config.php');

if(isset($_GET['id']))
{
    $userid = $_GET['id'];
    $sql = "DELETE FROM `signup` WHERE `id`= '$userid'";

    $result = $conn->query($sql);

    if($result == TRUE)
    {
        echo "Record deleted sucessfully";
        header("Location: view.php");
    }
    else
    {
        echo "Error: ".$sql."<br>".$conn->error;
    }
}


?>