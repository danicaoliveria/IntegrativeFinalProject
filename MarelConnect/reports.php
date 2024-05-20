<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Reports</title>
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
    <h1>User Reports</h1>
    <table>
        <thead>
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Address</th>
                <th>Message</th>
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

            $sql = "SELECT * FROM marelconnect.reports";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {

                while ($row = $result->fetch_assoc()) {
                    echo "<tr><td>" . htmlspecialchars($row["fName"]) . "</td>
                              <td>" . htmlspecialchars($row["lName"]) . "</td>
                              <td>" . htmlspecialchars($row["email"]) . "</td>
                              <td>" . htmlspecialchars($row["address"]) . "</td>
                              <td>" . htmlspecialchars($row["message"]) . "</td></tr>";
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


