<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
function replaceVowels($string, $replacement) {
    
    $vowels = ['a', 'e', 'i', 'o', 'u', 'A', 'E', 'I', 'O', 'U'];
    $result = str_replace($vowels, $replacement, $string);
    
    return $result; 
}

$inputString = "Hello";
$replacementChar = "#";
$modifiedString = replaceVowels($inputString, $replacementChar);

echo "Original String: $inputString<br>";
echo "Modified String: $modifiedString<br>";
?>
</body>
</html>

