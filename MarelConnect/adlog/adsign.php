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

$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * FROM marelconnect.admindetails WHERE email = '$email'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    if ($password == $row['password']) {
        $_SESSION['email'] = $row['email']; 
        header("Location: ../admin/admin.php");
        exit();
    } else {
        echo "<script>alert('Incorrect Password');window.location.href = 'index.php'</script>";
    }
} else {
    echo "<script>alert('User Not Found');window.location.href = 'index.php'; </script>";
}

$conn->close();
?>
