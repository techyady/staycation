<?php
// Establish database connection (replace with your database credentials)
include('admin/dbconnection.php');

// Process form data
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Insert data into the database
    echo $contactsql = "INSERT INTO contact_form (cname, cemail, cmessage) VALUES ('$name', '$email', '$message')";
    $resultcontactsql = mysqli_query($con,$contactsql);
    
    if ($con->query($resultcontactsql) === TRUE) {
        echo "Form data submitted successfully!";
    } else {
        echo "Error: " . $resultcontactsql . "<br>" . $con->error;
    }

} else {
    echo "Error: Invalid request";
}

$conn->close();
?>