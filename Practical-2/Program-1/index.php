<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $sentence = "PHP is fun to learn";
        $wordsArray = explode(" ", $sentence);
        $hyphenatedString = implode("-", $wordsArray);
        echo "Original Sentence: " . $sentence . "<br>";
        echo "Hyphenated String: " . $hyphenatedString . "<br";
    ?>
</body>
</html>
