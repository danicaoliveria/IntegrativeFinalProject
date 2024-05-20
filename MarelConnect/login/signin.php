<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "marelconnect";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$house_meter_no = $_POST['house_meter_no'];
$password = $_POST['password'];

$sql = "SELECT * FROM marelconnect.userdetails WHERE house_meter_no = '$house_meter_no'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    if ($password == $row['password']) {
        $_SESSION['house_meter_no'] = $row['house_meter_no']; 
        header("Location: ../homepage.php");
        exit();
    } else {
        echo "<script>alert('Incorrect Password');window.location.href = 'index.php'</script>";
    }
} else {
    echo "<script>alert('User Not Found');window.location.href = 'index.php'; </script>";
}

$conn->close();
?>
