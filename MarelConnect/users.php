<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Total Number of Consumers</title>
    <style>
        body {
        display: flex;
        justify-content: center;
        align-items: center;
        background-color: #f0f0f0; 
        color: #333; 
        font-family: Arial, sans-serif;
        margin: 0;
        height: 100vh; 
        }

        .container {
        max-width: 800px; 
        width: 100%;
        margin: auto;
        background-color: #fff;
        border-radius: 10px; 
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); 
        padding: 20px; 
        }

        table {
        width: 100%;
        border-collapse: collapse;
        font-family: Arial, sans-serif;
        margin-top: 20px; 
        }

        th, td {
        padding: 15px;
        border-bottom: 1px solid #ccc; 
        text-align: left;
        }

        th {
        background-color: #f0f0f0; 
        font-weight: bold; 
        color: #333; 
        }

        tr:nth-child(even) {
        background-color: #f9f9f9;
        }

        tr:hover {
        background-color: #e0e0e0; 
        }

        h3 {
        margin-bottom: 10px; /
        color: #555; 
        }

    </style>
</head>
<body>
    <div class="container">
    <h1>Total Number Of Consumers</h1>
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>House Meter No</th>
                <th>Mobile Number</th>
                <th>Address</th>
                <th>Balance</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $servername = "localhost"; 
            $username = "root"; 
            $password = ""; 
            $dbname = "marelconnect"; 

            mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

            $conn = new mysqli($servername, $username, $password, $dbname);

            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            $sql = "SELECT * FROM marelconnect.userdetails";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {

                while ($row = $result->fetch_assoc()) {
                    echo "<tr><td>" . htmlspecialchars($row["full_name"]) . "</td>
                              <td>" . htmlspecialchars($row["house_meter_no"]) . "</td>
                              <td>" . htmlspecialchars($row["mobile_number"]) . "</td>
                              <td>" . htmlspecialchars($row["homeAddress"]) . "</td>
                              <td>" . htmlspecialchars($row["Balance"]) . "</td></tr>";
                }
            } else {
                echo "<tr><td colspan='5'>No user data found</td></tr>";
            }

            $conn->close();
            ?>
        </tbody>
    </table>
    </div>
</body>
</html>


