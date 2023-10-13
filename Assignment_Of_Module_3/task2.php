<!-- Task 2: Array Manipulation

Create an array called $numbers containing the numbers 1 to 10. 
Write a PHP function which takes the "$numbers" array as an argument 
to remove the even numbers from the array and print the resulting array. -->


<?php 
// Array Manipulation
function removeEvenNumbers($numbers) {
    // Initialize an empty array to store odd numbers
    $oddNumbers = array();
    
    // Loop through the input array
    foreach ($numbers as $number) {
        // Check if the number is odd (not divisible by 2)
        if ($number % 2 != 0) {
            // Add odd numbers to the new array
            $oddNumbers[] = $number;
        }
    }
    
    // Print the resulting array of odd numbers
    print_r($oddNumbers);

}


// Create an array containing numbers from 1 to 10
$numbers = range(1, 10);

// Call the function with the array of numbers
removeEvenNumbers($numbers);

?>



