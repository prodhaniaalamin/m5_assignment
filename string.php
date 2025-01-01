<?php
// Define array of strings
$strings = ["Hello", "World", "PHP", "Programming"];

// Function count vowels in a string
function countVowels($string) {
    // List of lowercase and uppercase vowels
    $vowels = "aeiouAEIOU";// এটা প্রথমে আমি বুঝিনি, ছোট হতের হয় শুধু, বড় হাতের অক্ষর দিলে কাউন্ট হয় না। তখন গুগলের সাহায্য নিয়েছি।
    $count = 0;

    // execute loop for each character
    for ($i = 0; $i < strlen($string); $i++) {
        if (strpos($vowels, $string[$i]) !== false) {// Check if the character is a vowel
            $count++;//Increment count if there is a vowel
        }
    }

    return $count;// Return total number of vowels
}

// Process the array
foreach ($strings as $string) {
    $vowelCount = countVowels($string); // Calculate number of vowels
    $reversedString = strrev($string); // Reverse the string

    // Final output the results
    echo "<p>Original String: <span style='font-weight:bold'>$string</span>,
     Vowel Count: <span style='color:red'>$vowelCount</span>,
     Reversed String: <span style='color:red'>$reversedString</span></p>";
}

?>
