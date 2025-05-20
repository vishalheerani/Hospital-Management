<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "e&t_hospital";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_GET['name']) && isset($_GET['newName']) && isset($_GET['newNumber']) && isset($_GET['newDate']) && isset($_GET['newTime'])) {
    $name = $_GET['name'];
    $newName = $_GET['newName'];
    $newNumber = $_GET['newNumber'];
    $newDate = $_GET['newDate'];
    $newTime = $_GET['newTime'];

    $stmt = $conn->prepare("UPDATE appointment_list SET NAME=?, NUMBER=?, DATE=?, TIME=? WHERE NAME=?");
    $stmt->bind_param("sssss", $newName, $newNumber, $newDate, $newTime, $name);
    $stmt->execute();
    $stmt->close();

    header("Location: " . $_SERVER['HTTP_REFERER']);
}

$conn->close();
?>
