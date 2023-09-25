<?php

function manipulateString($text) {
    // convert to all lowercase
    $text = strtolower($text);    
    // replace "brown" with "red" in the string
    $text = str_replace("brown", "red", $text);    
    echo $text;
}
$text = "The quick brown fox jumps over the lazy dog.";
// call function with provided string
manipulateString($text);