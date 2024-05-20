<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 500px;
            margin: 50px auto;
            background-color: #fff;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }
        h1 {
            text-align: center;
            margin-bottom: 20px;
            color: #333;
        }
        .form-group {
            margin-bottom: 15px;
        }
        .form-group label {
            display: block;
            margin-bottom: 5px;
            color: #555;
        }
        .form-group input {
            width: calc(100% - 20px);
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
        }
        button {
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 4px;
            background-color: #5cb85c;
            color: #fff;
            font-size: 16px;
            cursor: pointer;
        }
        button:hover {
            background-color: #4cae4c;
        }
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account Settings</title>
</head>
<body>
    <div class="container">
        <h1>Account Settings</h1>
        <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "marelconnect";

            $conn = new mysqli($servername, $username, $password, $dbname);

            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }


            $full_name = $_POST['full_name'];
            $house_meter_no = $_POST['house_meter_no'];
            $mobile_number = $_POST['mobile_number'];
            $password = $_POST['password'];
            $homeAddress = $_POST['homeAddress'];


            $sql = "UPDATE marelconnect.userdetails SET full_name=?, house_meter_no=?, mobile_number=?, password=?, homeAddress=? WHERE id=2";
            $stmt = $conn->prepare($sql);

            if ($stmt === false) {
                die("Error preparing statement: " . $conn->error);
            }

            if (!$stmt->bind_param("sssss", $full_name, $house_meter_no, $mobile_number, $password, $homeAddress)) {
                die("Error binding parameters: " . $stmt->error);
            }

            if ($stmt->execute()) {
                echo  "<script>alert('Account Information Updated Successfully');window.location.href = 'accountsettings.php'</script>";
            } else {
                echo "<p>Error updating record: " . $stmt->error . "</p>";
            }

            $stmt->close();
            $conn->close();
        }
        ?>
        <form action="" method="POST">
            <div class="form-group">
                <label for="full_name">Full Name</label>
                <input type="text" id="full_name" name="full_name" placeholder="Danica Oliveria" required>
            </div>
            <div class="form-group">
                <label for="house_meter_no">House Meter Number</label>
                <input type="text" id="house_meter_no" name="house_meter_no" placeholder="012-3456" required>
            </div>
            <div class="form-group">
                <label for="mobile_number">Mobile Number</label>
                <input type="tel" id="mobile_number" name="mobile_number" placeholder="09099743487" required>
            </div>
            <div class="form-group">
                <label for="homeAddress">Home Address</label>
                <input type="text" id="homeAddress" name="homeAddress" placeholder="Botilao Sta. Cruz" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="******" required>
            </div>
            <button type="submit">Save Changes</button>
        </form>
    </div>
</body>
</html>
