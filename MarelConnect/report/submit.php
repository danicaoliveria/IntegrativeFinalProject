<?php

$servername = "localhost";
$username = "root"; 
$password = ""; 
$database = "marelconnect"; 

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO reports (fName, lName, email, address, message) VALUES (?, ?, ?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("sssss", $first_name, $last_name, $email, $address, $message);

$first_name = $_POST['fName'];
$last_name = $_POST['lName'];
$email = $_POST['email'];
$address = $_POST['address'];
$message = $_POST['message'];

if ($stmt->execute()) {
    echo "<script>alert('Report submitted successfully'); window.location.href = '../index.php';</script>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


$stmt->close();
$conn->close();
?>
