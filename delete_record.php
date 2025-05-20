<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "e&t_hospital";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_GET['name'])) {
    $name = $_GET['name'];

    $stmt = $conn->prepare("DELETE FROM appointment_list WHERE NAME = ?");
    $stmt->bind_param("s", $name);
    $stmt->execute();
    $stmt->close();

    header("Location: " . $_SERVER['HTTP_REFERER']);  // Redirect back to the page where the delete button was clicked
}

$conn->close();
?>
