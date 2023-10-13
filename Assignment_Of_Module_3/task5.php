<!-- Task 5: Password Generator

Create a PHP function called generatePassword($length) that generates
a random password of the specified length. The password should 
include lowercase letters, uppercase letters, numbers, and special 
characters (!@#$%^&*()_+). Write a PHP program to generate a password
with a length of 12 characters using this function and print the password. -->

<?php
// Password Generator
function generatePassword($length) {
    // Define the character sets
    $lowercase = 'abcdefghijklmnopqrstuvwxyz';
    $uppercase = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $numbers = '0123456789';
    $specialChars = '!@#$%^&*()_+';
    
    // Create a pool of characters to choose from
    $characters = $lowercase . $uppercase . $numbers . $specialChars;
    
    // Initialize the password as an empty string
    $password = '';
    
    // Generate the password
    for ($i = 0; $i < $length; $i++) {
        // Choose a random character from the pool
        $randomChar = $characters[rand(0, strlen($characters) - 1)];
        
        // Add the random character to the password
        $password .= $randomChar;
    }
    
    return $password;
}

// Generate a password with a length of 12 characters
$password = generatePassword(12);

// Print the generated password
echo "Generated Password: " . $password;
?>
