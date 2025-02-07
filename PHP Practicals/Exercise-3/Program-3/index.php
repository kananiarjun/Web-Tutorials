<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        function reverseWordsInSentence($sentence) {
        $words = explode(' ', $sentence); // 
        $reversedWords = array_map('strrev', $words); 
        return implode(' ', $reversedWords); 
        }
        echo reverseWordsInSentence("Hello World!"); 
    ?>
</body>
</html>