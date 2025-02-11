<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple BMI Calculator</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            text-align: center;
            padding: 50px;
        }
        .container {
            max-width: 400px;
            margin: auto;
            margin-top: 20px;
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h2 {
            color: #333;
        }
        label {
            display: block;
            margin-top: 25px;
            font-weight: bold;
        }
        input {
            width: 90%;
            padding: 10px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        button {
            background: #007bff;
            color: white;
            margin-top: 20px;
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            width: 100%;
            margin-top: 15px;
            font-size: 16px;
        }
        button:hover {
            background: #0056b3;
        }
        .result {
            margin-top: 15px;
            font-weight: bold;
            padding: 10px;
            border-radius: 5px;
            background-color: #f0f0f0;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>BMI Calculator</h2>
    <p>Enter your weight and height to calculate your BMI</p>

    <form method="POST">
        <label for="weight">Weight (kg):</label>
        <input type="number" name="weight" id="weight" required min="1" step="0.1">

        <label for="height">Height (cm):</label>
        <input type="number" name="height" id="height" required min="1" step="1">

        <button type="submit">Calculate BMI</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $weight = $_POST["weight"];
        $height = $_POST["height"];

        if ($weight > 0 && $height > 0) {
            // Convert height from cm to meters
            $heightInMeters = $height / 100;

            // Calculate BMI
            $bmi = $weight / ($heightInMeters * $heightInMeters);
            $bmi = round($bmi, 1);

            echo "<div class='result'>Your BMI is: $bmi</div>";
        } else {
            echo "<div class='result' style='color: red;'>Please enter valid positive numbers.</div>";
        }
    }
    ?>
</div>

</body>
</html>
