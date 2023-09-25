<?php

function generatePassword($length) {
    $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_+";
    
    $charLength = strlen($chars);
    // Initialize the password variable
    $password = '';
    // Generate a random password by selecting random characters from the character set
    for ($i = 0; $i < $length; $i++) {
        $randomChar = $chars[rand(0, $charLength - 1)];
        $password .= $randomChar;
    }
    return $password;
}
// Generate a password with a length of 12 characters
$password = generatePassword(12);
echo "Generated Password: $password";


