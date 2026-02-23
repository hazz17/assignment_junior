<?php include 'functions.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Electricity Calculator</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body class="bg-light">

<div class="container mt-5">

    <div class="card shadow p-4">

        <h3 class="text-center mb-4">Electricity Consumption Calculator</h3>

        <form method="POST">

            <div class="form-group">
                <label>Voltage (V)</label>
                <input type="number" name="voltage" step="any" class="form-control" required>
            </div>

            <div class="form-group">
                <label>Current (A)</label>
                <input type="number" name="current" step="any" class="form-control" required>
            </div>

            <div class="form-group">
                <label>Rate (sen/kWh)</label>
                <input type="number" name="rate" step="any" class="form-control" required>
            </div>

            <button type="submit" class="btn btn-primary btn-block">Calculate</button>

        </form>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $voltage = $_POST['voltage'];
    $current = $_POST['current'];
    $rate = $_POST['rate'];

    if (validateInput($voltage, $current, $rate)) {

        $power = calculatePower($voltage, $current);

        $energyHour = calculateEnergy($power, 1);
        $energyDay = calculateEnergy($power, 24);
        $energyMonth = calculateEnergy($power, 24 * 30);

        $totalHour = calculateTotal($energyHour, $rate);
        $totalDay = calculateTotal($energyDay, $rate);
        $totalMonth = calculateTotal($energyMonth, $rate);
?>

        <hr>

        <h5 class="text-center">Result</h5>

        <table class="table table-bordered text-center">

            <tr class="bg-primary text-white">
                <th>Description</th>
                <th>Value</th>
            </tr>

            <tr>
                <td>Power</td>
                <td><?php echo number_format($power, 2); ?> W</td>
            </tr>

            <tr>
                <td>Energy per hour</td>
                <td><?php echo number_format($energyHour, 4); ?> kWh</td>
            </tr>

            <tr>
                <td>Energy per day</td>
                <td><?php echo number_format($energyDay, 4); ?> kWh</td>
            </tr>

            <tr>
                <td>Energy per month</td>
                <td><?php echo number_format($energyMonth, 4); ?> kWh</td>
            </tr>

            <tr>
                <td>Total cost per hour</td>
                <td>RM <?php echo number_format($totalHour, 2); ?></td>
            </tr>

            <tr>
                <td>Total cost per day</td>
                <td>RM <?php echo number_format($totalDay, 2); ?></td>
            </tr>

            <tr>
                <td>Total cost per month</td>
                <td>RM <?php echo number_format($totalMonth, 2); ?></td>
            </tr>

        </table>

<?php
    } else {
        echo "<div class='alert alert-danger mt-3'>Please enter valid positive values.</div>";
    }
}
?>

    </div>

</div>

</body>
</html>
