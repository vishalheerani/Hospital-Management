<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "e&t_hospital";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data
$name = $_POST['name'];
$email = $_POST['email'];
$purpose = $_POST['subject'];
$number = $_POST['number'];
$department = $_POST['Department'];
$date = $_POST['date'];
$time = $_POST['time'];

// Insert data into database
$sql = "INSERT INTO appointment_list(`NAME`, `EMAIL`, `PURPOSE`, `NUMBER`, `DEPARTMENT`, `DATE` , `TIME`)
        VALUES ('$name', '$email', '$purpose', '$number','$department','$date','$time')";

if ($conn->query($sql) === TRUE) {
    header("Location: confirm_msg.html");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
