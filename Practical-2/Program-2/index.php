<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $sentence = "Learning PHP can be exciting and rewarding!";
        $wordCount = str_word_count($sentence);
        echo "Sentence: " . $sentence . "<br>";
        echo "Word Count: " . $wordCount . "<br>";
    ?>
</body>
</html>
