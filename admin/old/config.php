<?php
// $servername = "locahost";
// $username = "root";
// $db = "crud";
// $password = "";

$conn =new mysqli('localhost', 'root', '' , 'staycation');


if($conn->connect_error)
{
    echo "connection failed :".$conn->connect_error;
}
// else
// {
//     echo "connected";
// }

?>