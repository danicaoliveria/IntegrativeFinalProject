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
            max-width: 600px;
            margin: 50px auto;
            background: #fff;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }

        h1 {
            text-align: center;
            color: #11212D;
        }

        .info-box {
            display: flex;
            flex-direction: column;
            gap: 10px;
        }

        .info-item {
            display: flex;
            justify-content: space-between;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        label {
            font-weight: bold;
            color: #555;
        }

        span {
            color: #333;
        }

        .calendar {
            margin-top: 20px;
            text-align: center;
        }

        #calendar {
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        .pay-now-button {
            display: block;
            padding: 10px 20px;
            background-color: #28a745;
            color: white;
            text-align: center;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            margin-top: 20px;
            text-decoration: none;
        }

        .pay-now-button:hover {
            background-color: #218838;
        }

        /* Modal Styles */
        .modal {
            display: none;
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgb(0,0,0);
            background-color: rgba(0,0,0,0.4);
        }

        .modal-content {
            background-color: #fefefe;
            margin: 15% auto;
            padding: 20px;
            border: 1px solid #888;
            width: 80%;
            max-width: 400px;
            border-radius: 8px;
        }

        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
        }

        .submit-button {
            display: block;
            padding: 10px 20px;
            background-color: #28a745;
            color: white;
            text-align: center;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            margin-top: 20px;
            text-decoration: none;
        }

        .submit-button:hover {
            background-color: #218838;
        }
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Balance Information</title>
</head>
<body>
    <div class="container">
        <h1>Balance Information</h1>
        <div class="info-box">
            <?php

                $servername = "localhost"; 
                $username = "root";  
                $password = "";    
                $dbname = "marelconnect"; 

                $conn = new mysqli($servername, $username, $password, $dbname);

                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }

                $sql = "SELECT full_name, balance, due_date, account_number, house_meter_no FROM marelconnect.userdetails WHERE id = 2";
                $result = $conn->query($sql);

                if($result->num_rows > 0){
                    while($row = $result->fetch_assoc()) {
                        echo "<div class='info-item'><label for='full_name'>Full Name:</label><span id='full_name'>".htmlspecialchars($row['full_name'])."</span></div>";
                        echo "<div class='info-item'><label for='balance'>Total Balance:</label><span id='balance'>P ".number_format($row['balance'], 2)."</span></div>";
                        echo "<div class='info-item'><label for='due-date'>Due Date:</label><span id='due-date'>".$row['due_date']."</span></div>";
                        echo "<div class='info-item'><label for='account-number'>Account Number:</label><span id='account-number'>".$row['account_number']."</span></div>";
                        echo "<div class='info-item'><label for='house_meter_no'>House Meter No:</label><span id='house_meter_no'>".$row['house_meter_no']."</span></div>";

                        echo "<input type='hidden' id='hidden-full-name' value='".htmlspecialchars($row['full_name'])."'>";
                        echo "<input type='hidden' id='hidden-balance' value='".htmlspecialchars($row['balance'])."'>";
                        echo "<input type='hidden' id='hidden-due-date' value='".htmlspecialchars($row['due_date'])."'>";
                        echo "<input type='hidden' id='hidden-account-number' value='".htmlspecialchars($row['account_number'])."'>";
                        echo "<input type='hidden' id='hidden-house-meter-no' value='".htmlspecialchars($row['house_meter_no'])."'>";
                    }
                } else {
                    echo "0 results";
                }
                $conn->close();
            ?>
        </div>
        <button class="pay-now-button" id="payNowButton">Pay Now</button>
        <div class="calendar">
            <h2>Calendar</h2>
            <input type="date" id="calendar">
        </div>
    </div>

    <div id="myModal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <h2>Enter PIN</h2>
            <form id="paymentForm" action="payment_process.php" method="POST">
                <input type="hidden" name="full_name" id="modal-full-name">
                <input type="hidden" name="balance" id="modal-balance">
                <input type="hidden" name="due_date" id="modal-due-date">
                <input type="hidden" name="account_number" id="modal-account-number">
                <input type="hidden" name="house_meter_no" id="modal-house-meter-no">
                <label for="pin_hash">PIN Number:</label>
                <input type="password" id="pin_hash" name="pin_hash" required>
                <button type="submit" class="submit-button">Submit Payment</button>
            </form>
        </div>
    </div>

    <script>
        var modal = document.getElementById("myModal");
        var btn = document.getElementById("payNowButton");
        var span = document.getElementsByClassName("close")[0];

        btn.onclick = function() {

            document.getElementById("modal-full-name").value = document.getElementById("hidden-full-name").value;
            document.getElementById("modal-balance").value = document.getElementById("hidden-balance").value;
            document.getElementById("modal-due-date").value = document.getElementById("hidden-due-date").value;
            document.getElementById("modal-account-number").value = document.getElementById("hidden-account-number").value;
            document.getElementById("modal-house-meter-no").value = document.getElementById("hidden-house-meter-no").value;

            modal.style.display = "block";
        }

        span.onclick = function() {
            modal.style.display = "none";
        }

        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
    </script>
</body>
</html>
