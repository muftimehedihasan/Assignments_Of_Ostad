<!DOCTYPE html>
<html>

<head>
    <title>Simple Calculator</title>
</head>

<body>
    <h1>Simple Calculator</h1>

    <?php
    // Define variables
    $number1 = "";
    $number2 = "";
    $operation = "";
    $result = "";

    // Check if the form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get user input
        $number1 = $_POST["number1"];
        $number2 = $_POST["number2"];
        $operation = $_POST["operation"];

        // Perform the selected operation
        switch ($operation) {
            case "addition":
                $result = $number1 + $number2;
                break;
            case "subtraction":
                $result = $number1 - $number2;
                break;
            case "multiplication":
                $result = $number1 * $number2;
                break;
            case "division":
                if ($number2 != 0) {
                    $result = $number1 / $number2;
                } else {
                    $result = "Cannot divide by zero";
                }
                break;
        }
    }
    ?>

    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="number1">Enter Number 1:</label>
        <input type="number" name="number1" id="number1" required>

        <label for="operation">Select Operation:</label>
        <select name="operation" id="operation" required>
            <option value="addition">Addition</option>
            <option value="subtraction">Subtraction</option>
            <option value="multiplication">Multiplication</option>
            <option value="division">Division</option>
        </select>

        <label for="number2">Enter Number 2:</label>
        <input type="number" name="number2" id="number2" required>

        <input type="submit" value="Calculate">
    </form>

    <?php
    // Display the result
    if ($result !== "") {
        echo "<p>Result: $result</p>";
    }
    ?>
</body>

</html>