<?php
include('admin/dbconnection.php');
// Process form data
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $checkIn = $_POST['date-in'];
    $dateTimestamp = strtotime($checkIn);
    $formattedDate = date("Y-m-d", $dateTimestamp);
    $checkOut = $_POST['date-out'];
    $dateTimestampto = strtotime($checkOut);
    $formattedDateto = date("Y-m-d", $dateTimestampto);
    $guests = $_POST['guest'];
    $room = $_POST['room'];
    $roomid = $_POST['dynamic-hidden-value'];

    // Process the form data as needed (e.g., store in database)
    // You can add your database logic here
    $roominqsql = "insert into room_inquiry(checkIn,checkOut,guest,room,room_id) 
    values ('".$formattedDate."','".$formattedDateto."','".$guests."','".$room."','".$roomid."')";
    // exit();
    $resultroominq = mysqli_query($con,$roominqsql);
    // die();
    if($resultroominq > 0){
    // Example response
    echo "Room check-in details received. Check-in: $checkIn, Check-out: $checkOut, Guests: $guests, Rooms : $room";
    }
    else
    {
        echo "something went wrong";
    }
    
} else {
    // Invalid request
    http_response_code(400);
    echo "Error: Invalid request";
}
?>