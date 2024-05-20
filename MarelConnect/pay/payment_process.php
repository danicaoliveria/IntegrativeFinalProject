<?php

$servername1 = "localhost";
$username1 = "root";
$password1 = "";
$dbname1 = "marelconnect";

$conn1 = new mysqli($servername1, $username1, $password1, $dbname1);

if ($conn1->connect_error) {
    die("Connection failed: " . $conn1->connect_error);
}
$servername2 = "localhost"; 
$username2 = "root";
$password2 = ""; 
$dbname2 = "marelconnect";  

$conn2 = new mysqli($servername2, $username2, $password2, $dbname2);

if ($conn2->connect_error) {
    die("Connection to second database failed: " . $conn2->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = filter_input(INPUT_POST, 'full_name', FILTER_SANITIZE_STRING);
    $balance = filter_input(INPUT_POST, 'balance', FILTER_VALIDATE_FLOAT);
    $due_date = filter_input(INPUT_POST, 'due_date', FILTER_SANITIZE_STRING);
    $account_number = filter_input(INPUT_POST, 'account_number', FILTER_SANITIZE_STRING);
    $meter_number = filter_input(INPUT_POST, 'house_meter_no', FILTER_SANITIZE_STRING);
    $pin_hash = filter_input(INPUT_POST, 'pin_hash', FILTER_SANITIZE_STRING);

    $sql1 = "UPDATE marelconnect.userdetails SET balance = 0, due_date = DATE_ADD(NOW(), INTERVAL 30 DAY) WHERE account_number = ? AND house_meter_no = ?";
    $stmt1 = $conn1->prepare($sql1);
    $stmt1->bind_param("ss", $account_number, $meter_number);

    $sql2 = "INSERT INTO marelconnect.payments (full_name, balance, due_date, account_number, house_meter_no, pin_hash, payment_date) VALUES (?, ?, ?, ?, ?, ?, NOW())";
    $stmt2 = $conn2->prepare($sql2);
    $stmt2->bind_param("sdsdss", $name, $balance, $due_date, $account_number, $meter_number, $pin_hash);

    if ($stmt1->execute() && $stmt2->execute()) {
        echo "<script>
                alert('Payment successful.');
                window.location.href = 'balance.php';
              </script>";
        exit();
    } else {
        error_log("Database update error: " . $stmt1->error . " | " . $stmt2->error, 0);
        echo "<script>
                alert('Payment failed. Please try again.');
                window.location.href = 'payment.php';
              </script>";
    }

    $stmt1->close();
    $stmt2->close();
}

$conn1->close();
$conn2->close();

?>
