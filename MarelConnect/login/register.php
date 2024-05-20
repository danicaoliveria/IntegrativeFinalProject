<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "marelconnect";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST['full_name'], $_POST['house_meter_no'], $_POST['mobile_number'], $_POST['homeAddress'], $_POST['password'])) {
    $full_name = $_POST['full_name'];
    $house_meter_no = $_POST['house_meter_no'];
    $mobile_number = $_POST['mobile_number'];
    $homeAddress = $_POST['homeAddress'];
    $password = $_POST['password'];

    if (empty($full_name) || empty($house_meter_no) || empty($mobile_number) || empty($homeAddress) || empty($password)) {
        echo "<script>alert('Please fill in all fields.'); window.location.href = 'register.php';</script>";
        exit;
    }

    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    $stmt = $conn->prepare("INSERT INTO marelconnect.userdetails (full_name, house_meter_no, mobile_number, homeAddress, password) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $full_name, $house_meter_no, $mobile_number, $homeAddress, $hashed_password);

    if ($stmt->execute()) {
        echo "<script>alert('New record created successfully'); window.location.href = '../homepage.php';</script>";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
} else {
    echo "<script>alert('All fields are required.'); window.location.href = 'index.php';</script>";
}

$conn->close();
?>
