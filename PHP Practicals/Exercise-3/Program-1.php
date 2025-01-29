<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
function countVowels($string) {
    // Define a string containing all vowels
    $vowels = 'aeiouAEIOU';
    $count = 0;

    // Loop through each character in the string
    for ($i = 0; $i < strlen($string); $i++) {
        // Check if the character is a vowel
        if (strpos($vowels, $string[$i]) !== false) {
            $count++;
        }
    }

    return $count;
}

// Example usage:
$inputString = "Hello, World!";
echo "Number of vowels: " . countVowels($inputString); // Output: Number of vowels: 3
?>

</body>
</html>