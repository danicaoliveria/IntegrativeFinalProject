<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Appliance Calculator</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 50%;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            position: relative;
        }
        h1 {
            text-align: center;
            color: #333;
        }
        label {
            display: block;
            margin: 15px 0 5px;
            color: #555;
        }
        input[type="number"],
        input[type="text"],
        select {
            width: 100%;
            padding: 10px;
            margin: 5px 0 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            font-size: 16px;
        }
        button {
            width: 100%;
            background-color: #4CAF50;
            color: white;
            padding: 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 18px;
        }
        button:hover {
            background-color: #45a049;
        }
        #output {
            margin-top: 20px;
        }
        #output h2 {
            margin: 0 0 10px;
            color: #333;
        }
        #output p {
            margin: 5px 0;
            color: #555;
        }
        .close-btn {
            top: 10px;
            right: 10px;
            background-color: #ff4c4c;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }
        .close-btn:hover {
            background-color: #ff1c1c;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Appliance Calculator</h1>
        <label for="monthlyBill">Monthly Bill Amount (PHP):</label>
        <input type="number" id="monthlyBill" placeholder="Enter monthly bill amount"><br><br>

        <label for="applianceType">Appliance Type:</label>
        <input type="text" id="applianceSearch" onkeyup="filterAppliances()" placeholder="Search for appliance...">
        <select id="applianceType">
            <option value="0">Select Appliance Type</option>
            <option value="1">Appliance 1</option>
            <option value="2">Appliance 2</option>
            <option value="3">Appliance 3</option>
            
        </select><br><br>

        <label for="wattage">Wattage:</label>
        <input type="number" id="wattage" placeholder="Enter wattage"><br><br>

        <label for="hoursUsed">Hours Used per Day:</label>
        <input type="number" id="hoursUsed" placeholder="Enter hours used"><br><br>

        <label for="daysUsed">Days Used per Week:</label>
        <input type="number" id="daysUsed" placeholder="Enter days used"><br><br>

        <label for="weeksUsed">Weeks Used per Month:</label>
        <input type="number" id="weeksUsed" placeholder="Enter weeks used"><br><br>

        <button onclick="calculate()">Calculate</button><br><br>

        <button class="close-btn" onclick="confirmClose()">Close</button>

        <div id="output"></div>
    </div>

    <script>
        function calculate() {
            var monthlyBill = parseFloat(document.getElementById('monthlyBill').value);
            var applianceType = parseInt(document.getElementById('applianceType').value);
            var wattage = parseFloat(document.getElementById('wattage').value);
            var hoursUsed = parseFloat(document.getElementById('hoursUsed').value);
            var daysUsed = parseFloat(document.getElementById('daysUsed').value);
            var weeksUsed = parseFloat(document.getElementById('weeksUsed').value);

            var energyConsumption = (wattage * hoursUsed * daysUsed * weeksUsed) / 1000; 
            var costPerHour = monthlyBill / (30 * 24); 
            var costPerDay = costPerHour * hoursUsed;
            var costPerWeek = costPerDay * daysUsed;
            var costPerMonth = costPerWeek * weeksUsed;

            var output = document.getElementById('output');
            output.innerHTML = "<h2>Cost Estimates:</h2>" +
                               "<p>Cost per Hour: PHP " + costPerHour.toFixed(2) + "</p>" +
                               "<p>Cost per Day: PHP " + costPerDay.toFixed(2) + "</p>" +
                               "<p>Cost per Week: PHP " + costPerWeek.toFixed(2) + "</p>" +
                               "<p>Cost per Month: PHP " + costPerMonth.toFixed(2) + "</p>";
        }

        function confirmClose() {
            if (confirm("Are you sure you want to close?")) {
                window.location.href = "homepage.php"; 
            }
        }
    </script>
</body>
</html>
