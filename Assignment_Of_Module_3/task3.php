<!-- Task 3: Array Sorting  

Create an array called $grades with the following values: 85, 92, 
78, 88, 95. Write a PHP function which takes "$grades" as an argument
to sort the array in descending order and print the sorted grades as array. -->



<?php 
// Array Sorting  
function sortGradesDescending($grades) {
    // Sort the grades in descending order
    arsort($grades);
    // Print the sorted grades as an array
  echo "Sorted Grades (Descending Order): ";
  print_r($grades);
}

// Create an array of grades
$grades = array(85, 92, 78, 88, 95);

// Call the function with the array of grades
sortGradesDescending($grades);
?>



