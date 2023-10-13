<!DOCTYPE html>
<html>

<head>
    <title>Grade Calculator</title>
</head>

<body>
    <h1>Grade Calculator</h1>

    <?php
    // Define variables
    $score1 = "";
    $score2 = "";
    $score3 = "";
    $average = "";
    $grade = "";

    // Check if the form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get user input
        $score1 = $_POST["score1"];
        $score2 = $_POST["score2"];
        $score3 = $_POST["score3"];

        // Calculate the average
        $average = ($score1 + $score2 + $score3) / 3;

        // Determine the corresponding letter grade
        if ($average >= 90) {
            $grade = "A";
        } elseif ($average >= 80) {
            $grade = "B";
        } elseif ($average >= 70) {
            $grade = "C";
        } elseif ($average >= 60) {
            $grade = "D";
        } else {
            $grade = "F";
        }
    }
    ?>

    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="score1">Test Score 1:</label>
        <input type="number" name="score1" id="score1" required>

        <label for="score2">Test Score 2:</label>
        <input type="number" name="score2" id="score2" required>

        <label for="score3">Test Score 3:</label>
        <input type="number" name="score3" id="score3" required>

        <input type="submit" value="Calculate">
    </form>

    <?php
    // Display the average and corresponding grade
    if ($average !== "" && $grade !== "") {
        echo "<p>Average Score: $average</p>";
        echo "<p>Letter Grade: $grade</p>";
    }
    ?>
</body>

</html>