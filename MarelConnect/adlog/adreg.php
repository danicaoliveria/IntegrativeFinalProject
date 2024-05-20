<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "marelconnect";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST['fName'], $_POST['lName'], $_POST['email'], $_POST['password'])) {
    $fName = $_POST['fName'];
    $lName = $_POST['lName'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    if (empty($fName) || empty($lName) || empty($email) || empty($password)) {
        echo "<script>alert('All fields must be filled out.'); window.location.href = 'index.php';</script>";
        exit;
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "<script>alert('Invalid email format.'); window.location.href = 'register.php';</script>";
        exit;
    }

    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    $stmt = $conn->prepare("INSERT INTO marelconnect.admindetails (fName, lName, email, password) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $fName, $lName, $email, $password);

    if ($stmt->execute()) {
        echo "<script>alert('New record created successfully'); window.location.href = '../admin/admin.php';</script>";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
} else {
    echo "<script>alert('Please fill in all required fields.'); window.location.href = 'register.php';</script>";
}

$conn->close();
?>
