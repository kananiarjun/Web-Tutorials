<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        function isPalindrome($string) {
            
            $cleanedString = preg_replace("/[^A-Za-z0-9]/", '', strtolower($string));
            return $cleanedString === strrev($cleanedString); 
        }
        
        
        echo isPalindrome("A man, a plan, a canal: Panama") ? 'Yes This is palindrome ,  ' : 'No this is not palindrome'; 
        
    ?>
</body>
</html>