<!-- Task 1: String Manipulation

Create a string variable called $text with the value 
"The quick brown fox jumps over the lazy dog.". Write a 
PHP function which takes "$text" as an argument to:

Convert the string to all lowercase.

Replace "brown" with "red" in the string.

Print the modified text. -->


<?php
// String Manipulation
function modifyText($text) {
    // Convert the string to all lowercase
    $text = strtolower($text);
    
    // Replace "brown" with "red" in the string
    $text = str_replace("brown", "red", $text);
    
    // Print the modified text
    echo $text;
}

// Define the initial string
$text = "The quick brown fox jumps over the lazy dog.";

// Call the function with the provided string
modifyText($text);
?>
