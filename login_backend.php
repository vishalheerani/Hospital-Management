<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "e&t_hospital";
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$email = $_POST['userid'];
$password = $_POST['usrpsw'];

if ($email == "admin@gmail.com" && $password == "admin") {
    header("Location: admin.php");
} else {
    $sql = "SELECT * FROM registration_data WHERE `EMAIL`='$email' AND `PASSWORD`='$password'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        header("Location: appointment.php");
    } else {
        echo "Invalid username or password.";
    }
}

$conn->close();
?>
