<!-- Task 4: Multidimensional Array

Create a multidimensional array called $studentGrades to store 
the grades of three students. Each student has grades for three 
subjects: Math, English, and Science. Write a PHP function 
which takes "$studentGrades" as an argument to calculate and 
print the average grade for each student. -->



<?php
// Multidimensional Array
// Define the multidimensional array with student grades
$studentGrades = array(
    array('Math' => 85, 'English' => 90, 'Science' => 78),
    array('Math' => 92, 'English' => 88, 'Science' => 95),
    array('Math' => 78, 'English' => 85, 'Science' => 92)
);

// Function to calculate and print the average grade for each student
function calculateAverageGrades($grades) {
    foreach ($grades as $index => $student) {
        $average = array_sum($student) / count($student);
        echo "Student " . ($index + 1) . " - Average Grade: " . round($average, 2) . "\n";
    }
}

// Call the function with the student grades array
calculateAverageGrades($studentGrades);
?>
